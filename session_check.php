<?php
/*
Check session() AND passing variables through
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
	<title>My Movie site - <?php echo $_REQUEST['myfavmovie']; ?></title>
</head>
<body>

<?php 

echo "Welcome to our site, ";
//passing variable via session
echo $_SESSION['username'];
echo "! <br>";
echo "My fav movie is: ";
//passing variable via url
echo $_REQUEST['myfavmovie'];
echo "<br>"; 
$movierate = 5;
echo "My movie rating for this movie is: ";
echo $movierate;

?>

</body>
</html>