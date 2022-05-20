<?php
 echo('Enter the nth power '."\n");
 $number = $argv[1]; // N

if ($number >= 0 && $number < 31) { //validating input
    //echo pow($number,2)."\n"; // using in-built power function
    $result = 1;
    for ($i = 1; $i <= $number; $i++) { // looping 
        $result = $result * 2; // formula to find power of 2
    }
    echo "power of 2 of number" . $number . "is = " . $result;
} else {
    echo "Number should be greater than 0 and less than 31";
}
