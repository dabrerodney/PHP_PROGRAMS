<?php
//PHP programs to demonstrate array

//1. Indexed array
$index = array("Hello", "This", "Is", "Indexed", "Array");
echo $index[2]."<br>";
echo $index[4]."<br>";
echo $index[0]."<br>";
echo "<br>";


//2. Associative array
$associative = array("John" => 10, "Mary" => 20, "Doe" => 39, "Nick" => 18);
echo $associative["John"]."<br>";
echo $associative["Mary"]."<br>";
echo $associative["Nick"]."<br>";
echo "<br>";


//3. Multidimensional Array
$students = array("Mark" => array("Physics" => 20, "Maths" => 20), 
                  "John" => array("Physics" => 30, "Maths" => 30),
                  "Nick" => array("Physics" => 40, "Maths" => 40));

echo $students["Mark"]["Maths"]."<br>";
echo $students["John"]["Maths"]."<br>";
echo $students["Nick"]["Maths"]."<br>";
?>