<?php

/**
 * fetch a list of available teams
 * 
 * @param $connection: database connection
 * 
 * @return array $data: array of team rows
 */
function teams($connection)
{
    $smt = $connection->prepare('SELECT id, name FROM teams ORDER BY id');
    try {
        $smt->execute();
        $data = $smt->fetchAll();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $connection = NULL;
    }
    return $data;
}

function team_details($connection)
{
    $sql = 'SELECT * FROM teams';
    $stmt = $connection->prepare($sql);
    try {
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $connection = NULL;
    }
}
