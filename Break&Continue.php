<?php
//PHP program to demonstrate the use of break and continue statement.

//1. Break statement
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach ($arr as $a)
{
    if ($a == 7)
    {
        echo "No 7 is found, Stopping the execution";
        break;
    } 
    echo "Current no is ".$a."<br>";
}
echo "<br>";
echo "<br>";


//2. Continue statement
$brr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach ($brr as $b)
{
    if ($b == 7)
    {
        echo "Skipped No 7"."<br>";
    }
    echo "Current no is ".$b."<br>";
}
?>