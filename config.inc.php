<?php  
	$db_hostname = 'localhost:3306';
	$db_username = 'root'; 
	$db_password = '';
	$db_database = 'verzamelaar';

	$connection = new mysqli($db_hostname, $db_username, $db_password , $db_database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

?>
