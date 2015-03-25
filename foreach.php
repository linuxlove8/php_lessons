<?php 
/*
foreach command for arrays ( used only with arrays )
*/
?>


<?php

$fruits = array(
	'apple',
	'orange',
	'banana',
	'pineapple',
	'lime',
	'peach',
	'grapefruit',
	'cherry',
	'apricot',
	'raspberry'
	);

echo "My favorite fruits are: ";
echo "<br><br>";

foreach($fruits as $value) {
	//these lines will be executed as long as there is a value in $fruits
	echo $value . "<br>";
}

?>