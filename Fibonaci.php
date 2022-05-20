<?php
$length = readline("Enter the length :" );
$number1=0;
$number2 =1;

echo "Fibonacci Series"."\n";
echo $number1." ".$number2;

for($i=2;$i<$length;$i++){
    $result = $number1 + $number2;
    echo " ".$result;
    $number1 = $number2;
    $number2 = $result;
}
