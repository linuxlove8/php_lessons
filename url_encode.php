<?php 
/*
PASSING php variables through urlencode() function 
example: http://localhost/php_lessons/url_variables.php?favmovie=$favmovie 
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Find my Favorite Movie!</title>
</head>
<body>

<?php 

	$favmovie = urlencode("The Lion King");

	echo "<a href='url_variables.php?favmovie=$favmovie'>";
	echo "Click here to see information about my favotite movie";
	echo "</a>";
?>
</body>
</html>