<?php
echo "Enter two Numbers" . "\n";
$number1 = readline('Enter number 1 :'); // taking input from user
$number2 = readline('Enter number 2 :'); //
echo "Numbers before swap :Number1 =" . $number1 . ", Number2 = " . $number2 . "\n";
// $temp;
// $temp = $number1;   // swapping of numbers
// $number1 = $number2; //
// $number2 = $temp; //
// echo "Numbers after swap :Number1 = " . $number1 . ", Number2 = " . $number2;

$number1 = $number1 + $number2;
$number2 = $number1 - $number2;
$number1 = $number1 - $number2;

echo "Numbers after swap :Number1 =" . $number1 . ", Number2 = " . $number2 . "\n";
