<?php
 $number = readline("enter numbers ");
 if(strlen($number>1)){
    $revNum = strrev($number);
     if($revNum != $number)
     echo "It is not a palindrome";
     else{
         echo "it is palindrome";
     }
 }

?>