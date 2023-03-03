<?php
require_once 'db_connect.php';

function fetchApplicantByID($id)
{
	$sql = "SELECT A.*, 
                G.name AS 'group',
				T.name AS team 
            FROM applicants A
            JOIN teams T ON  A.team_id = T.id 
            JOIN groups G ON A.group_id = G.id
            WHERE A.id = ?";
	$conn = connect();
	$stmt = $conn->prepare($sql);
	try {
		$stmt->execute([$id]);
		$applicant = $stmt->fetch(PDO::FETCH_OBJ);
		return $applicant;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function fetchApplicantByName()
{

}

/**
 * fetch pending applications for a specific group
 * the results are ordered by the application date
 * @param int $limit how many records to fetch(default is 50)
 * @param int $group the id of the group
 */
function fetchPendingGroupApplicants(int $group, int $limit = 50)
{
	$result = array();
	$sql = "SELECT A.id,	
					A.name, age, gender,
					guardian_name,					email, phone, 
					DATE_FORMAT(apply_date, '%d %b, %Y') AS date, application_status,
					institution, field, year_of_study AS year,
					G.name AS 'group',
					T.name AS 'team'
			FROM applicants A
			JOIN groups G ON A.group_id = G.id
			JOIN teams T ON A.team_id = T.id
			WHERE A.group_id = :gid AND application_status = 0
			ORDER BY apply_date
			LIMIT :lim";
	$conn = connect();
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':lim', $limit, PDO::PARAM_INT);
	$stmt->bindParam(':gid', $group, PDO::PARAM_INT);
	try {
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_OBJ);
		$result = $stmt->fetchAll();
	} catch (PDOException $e) {
		$e->getMessage();
	}
	return $result;
}
?>