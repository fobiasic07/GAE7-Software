<?php

require_once 'db_connect.php';

/**
 * fetch a list of available teams
 * 
 * @return array $data: array of team rows
 */
function teams()
{
    $connection = connect();
    $sql = 'SELECT id, 
                    name 
            FROM teams 
            ORDER BY id';
    $smt = $connection->prepare($sql);
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

function team_details()
{
    $connection = connect();

    $sql = 'SELECT * FROM teams ORDER BY name';
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

function fetchTeamProjects(int $team_id) : ?array
{
    $connection = connect();

    $sql = "SELECT title,
                    projects.description,
                    start_date,
                    google_doc,
                    teams.name AS team
            FROM projects
            JOIN teams ON projects.team = teams.id
            WHERE team = :id";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':id', $team_id, PDO::PARAM_INT);
    try {
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $data = $stmt->fetchAll();
        return $data;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $connection = NULL;
    }
}