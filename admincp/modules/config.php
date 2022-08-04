<?php
	$host = '127.0.0.1:3306';
	$user_name = 'root';
	$password = '';
	$db_name = 'db_xiaomi_sales';

	$conn = mysqli_connect($host, $user_name, $password, $db_name);

	if (!$conn) {
		echo "Connection failed: ".mysqli_connect_error();
	}
?>