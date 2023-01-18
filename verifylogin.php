<?php

    require __DIR__ . '/db_connect.php';

    $conn = connect();
    if ($conn != NULL){
        $email = $_GET["email"];
        $password = $_GET["passwd"];

        //first check for user in users table then newcomers table
        $stmt = $conn->prepare("SELECT email, pwd FROM users WHERE (email = :email)");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach($stmt as $row) {
                if($password == $row['pwd'])
                    echo 'Correct Password. Redirecting...';
                else
                    echo "Incorrect Password";
            }
        } else {
            $stmt = $conn->prepare("SELECT email, pwd FROM newcomers WHERE (email = :email)");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach($stmt as $row) {
                    if($password == $row['pwd'])
                        echo 'Correct Password. Redirecting...';
                    else
                        echo "Incorrect Password";
                }
            }
            else{
                echo 'Go see Ngugi';
            }
        }
            
    }
?>