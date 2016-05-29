<?php

$output = "";

if ($_GET["code"]){

	$code = $_GET["code"];

	$output .= "<p>Received token.</p>";

	$output .= "<p>The token is: " . $code;

}

else {

	$output .= "<p>Did not receive a code.</p>";

}

echo $output;