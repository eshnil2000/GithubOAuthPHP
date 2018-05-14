<?php
require "init.php";
require __DIR__ . '/vendor/autoload.php';

if (isset($_SESSION['user'])) {
	header("location: callback.php");
	exit;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Sign in with github </title>
</head>

<body style="margin-top: 200px; text-align: center; font-size: 30px;">
	<a href ="login.php" >Sign in with Github </a>
</body>
</html>
