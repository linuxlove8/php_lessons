<?php  
/*
Check $_SESSION['authuser'] to grant acces to a page or not!
*/
session_start();


//check to see if user has loged in with a valid password
if ($_SESSION['authuser'] != 1) {
	echo "Sorry, but you don't have permission to view this site";
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_REQUEST['favmovie']; ?></title>
</head>
<body>
<?php include('header.php'); ?>


<?php

echo "Welcome to our site, ";
echo $_SESSION['username'];
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