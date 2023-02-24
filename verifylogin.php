<?php

session_start();

require_once 'db_connect.php';

$email = strtolower($_POST["email"]);
$password = $_POST["passwd"];

$sql_admin = "SELECT id, 
                        LOWER(name) AS name, 
        				email, 
    					pwd 
						FROM admins 
						WHERE (email = :email) OR (name = :email)";

$sql_student = "SELECT id, 
    						LOWER(name) AS name, 
   							email, 
    						pwd 
					FROM students 
					WHERE (email = :email) OR (name = :email)";

$user = check_user($sql_admin, $email);
//first check for user in admins table then students table
if (!$user) {
	$user = check_user($sql_student, $email);
	if (password_verify($password, $user->pwd)) {
		set_session($user, FALSE);
	} else
		echo "Incorrect Password";
} else {
	if (password_verify($password, $user->pwd)) {
		set_session($user, TRUE);
	} else
		echo "Incorrect Password";
} /* else {
 echo 'Not found';
 header('Location: applyacad.php');
 exit();
 } */


function check_user($sql, $email): mixed
{
	$conn = connect();
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':email', $email);
	try {
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_OBJ);
		$user = $stmt->fetch();
		return $user;
	} catch (PDOException $e) {
		echo $e->getMessage();
		return NULL;
	}

}
function set_session($user, bool $admin)
{
	$_SESSION['user_id'] = $user->id;
	$_SESSION['user_name'] = $user->name;
	$_SESSION['is_admin'] = $admin;
	$redir = ($admin) ? 'Location: adminprofile.php': 'Location: profile.php'; 
	header($redir);
	exit();
}

?>