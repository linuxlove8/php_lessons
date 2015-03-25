<?php 
/*

Sorting arrays in php"

arsort()
asort()
rsort()
sort()

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

?>

<html>
<head>
	<title>Sorting arrays</title>
</head>
<body>


<div>not sorted</div>
<pre>
	<?php print_r($fruits); ?>
</pre>

<div>sorted</div>
<pre>
	<?php
	 sort($fruits);
	 print_r($fruits); 
	 ?>
</pre>


</body>
</html>