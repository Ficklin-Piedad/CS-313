<?php

function dbConnect() {

	$dbHost = '';
	$dbPort = '';
	$dbUser = '';
	$dbPassword = '';
	$dbName = 'php';
	
	$onOpenShift =getenv('OPENSHIFT_MYSQL_DB_HOST');
	
	if ($onOpenShift == null || &onOpenShift=='') {
	// in our localhost environment
	$dbHost = '127.8.76.2';
	$dbPort = '8889';
	$dbUser = 'root';
	$dbPassword = 'root';
	}
	
	else{
	// in our OpenShift environment
	$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
	$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
	$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
	$dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
	
	}
	//echo "host:$dbHost:$dbPort name:dbName user:$dbUser";
	$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);

	return $db;
}

?>
