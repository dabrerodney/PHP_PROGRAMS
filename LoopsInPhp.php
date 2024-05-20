<?php
//PHP Programs to demonstrate the use of LOOPS

//1. While Loop
$i = 0;
while ($i < 10)
{
    echo "The numbers are ".$i."<br>";
    $i++;
}
echo "<br>";


//2. Do while Loop
$j = 0;
do{
    echo "The number is ".$j."<br>";
    $j++;
}while($j < 10);
echo "<br>";


//3. For Loop
for($a = 0; $a<10; $a++)
{
    echo "The number is ".$a."<br>";
}
echo "<br>";


//4. For each Loop
$colors = array("red", "green", "black", "brown", "grey");
foreach ($colors as $a)
{
    echo "The color is ".$a."<br>";
}
?>