<?php
//Program to find the length and the words in a string

$org_string = "Hello World!!";
echo "The original string is".$org_string."<br>";


//1. To find the length
$len_string = strlen($org_string);
echo "The length of the string is ".$len_string."<br>";

//2. Total word in the string
$words_string = str_word_count($org_string);
echo "Total word in the string are ".$words_string."<br>";


$a = 0;
while($a<=10)
{
    If ($a == 7)
    {
        echo "<br> 7 found, stopping the execution";
        break;
    }
Echo $a;
$a++;
}

?>