<html>
<head>
	<title>String Manipulation</title>
</head>
<body>

<h2>String Manipulation Program</h2>

<form method="post">
	Enter the String: <input type="text" name="str" required>
	<br><br>
	<input type="submit" name="submit" value="Process">
</form>

<?php
if(isset($_POST['submit'])) {
	$str = $_POST['str'];
	
	echo "<h3>Results:</h3>";

	$length = strlen($str);
	echo "Length of String: ".$length ."<br>";
	
	$reverse = strrev($str);
	echo "Reversed String: ".$reverse."<br>";


	$substring = substr($str,0,3);
	echo "Substring (first 3 characters): ".$substring."<br>";
        
        echo "string to upperecase: ".strtoupper($str)."<br>";
        echo "string to Lowercase: ".strtolower($str)."<br>";
        echo " trimed string :".trim($str)."<br>";


 
}
?>

</body>
</html>