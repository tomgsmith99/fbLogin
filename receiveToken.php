<?php

$output = "";

if ($_GET["code"]){

	$code = $_GET["code"];

	$output .= "<p>Handshake with Facebook was successful.</p>";

	$output .= "<p>The code is: " . $code;

	if ($_GET["state"]) {
		$state = $_GET["state"];

		$output .= "<p>The state is: " . $state;
	}
	if ($_GET["response_type"]) {
		$response_type = $_GET["response_type"];

		$output .= "<p>The response_type is: " . $response_type;
	}
	if ($_GET["access_token"]) {
		$access_token = $_GET["access_token"];

		$output .= "<p>The access_token is: " . $access_token;
	}

}

else {

	$output .= "<p>Did not receive a code.</p>";

}

echo $output;