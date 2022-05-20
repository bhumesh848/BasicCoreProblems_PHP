<?php
$year = readline('enter the year to check whether leap year or not : '); // taking input from user
if ($year > 999) { //validating condition
    if($year % 400 == 0 || ($year % 4 == 0 && $year% 100 != 0)) { //condition to check for year
        echo "leap year";
    } else {
        echo "not a leap year";
    }
} else {
    echo "Enter valid input";
}
