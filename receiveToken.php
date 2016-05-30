<?php

$output = "";

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