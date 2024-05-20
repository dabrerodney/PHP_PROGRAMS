<?php
//W.A.P to demonstrate the use of functions in php

function primeCheck($num){
    if ($num%2 == 0 )
    {
        echo $num." is even";
    }else{
        echo $num." is odd";
    }
}


function negativePositive($no){
    echo "<br>";
    if ($no ==0){
        
        echo "The entered no is zero";
    }elseif($no < 0){
        echo "The entered no is negative";
    }else{
        echo "The entered no is positive";
    }
}

$num = 20;
primeCheck($num);

$no = 24;
negativePositive($no);
?>