<?php
$head = 0; // Initilizing variables
$tail = 1; //
$headcount = 0;//
$tailcount = 0;//

$coinFliped = readline('enter the number of times coin to be fliped '); //Taking input from user
$n = $coinFliped;
if ($coinFliped >= 0) {  //validating Condition
    while ($coinFliped > 0) { //
        $result = rand(0, 10) / 10; // using in-built random function

        if ($result >= 0.5) { // condition to check result

            $headcount++; // incrementing headcount
        } else {

            $tailcount++; // incrementing tailcount
        }
        $coinFliped--; // decrementing coinflipped
    }
} else {
    echo ("enter a valid input");
    exit(0); // using in-built function to terminate execution
}

$headPercentage = ($headcount * 100) / $n ; // formula to count percentage

$tailPercentage = 100 - $headPercentage; //formula to count percentage
echo "tailPercentage = " .round( $tailPercentage,2) . "\n"; // using in-built round function to round percentage in 
echo "headPercentage = " . round($headPercentage,2) . "\n";//  float upto 2 decimal points
