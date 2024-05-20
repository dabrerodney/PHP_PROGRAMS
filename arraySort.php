<?php
//PHP program to sort an array

$og_arr = array(44, 20, 38, 12, 2, 99);
echo "Array brfore sorting"."<br>";
foreach ($og_arr as $a)
{
    echo $a."<br>";
}
echo "<br>";

sort($og_arr);
echo "After Sorting"."<br>";
foreach ($og_arr as $b)
{
    echo $b."<br>";
}
?>