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


<p>not sorted</p>
<pre>
	<?php print_r($fruits); ?>
</pre>

<p>sorted</p>
<pre>
	<?php
	 sort($fruits);
	 print_r($fruits); 
	 ?>
</pre>


</body>
</html>