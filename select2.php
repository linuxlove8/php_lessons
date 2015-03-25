<?php  
//Creating table with php

//connect to mysql
$dbc = mysql_connect('localhost', 'user', 'pass') or die("Could not connect to db server!");

mysql_select_db('moviesite');

$query = "SELECT * " .
	"FROM movie " .
	"WHERE movie_year>1990 " .
	"ORDER BY movie_type";
$result = mysql_query($query) or die(mysql_error());

echo "<table border=\"1\">\n";

while ($row = mysql_fetch_assoc($result)) {
	echo "<tr>\n";
	foreach($row as $value) {
		echo "<td>\n";
		echo $value;
		echo "</td>\n";
	}
	echo "</tr>\n";
}

echo "</table>\n";

?>