<?php
require_once 'fetchapplicant.php';


if (empty($_GET['p'])) {
	echo 'Something went wrong';
	applicantLogin();
} else {
	$id = substr($_GET['p'], 3, -2);
	$applicant = fetchApplicantByID($id);
	include_once 'views\applicant_details.php';	
}


function applicantLogin()
{
	include_once 'applicantlogin.php';
}