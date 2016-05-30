<?php

$output = "";

if ($_GET["code"]){

	$code = $_GET["code"];

	$output .= "<p>Handshake with Facebook was successful.</p>";

	$output .= "<p>The token is: " . $code;

	if ($_GET["state"]) {
		$state = $_GET["state"];

		$output .= "<p>The state is: " . $state;

	}

}

else {

	$output .= "<p>Did not receive a code.</p>";

}

echo $output;