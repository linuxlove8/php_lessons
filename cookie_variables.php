<?php 
/*
Create a cookie
PASSING php variables through cookie

syntax:
setcookie('cookiname', 'value', 'expiration time', 'path', 'domain', 'secure connection')
*/
setcookie('username', 'Joe', time()+60);
session_start();
$_SESSION['authuser'] = 1;

//cookie information it's not accessisble on current page cuz cookies first have to be created!!!

?>

<!DOCTYPE html>
<html>
<head>
	<title>Creating cookies, passing variables through cookies</title>
</head>
<body>

<?php 

$myfavmovie = urlencode("Titanic");
echo "<a href='cookie_index.php?favmovie=$myfavmovie'>";
echo "Click here to see information about my favorite movie";
echo "</a>";

?>

</body>
</html>