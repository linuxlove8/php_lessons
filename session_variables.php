<?php
/*
Create a session
PASSING php variables through session() 
*/

session_start();
$_SESSION['username'] = "Joe12345";
$_SESSION['authuser'] = 1;

?>

<!DOCTYPE html>
<html>
<head>
	<title>session_variables, create a session</title>
</head>
<body>

<?php  

$my_favmovie = urlencode("Avatar");

//assighning values to a variable in the URL
echo "<a href='session_check.php?myfavmovie=$my_favmovie'>";
echo "Click here to see information about my favorite movie";
echo "</a>";

?>

</body>
</html>