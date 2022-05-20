<?php
$number = readline("Enter the value of N :  ");
if (is_numeric($number) && $number > 0) {

    $a = 1;
    $counter = 1;
    $value = 0;
    while ($number > 0) {
        $value += $a / $counter++;
        $number--;
    }
    echo "The harmonic number value is " . round($value, 2);
} else {
    echo "Enter a valid Number greater than 0";
}
