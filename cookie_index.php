<?php 
/*

PASSING php variables through cookie

*/
session_start();

//check to see if user has logged in with a valid password
if ($_SESSION['authuser'] != 1) {
	echo "Sorry, but you don't have permission to view this page!";
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>passing variables through cookies</title>
</head>
<body>

<?php 

echo "Welcome to our site, ";
echo $_COOKIE['username'];
echo "! <br>";
echo "My favorite movie is ";
echo $_REQUEST['favmovie'];
echo "<br>"; 
$movierate = 5;
echo "My movierating for this movie is: ";
echo $movierate;

?>

</body>
</html>