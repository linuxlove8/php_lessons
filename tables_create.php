<?php 
/*
Creating mysql table
*/

//Connect to MySQL
$dbc = mysql_connect('localhost', 'user', 'pass') or die("Check your server connection something went wrong!");

//Create the main database if it doesn't already exist
$create = mysql_query("CREATE DATABASE IF NOT EXISTS moviesite") or die(mysql_error());

//Make sure recently created database is the active one
mysql_select_db("moviesite");

//Create tables

//create movie table
$movie = "CREATE TABLE movie (
	movie_id int(11) NOT NULL auto_increment,
	movie_name varchar(255) NOT NULL,
	movie_type tinyint(2) NOT NULL default 0,
	movie_year int(4) NOT NULL default 0,
	movie_leadactor int(11) NOT NULL default 0,
	movie_director int(11) NOT NULL default 0,
	PRIMARY KEY (movie_id), 
	KEY movie_type (movie_type,movie_year)
)";

//sends query to the server!!!
$result = mysql_query($movie) or die(mysql_error());

//create movietype table
$movietype = "CREATE TABLE movietype (
	movietype_id int(11) NOT NULL auto_increment,
	movietype_label varchar(100) NOT NULL,
	PRIMARY KEY (movietype_id)
)";

$result = mysql_query($movietype) or die(mysql_error());


//create people table
$people = "CREATE TABLE people (
	people_id int(11) NOT NULL auto_increment,
	people_fullname varchar(255) NOT NULL,
	people_isactor tinyint(1) NOT NULL default 0,
	people_isdirector tinyint(1) NOT NULL default 0,
	PRIMARY KEY (people_id)
	)";

$result = mysql_query($people) or die (mysql_error());

echo "Movie database successfully created!";
?>