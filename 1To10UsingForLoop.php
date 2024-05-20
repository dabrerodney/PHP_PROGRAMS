<?php
// W.A.P tp print 1-10 using for loop

//1. Using normal for loop 
for($a = 1; $a <=10; $a++)
{
    echo $a."<br>";
}
echo "<br>";

//2. Using foreach loop
$b = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach ($b as $c)
{
    echo $c."<br>";
}
?>