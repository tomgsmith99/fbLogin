<?php

$output = "";

$output .= "<p><b>Facebook login</b></p>";

$output .= "<p><b>Options for getting data back from FB</b></p>";

$url = "https://www.facebook.com/dialog/oauth?client_id=927543134029631&redirect_uri=http://www.tomgsmith.com/facebook/receiveToken.php";

$options["default"]["url"] = $url;
$options["default"]["desc"] = "Only the client_id and redirect_uri are required. Only a code is passed to the redirect_uri (equivalent to passing response_type=code)";

$state = random_bytes(9);

$options["state"]["url"] = $url . "&state=" . $state;
$options["state"]["desc"] = "Include a value for state, to prevent CSRF.";

$options["token"]["url"] = $url . "&response_type=token";
$options["token"]["desc"] = "Get a token instead of a code.";

foreach($options as $name=>$opts) {
	$link = "<a href = '" . $opts["url"] . "'>";

	$item = "<p>" . $link . $name . "</a>: " . $opts["desc"] . "</p>";

	$output .= $item;

}

echo $output;

// <html>

// <head></head>

// <body>
	
// <p>This page shows a variety of ways to log in to Facebook, and get different sets of information back depending on the parameters that you pass to Facebook.</p>

// <p><a href = "https://www.facebook.com/dialog/oauth?client_id=927543134029631&redirect_uri=http://www.tomgsmith.com/facebook/receiveToken.php">Default</a>: Only the client_id and redirect_uri are required. Only a code is passed to the redirect_uri (equivalent to passing response_type=code)</a></p>

// <p>

// 	<p>Click <a href = "https://www.facebook.com/dialog/oauth?client_id=927543134029631&redirect_uri=http://www.tomgsmith.com/facebook/receiveToken.php">here</a> to log in to Facebook.</p>



// </body>

// </html>