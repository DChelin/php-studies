<?php

$number = 1;

//while($number <= 10){
//    if($number % 2 == 0){
//        echo $number . ' is even <br>';
//    } else{
//        echo $number . ' is odd <br>';
//    }

//    $number ++;
//}

//break out of a loop

for ($i = 1; $i <= 10; $i++){
    if($i == 5){
        break;
    }
    echo $i . '<br>';
}