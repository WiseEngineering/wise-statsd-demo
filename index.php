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

if( !empty($_REQUEST)) {
	$username = ( !empty($_REQUEST["Name"]) ) ? $_REQUEST["Name"] : "Bot";
}

$agent = $_SERVER["HTTP_USER_AGENT"];

var_dump(preg_match('/Android|iPhone|iPad|iPod/is', $agent));

?>

</body>
</html>
