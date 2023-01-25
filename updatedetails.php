<?php

require __DIR__ . '/db_connect.php';
$conn = connect();
if ($conn != NULL) {
    try {

        $email = $_GET["email"];
        $phone = $_GET["phone"];
        $name = $_GET["user_name"];
        $school = $_GET["univ"];
        $course = $_GET["uni_course"];
        $year = $_GET["year"];
        $stmt = $conn->prepare("INSERT INTO users(name, email, phone, uni, course, year) VALUES (:name, :email, :phone, :uni, :course, :year)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':uni', $school);
        $stmt->bindParam(':year', $year);   
        $stmt->bindParam(':course', $course);   

        $stmt->execute();
        echo "<h3> Added " . $name . "</h3>";
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $conn = NULL;
    }
}
?>
//$update_sql = "UPDATE rpacks SET rpacks_location = :location WHERE rpacks_id = :id";