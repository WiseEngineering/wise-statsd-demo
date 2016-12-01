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
	var_dump($_REQUEST);
}

?>

</body>
</html>
