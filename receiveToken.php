<?php

$output = "";

// $getArray = print_r($_GET, TRUE);

// echo $getArray;

// print_r($getArray); 

// echo "<p>the access token is: " . $_GET["#access_token"];

if (!empty($_GET["code"])){

	$code = $_GET["code"];

	$output .= "<p>The code is: " . $code;
}

if (!empty($_GET["state"])) {
	$state = $_GET["state"];

	$output .= "<p>The state is: " . $state;
}
if (!empty($_GET["#access_token"])) {
	$access_token = $_GET["#access_token"];
	$expires_in = $_GET["expires_in"];

	$output .= "<p>The access_token is: " . $access_token;
	$output .= "<p>Expires in: " . $expires_in;
}


$postFields = array();
$postFields["client_id"] = "927543134029631";
$postFields["client_secret"] = "108b9328c3ecbc0abfbadd3761b58217";
$postFields["redirect_uri"] = "http://www.tomgsmith.com/facebook/receiveToken.php";
$postFields["code"] = $code;

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://graph.facebook.com/v2.3/oauth/access_token");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST, count($postFields));
curl_setopt($curl, CURLOPT_POSTFIELDS, $postFields);

$result = curl_exec($curl);

$output .= "<p>the curl result is: " . $result;


// GET https://graph.facebook.com/v2.3/oauth/access_token?
//     client_id={app-id}
//    &redirect_uri={redirect-uri}
//    &client_secret={app-secret}
//    &code={code-parameter}

$output .= "Click <a href='https://graph.facebook.com/v2.3/oauth/access_token?client_id=927543134029631&redirect_uri=http://www.tomgsmith.com/facebook/receiveToken.php&client_secret=108b9328c3ecbc0abfbadd3761b58217&code=" . $code . "'>here to exchange the access code for an access token.";

echo $output;