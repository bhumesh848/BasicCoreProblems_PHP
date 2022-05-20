<?php
$number = readline('Enter a number');
// check if input is valid number
if(is_numeric($number) && $number > 0) {
    for($i=2;$i*$i<=$number;$i++){
        while($number%$i == 0){
            echo $i." ";
            $number = $number/$i;
        }
    }
    if($number>2){
        echo $number;
    }
} else {
    echo "Enter valid input";
}
