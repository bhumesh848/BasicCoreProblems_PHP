<?php
$number = readline("Enter a number to check whether even or odd :"); //taking input from user
if (is_numeric($number) && $number > 0) { //To check if input is valid 
    if ($number % 2 == 0) { // To check number Even or odd 
        echo "number is even ";
    } else {
        echo "number is odd ";
    }
} else {
    echo "Enter a Number greater than 0 ";
}
