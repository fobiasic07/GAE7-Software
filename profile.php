<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work Sans">
</head>

<body  style="font-family:Work Sans, sans serif;">


    <div>
        <?php
        if (isset($_SESSION['user_id'])) {
            require_once 'fetchuser.php';
            $user = fetchUserDetailsByID($_SESSION['user_id']);
            include_once 'profile_body.php';
        } else {
            header('Location: login.php');
        }
        ?>

    </div>
</body>

</html>