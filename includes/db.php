<?php
/*
	Name: Rob Savoie
	Date: Sept 15/2021
	File Name: db.php
 */

function db_connect()
{
	$conn = pg_connect("host=".DB_HOST." port=".DB_PORT." dbname=".DATABASE." user=".DB_ADMIN." password=".DB_PASSWORD);
	return $conn;
}

$conn = db_connect();

$user_select = pg_prepare($conn, "user_select", " SELECT * FROM users WHERE EmailAddress=$1");

function user_select($email)
{
	global $conn;
	return pg_execute($conn, "user_select", array($email));
}

function user_authenticate($email, $plain_password)
{
	$result = user_select($email);
	$authenticated = false;
	if(pg_num_rows($result) == 1)
	{
		$user = pg_fetch_assoc($result, 0);
		if(password_verifty($plain_password, $user["password"]))
		{
			$authenticated = true;
		}
	}
	return $authenticated;
}

?>