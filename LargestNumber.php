<?php
$number1 = readline('enter number 1:');// taking input from user 
$number2 = readline('enter number 2:');// for 3 numbers
$number3 = readline('enter number 3:');//
if ($number1 > $number2 && $number1 > $number3) { // condition to check greater number
    echo "Number1 is greater than "; 
} elseif ($number2 > $number1 && $number2 > $number3) { // condition to check greater number
    echo "Number 2 is greater";
} else {
    echo "Number 3 is greater";
}
