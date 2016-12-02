<!DOCTYPE html>
<html>
<body>

<h1>Hello Wise Guys!</h1>

<h2>What Is Your Name?</h2>
<form action="/">
	<input type="test" name="Name" label="Name" />
	<input type="submit" value="Submit" />
</form>

<?php

$start = time() + microtime();

require "statsd.php";

if( !empty($_REQUEST)) {
	$username = ( !empty($_REQUEST["Name"]) ) ? $_REQUEST["Name"] : "Bot";
}

$isMobile = (bool) preg_match('/Android|iPhone|iPad|iPod/is', $_SERVER["HTTP_USER_AGENT"]);

StatsD::increment("demo.pageload." . (( $isMobile === true ) ? "mobile" : "desktop"));

$end = time() + microtime();

StatsD::gauge("demo.pageloadtime", $end - $start);

?>

</body>
</html>
