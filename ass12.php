<?php
// Step 1: Create an array and store values
$fruits = array("Apple", "Banana", "Mango", "Orange", "Grapes");

// Step 2: Display array using for loop
echo "<h3>Displaying using for loop:</h3>";
for($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}

// Step 3: Display array using foreach loop
echo "<h3>Displaying using foreach loop:</h3>";
foreach($fruits as $fruit) {
echo $fruit . "<br>";
}
?>

      
    