<?php
require "init.php";

fetchData();

if (!isset($_SESSION['user'])) {
        header("location: index.php");
}

/* Make sure that code below does not get executed when we redirect. */
/*exit;*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Logged in!</title>
</head>

<body style="margin-top: 200px; text-align: center; font-size: 30px;">
	<a href ="logout.php" >Click here to logout</a>
	<div>
		<?php echo($_SESSION['user']) ?>
		
</body>
</html>
