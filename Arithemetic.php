<?php
$number1 = readline("Enter number 1 ");
$number2 = readline("Enter numbr 2 ");

if (is_numeric($number1) && ($number2)) {
    $select = readline("Press 1 for addition,2 for substraction,3 for multiplication,4 for division ");
    switch ($select) {
        case 1:
            $result = $number1 + $number2;
            echo $result;
            break;
        case 2:
            $result = $number1 - $number2;
            echo $result;
            break;
        case 3:
            $result = $number1 * $number2;
            echo $result;
            break;
        case 4:
            $result = $number1 / $number2;
            echo $result;
            break;
        default:
            echo "enter valid choice";
    }
} else {
    echo "enter a valid input";
}
