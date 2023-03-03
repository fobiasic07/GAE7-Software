<?php

require_once 'db_connect.php';

/**
 * fetch all academy groups from the database
 */
function fetchAcademyGroups()
{
    $sql = 'SELECT id,  
                    name,                   
                    ages
            FROM groups';
    $conn = connect();
    $stmt = $conn->prepare($sql);
    try {
        $stmt->execute();
        $groups = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $groups;
    } catch (PDOException $e) {
        echo $e->getMessage();
    } finally {
        $conn = NULL;
    }
}