<?php

/**
 * record_timein - records time a user arrived
 * 
 * @param $connection - a non-null connection to the database
 * 
 * @return bool indicating successful query execution
 */
function record_timein($connection)
{
    $time = $_POST["time"];
    $user = $_POST["user_id"];

    $sql = 'INSERT INTO attendance(user_id, time_in) VALUES (:user, :time)';
    try {
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(":user", $user);
        $stmt->bindParam(":time", $time);
    } catch (PDOException $exception) {
        echo $exception->getMessage();
    }
    try {
        return $stmt->execute();
    } catch (PDOException $exception) {
        echo $exception->getMessage();
    } finally {
        $connection = NULL;
    }
}

/**
 * record_timeout - updates time a user leaves
 * 
 * @param $connection - a non-null connection to the database
 * 
 * @return bool indicating successful query execution
 */
function record_timeout($connection)
{
    $time = $_POST["time"];
    $user = $_POST["user"];
    $sql = "UPDATE attendance SET time_out = :time WHERE user_id = :user";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(":user", $user);
    $stmt->bindParam(":time", $time);

    try {
        $inserted =  $stmt->execute();
    } catch (PDOException $exception) {
        echo $exception->getMessage();
    } finally {
        $connection = NULL;
    }
    return $inserted;
}