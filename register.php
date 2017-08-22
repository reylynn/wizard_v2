<?php
$originalDate = "m-d-Y";
$newDate = date("Y-m-d", strtotime($originalDate));

$user_firstname = $_POST['firstname'];
$user_middlename = $_POST['middlename'];
$user_lastname = $_POST['lastname'];
$user_birthday = $_POST['birthday'];
$user_contact_no = $_POST['contact_no'];
$user_address = $_POST['address'];
$user_email = $_POST['email'];
$user_username = $_POST['username'];
$user_password = $_POST['password'];

include('includes/connection.php');

$sql = "INSERT INTO wizard_userAcc VALUES(NULL,'$user_firstname','$user_middlename','$user_lastname','$user_birthday','$user_contact_no','$user_address','$user_email','$user_username','$user_password')";

if (mysql_query($sql))
{
	Echo "Record successfully inserted";
}	
else
{
	die('Unable to insert data:' .mysql_error());
}
?>  
