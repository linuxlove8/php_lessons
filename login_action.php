<?php  
/*
Check the information taken from login.php
*/

//create a session
session_start();

$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;


//check username and password information
if ( ($_SESSION['username'] == 'horrow') && ($_SESSION['userpass'] == '12345') ) {
	$_SESSION['authuser'] = 1;
} else {
	echo "Sorry, but you don't have permission to view this site!";
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Check the information taken from login.php</title>
</head>
<body>
<?php include('header.php'); ?>

<?php 

$myfavmovie = urlencode('The 100s');
echo "<a href='loged_index.php?favmovie=$myfavmovie'>";
echo "Click here to see information about my favotite movie";
echo "</a>";

?>

</body>
</html>