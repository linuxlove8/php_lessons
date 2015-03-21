<?php 
/*
Header template
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Header template</title>
</head>
<body>


<div style="text-align: center;">

	<h2>Welcome to my site</h2>

	<?php  
		echo "<p>";
		echo "Today is ";
		echo date("F j");
		echo ", ";
		echo date("Y");
		echo "</p>";
		echo "<hr>";
	?>
</div>
</body>
</html>