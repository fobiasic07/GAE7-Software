<?php

require_once 'db_connect.php';

function fetchUserDetailsByID(int $id)
{
    $conn = connect();
    if ($conn === NULL) {
        return;
    }
    $sql = "SELECT S.name, 
                team_id,
                T.name AS team, 
                T.icon AS team_icon, 
                institution, 
                field, 
                year_of_study, 
                S.github, 
                linkedin, 
                twitter, 
                G.name AS 'group', 
                cohort.name AS cohort, 
                DATE(join_date) AS join_date, 
                DATEDIFF(NOW(), join_date) AS days 
        FROM students S 
        LEFT JOIN groups G ON S.group_id = G.id 
        LEFT JOIN teams T ON S.team_id = T.id 
        LEFT JOIN cohort ON S.cohort_id = cohort.id 
        WHERE S.id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    try {
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        return $stmt->fetch();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

     
}
?>