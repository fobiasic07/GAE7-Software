<?php

require_once 'db_connect.php';

if (isset($_POST) && isset($_POST['id'])) {
    $id = $_POST['id'];
    approveStudent($id);
}

/**
 * approve an academy application  
 * The applicant is added into the students table 
 * and their application_status updated
 * @param int $id id of the applicant to approve
 */
function approveStudent(int $id)
{
    $sql = 'INSERT INTO students
            (name, national_id, email, phone, institution, field, year_of_study, group_id, team_id, pwd)
            SELECT name, national_id, email, phone, institution, field, year_of_study, group_id, team_id, login
            FROM applicant
            WHERE applicants.id = :id';

    $conn = connect();
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    try {
		$conn->beginTransaction();
        $stmt->execute();
		$conn->commit();
		if ($conn->lastInsertId()) {
            updateApplicationStatus($id);
		}
	} catch (PDOException $e) {
		echo $e->getMessage();
	}finally{
        $conn = NULL;
    }
            
}

/**
 * updates the applicant's application_status to 1(Accepted) 
 * together with the approval time
 */
function updateApplicationStatus($id)
{
    $sql = 'UPDATE applicants
            SET application_status = 1
            WHERE id = :id';
    
    $conn = connect();
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}
?>