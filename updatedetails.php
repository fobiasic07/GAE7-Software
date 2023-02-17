<?php

require __DIR__ . '/db_connect.php';
require __DIR__ . '/password.php';
$conn = connect();
if ($conn != NULL) {
    try {

        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $name = $_POST["user_name"];
        $school = $_POST["univ"];
        $course = $_POST["uni_course"];
        $year = $_POST["year"];
        $password = hash_password($_POST["passwd"]);
        $team = $_POST["team"];
        $stmt = $conn->prepare("INSERT INTO users(name, email, phone, uni, course, year, pwd) VALUES (:name, :email, :phone, :uni, :course, :year, :pwd)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':uni', $school);
        $stmt->bindParam(':year', $year);   
        $stmt->bindParam(':course', $course);   
        $stmt->bindParam(':pwd', $password);   
        $stmt->execute();
        $stmt = $conn->prepare("INSERT INTO user_team(user_id, team_id) VALUES (:user_id, :team_id)");
        $stmt->bindParam(':user_id', $phone);
        $stmt->bindParam(':team_id', $team);
        $stmt->execute();

        echo "<h3> Added " . $name ." team: ". $team . "</h3>";
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $conn = NULL;
    }
}
?>