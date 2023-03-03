<?php

require_once 'db_connect.php';
require_once 'fetchgroup.php';

if (isset($_POST)) {
	//trim whitespaces from variables in POST data
	$_POST = filter_var($_POST, \FILTER_CALLBACK, ['options' => 'trim']);

	//create associative array of POST data to be passed to INSERT function
	$applicant_data = array(

		//required values for both junior academy and the academy
		'name' => $_POST['name'],
		'inst' => $_POST['school'],
		'phone' => $_POST['phone'],
		'email' => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
		'year' => $_POST['year'],
		'team' => $_POST['team'],
		'age' => $_POST['age'],
		'group' => getApplicantGroup($_POST['age']),
		'date' => getDateTime(),
		'pwd' => generatePassword($_POST['name'], $_POST['phone']),

		//values not required by all academy groups
		'guardian' => (isset($_POST['guardian'])) ? $_POST['guardian'] : NULL,
		'nat_id' => (isset($_POST['nat_id'])) ? $_POST['nat_id'] : NULL,
		'gender' => (isset($_POST['gender'])) ? $_POST['gender'] : NULL,
		'address' => (isset($_POST['address'])) ? $_POST['address'] : NULL,
		'emer_name' => (isset($_POST['emergency_name'])) ? $_POST['emergency_name'] : NULL,
		'emer_phone' => (isset($_POST['emergency_phone'])) ? $_POST['emergency_phone'] : NULL,
		'field' => (isset($_POST['course'])) ? $_POST['course'] : NULL
	);

	insertApplicant($applicant_data);
}



/**
 * determine an applicant's group based on their age
 * @param mixed $age the applicant's age
 * @return mixed the applicant's group id
 */
function getApplicantGroup($age)
{
	$groups = fetchAcademyGroups();
	if ($groups) {
		foreach ($groups as $group) {
			$ages = explode('-', $group->ages);
			$range = range($ages[0], $ages[1]);
			$key = array_search($age, $range);
			if ($key)
				return ($group->id);
		}
	}
}

/**
 * returns the current date and time(Nairobi timezone)
 */
function getDateTime()
{
	date_default_timezone_set('Africa/Nairobi');
	return date('Y-m-d H:i:s');
}

/**
 * insert applicant into applicants table
 * @param array $applicant the applicants data
 */
function insertApplicant(array $applicant)
{
	$sql = "INSERT INTO applicants 
                (name, guardian_name, national_id, age, gender, email, phone, 
                emergency_contact, address, institution, field, year_of_study, 
                apply_date, team_id, group_id, emergency_contact_name, login) 
            VALUES 
                (:name, :guardian, :nat_id, :age, :gender, :email, :phone, 
                :emer_phone, :address, :inst, :field, :year, 
                :date, :team, :group, :emer_name, :pwd)";
	$conn = connect();
	$stmt = $conn->prepare($sql);
	try {
		$conn->beginTransaction();
		$stmt->execute($applicant);
		$id = $conn->lastInsertId();
		$conn->commit();
		if ($id) {
			include_once 'success.php';
		}
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

/**
 * generate a password for the applicant from their names and phone number
 * 
 * The first character of each name(space separated) is concatenated with 
 * the provided phone number and finally an exclamation mark(!)
 * 
 * @param string $name the applicant's name
 * @param mixed $phone the provided phone number
 * @return string Returns a hashed password
 */
function generatePassword(string $name, $phone)
{
	$names = explode(" ", $name);
	$pwd = "";
	foreach ($names as $w) {
		$pwd .= ucfirst(mb_substr($w, 0, 1));
	}
	$pwd .= substr($phone, -9);
	$pwd .= '!';
	return password_hash($pwd, PASSWORD_DEFAULT);
}

?>