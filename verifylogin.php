<?php
session_start();
require __DIR__ . '/db_connect.php';

$conn = connect();
if ($conn != NULL) {
    $email = $_POST["email"];
    $password = $_POST["passwd"];

    //first check for user in users table then newcomers table
    $stmt = $conn->prepare("SELECT id, email, pwd FROM students WHERE (email = :email)");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($stmt as $row) {
            if (password_verify($password, $row['pwd'])) {
                $_SESSION['user_id'] = $row['id'];
                header('Location: profile.php');
                exit();
            } else
                echo "Incorrect Password";
        }
    } else {
        echo 'Not found';
        header('Location: applyacad.php');
        exit();
    }
}


?>