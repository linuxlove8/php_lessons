<?php 
//Using while and foreach 

//connect to MySql
$dbc = mysql_connect('localhost', 'user', 'pass') or die("Could not connect to DB server!");

//make sure we are using the right database
mysql_select_db('moviesite');

$query = "SELECT movie_name, movie_type " .
	"FROM movie " .
	"WHERE movie_year>1990 " .
	"ORDER BY movie_type";

//send query to the server
$result = mysql_query($query) or die(mysql_error());


while ($row = mysql_fetch_array($result)) {
	extract($row);
	echo $movie_name;
	echo " - ";
	echo $movie_type;
	echo "<br>";
}

while ($row = mysql_fetch_assoc($result)) {
	foreach ($row as $vall) {
		echo $vall;
		echo " ";
	}
	echo "<br>";
}


?>