<?php

//1. Write a program that prints the numbers from 1 to 100.
//2. For multiples of 3 print 'Fizz' instead of the number
//3. For multiples of 5 print 'Buzz'
//4. For numbers which are multiples of both 3 and 5 print 'FizzBuzz'


for($i = 1; $i <= 100; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo'FizzBuzz';
    } elseif($i % 3 === 0){
        echo 'Fizz';
    } elseif($i % 5 === 0){
        echo 'Buzz';
    } else {
        echo $i;
    }
    echo '<br>';
}