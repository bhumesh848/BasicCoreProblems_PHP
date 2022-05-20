<?php
// $x = readline('Enter the Alphabet Character : '); // Taking user input

// // check if input is numeric or string with more than 1 char
// if (preg_match('/[a,e,i,o,u]{1}/i', $x)) {
//     echo "it is vowel";
// } else {
//     echo "It is a Consonant";
// }

    $letter = readLine("Enter a character ");
    
if (preg_match("/^[a-zA-Z]{1}$/",$letter)){
    $char = strtolower($letter);
    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u'){
        echo $letter." is a Vowel";

    }else{ 
        echo $letter." is a Consonant";
    }
}else{
    echo "Enter valid input";
}
    ?> 





