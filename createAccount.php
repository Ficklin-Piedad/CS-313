<?php

require("password.php");


$username = $_POST['txtUser'];
$password = $_POST['txtPassword'];

if (!isset($username) || $username == ""
	|| !isset($password) || $password == "")
{
	header("Location: signUp.php");
	die(); 
}


$username = htmlspecialchars($username);


$hashedPassword = password_hash($password, PASSWORD_DEFAULT);



$dbUser = '';
$dbPass = '';
$dbName = '';
$dbHost = ''; 
try
{
	
	$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

	
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	$query = 'INSERT INTO login(username, password) VALUES(:username, :password)';

	$statement = $db->prepare($query);

	$statement->bindParam(':username', $username);

	
	$statement->bindParam(':password', $hashedPassword);

	$statement->execute();
}
catch (Exception $ex)
{
	
	echo "Error with DB. Details: $ex";
	die();
}



header("Location: signIn.php");
die(); 

?>