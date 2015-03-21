<?php 
/*
PASSING php variables through url 

example0: http://localhost/php_lessons/url_variables.php?favmovie=avatar
example1: http://localhost/php_lessons/url_variables.php?favmovie=avatar&movirating=3
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo "favorite movie: " ." ". $_REQUEST['favmovie']; ?></title>
</head>

<body>

<div>
	<?php
		echo "My favorite movie is: ";
		echo $_REQUEST['favmovie'];
		echo "<br>";

		$movierate = 5;
		echo "My movie rating for this movie is: ";
		echo $movierate;
	?>
	</div>

</body>
</html>