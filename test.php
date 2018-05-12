<?php
$opts = array(
	'http'=>array(
		'method'=>"GET",
		'header'=>"User-Agent:DockerBrowser"
	));

$context = stream_context_create($opts);
$access_data=file_get_contents('https://api.github.com/user?access_token=1d3f3eb2952f7230b1091c7156d1197b9dbf88f7',false,$context);

var_dump($access_data);

?>

