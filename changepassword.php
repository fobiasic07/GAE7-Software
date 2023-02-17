<?php

/**
 * handles password change requests
 */
require __DIR__ . '/db_connect.php';
$conn = connect();

if ($conn != NULL) {
    $pwd = hash_password($_POST["password"]);
    $user = $_POST["user"];

    $sql = "UPDATE students SET pwd = :password WHERE id = :user";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':password', $pwd);
        $stmt->bindParam(':user', $user);
    } catch (PDOException $e) {
        echo $e->getMessage();
    } finally {
        $conn = NULL;
    }
}