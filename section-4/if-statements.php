<?php

//If Statement

$age = 16;

//if ($age >= 21) {
    //code to be executed if condition is true
//    echo "You are old enough to drink in the US";
//};


//If else

//If else
//if ($age >= 21) {
    //code to be executed if condition is true
 //   echo 'You are old enough to drink in the US';
//} else {
//    echo 'You are NOT old enough to drink in the US';
//}

//Nested if statements


if($age >= 21) {
    //code to be executed if condition is true
    echo 'You are old enough to drink in the US';
} else {
    if($age >= 18) {
        echo 'You are old enough to vote in the US';
    } else { 
        'You are NOT old enough to drink or vote in the US';
    }
}

echo '<br>';

//If Else if

if($age >= 21) {
    //code to be executed if condition is true
    echo 'You are old enough to drink in the US';
} else if($age >= 18) {
    echo 'You are old enough to vote in the US';  
} else {
    'You are NOT old enough to drink or vote in the US';
}




?>
