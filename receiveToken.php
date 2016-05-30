<?php

$output = "";

if (!empty($_GET["code"])){

	$code = $_GET["code"];

	// $output .= "<p>Handshake with Facebook was successful.</p>";

	$output .= "<p>The code is: " . $code;
}

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

else {

	$output .= "<p>Did not receive a code.</p>";

}

echo $output;

http://www.tomgsmith.com/facebook/receiveToken.php?#access_token=EAANLmHcEhz8BAK7BfmCe7ZA12z3MfURZBs0TlGpBtGJIEhHXq9IZBUZBRpq0nkd4ZCZBLvox7TspZBZCNoZBCkxsjJIZCcFUZAaazUHPNZCgJmnntfLybQ1WmiYW8ZBIcRIOUJ2ZBurG210r189swBCy63yoORe5qPwqYg9XXhqjIgUWoZC8wZDZD&expires_in=5179