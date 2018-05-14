<?php
require __DIR__ . '/vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

function goToAuthUrl()
{
	$client_id = $_SERVER['CLIENT_ID'];
	$redirect_url = "http://54.245.32.80/callback.php";
	if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		/*$url = "https://github.com/oauth/authorize?client_id=". $client_id. "&rediect_url=".$redirect_url."&scope=user"; */
		$url ="https://github.com/login/oauth/authorize?scope=user:email&client_id=". $client_id;
		header("location: $url");
	}
}

function fetchData()
{
	$client_id = $_SERVER['CLIENT_ID'];
	$redirect_url = "http://54.245.32.80/callback.php";
	if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		if(isset($_GET['code'])) {
			$code=$_GET['code'];
			/*echo "<script>console.log( 'Code: " . $code . "' );</script>";*/
			$post= http_build_query(array(
			'client_id' => $client_id,
			'redirect_url' => $redirect_url ,
			'client_secret' => $_SERVER['CLIENT_SECRET'],
			'code' => $code
		  ));
		}
		$access_data=file_get_contents('https://github.com/login/oauth/access_token?'. $post);
		
		$exploded1 = explode('=',$access_data);
		$exploded2 = explode('&', $exploded1[1]);
		$access_token = $exploded2[0];
		$opts = array(
        		'http'=>array(
                		'method'=>"GET",
                		'header'=>"User-Agent:DockerBrowser"
        	));

		$context = stream_context_create($opts);
		$access_data=file_get_contents('https://api.github.com/user?access_token='.$access_token,false,$context);
		$data=json_decode($access_data,true);

		$_SESSION['access_data']=$access_data;
		$_SESSION['user']=$data["login"];


	}

}

?>
