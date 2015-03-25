<?php  
/*
Adding data to mysql tables

*/

//CONNECT to MySQL
$connect = mysql_connect('localhost', 'user', 'pass') or die("Check your server connection something went wrong!");


//make sure you are using the right database
mysql_select_db("moviesite");

//insert data into movie table
$insert = "INSERT INTO movie (movie_id, movie_name, movie_type, "
.
"movie_year, movie_leadactor, movie_director) " .
"VALUES (1, 'Brude Almighty', 5, 2003, 1, 2), " .
"(2, 'Office Space', 5, 1999, 5, 6), " .
"(3, 'Grant Canyon', 2 ,1991, 4 ,3)";

$result = mysql_query($insert) or die (mysql_error());

//insert data into movietype table
$type = "INSERT INTO movietype (movietype_id, movietype_label) "
.
"VALUES (1,'Sci Fi'), " .
"(2, 'Drama'), " .
"(3, 'Adventure'), " .
"(4, 'War'), " .
"(5, 'Comedy'), " .
"(6, 'Horrow'), " .
"(7, 'Action'), " .
"(8, 'Kids')";

$result = mysql_query($type) or die(mysql_error());

//insert data into people table 
$people = "INSERT INTO people (people_id, people_fullname, "
.
"people_isactor, people_isdirector) " .
"VALUES (1, 'Jim Carrey', 1, 0), " .
"(2, 'Tom Shadyac', 0, 1), " .
"(3, 'Lawrence Kasdan', 0, 1), " .
"(4, 'Kevin Kline', 1, 0), " .
"(5, 'Ron Livingston', 1, 0), " .
"(6, 'Mike Judge', 0, 1)";

$result = mysql_query($people) or die(mysql_error());

?>