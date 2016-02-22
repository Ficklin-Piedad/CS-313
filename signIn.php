<?php

require("password.php"); 
session_start();

$badLogin = false;



if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
	
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];

	// Get the hashed password from the DB
	
	$dbPass = '';
	$dbName = '';
	$dbHost = ''; 

	try
	{
		// Create the PDO connection
		$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

		
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

		$query = 'SELECT password FROM login WHERE username=:username';

		$statement = $db->prepare($query);
		$statement->bindParam(':username', $username);

		$result = $statement->execute();

		if ($result)
		{
			$row = $statement->fetch();
			$hashedPasswordFromDB = $row['password'];

			
			if (password_verify($password, $hashedPasswordFromDB))
			{
				
				$_SESSION['username'] = $username;
				header("Location: home.php");
				die(); // we always include a die after redirects.
			}
			else
			{
				$badLogin = true;
			}

		}
		else
		{
			$badLogin = true;
		}
	}
	catch (Exception $ex)
	{
		
		echo "Error with DB. Details: $ex";
		die();
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
</head>

<body>
<div>

<?php
if ($badLogin)
{
	echo "Incorrect username or password!<br /><br />\n";
}
?>

<h1>Please sign in below:</h1>

<form id="mainForm" action="signIn.php" method="POST">

	<input type="text" id="txtUser" name="txtUser"></input>
	<label for="txtUser">Username</label>
	<br /><br />

	<input type="password" id="txtPassword" name="txtPassword"></input>
	<label for="txtPassword">Password</label>
	<br /><br />

	<input type="submit" value="Sign In" />

</form>

<br /><br />

Or <a href="signUp.php">Sign up</a> for a new account.

</div>

</body>
</html>