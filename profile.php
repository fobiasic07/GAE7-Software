<?php
include_once 'header.php';
?>

<body style="font-family:Work Sans, sans serif;">


    <div>
        <?php
        if (isset($_SESSION['user_id'])) {
            require_once 'fetchuser.php';
            require_once 'fetchteams.php';
            $user = fetchUserDetailsByID($_SESSION['user_id']);
            $projects = fetchTeamProjects($user->team_id);
            include_once 'profile_body.php';
        } else {
            header('Location: login.php');
        }
        ?>

    </div>
</body>

</html>