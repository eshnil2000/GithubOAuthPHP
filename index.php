<?php
require "init.php";

/*if (isset($_SESSION['user'])) {
	header("location: callback.php");
}*/

/* Redirect browser */
/*header("Location: http://54.245.32.80/redir/index2.html"); */
 
/* Make sure that code below does not get executed when we redirect. */
/*exit;*/

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
