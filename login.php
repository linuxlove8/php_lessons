<?php 
/*
Passing variables with html <form>
*/

//release from all previously assighned variables
session_unset();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Passing variables with html form.</title>
</head>
<body>

<form method="post" action="login_action.php">

	<p>
		Enter your username: 
		<input type="text" name="user">	
	</p>

	<p>
		Enter your password: 
		<input type="password" name="pass">	
	</p>

	<p>
		<input type="submit" name="submit" value="Login">	
	</p>

</form>

</body>
</html>