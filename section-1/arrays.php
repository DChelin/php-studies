<?php

$names = array('John', 'Jack', 'Jill');
$numbers = [1,2,3,4,5,6];

function inspect ($value){
echo  '<pre>';
var_dump($value);
echo '</pre>';
}


inspect($names);
inspect($numbers);

print_r($names);

//add element array 
$numbers [7] = 100;
$numbers [] = 101;

//update an aray 
$numbers[3] = 200;

unset($numbers[3]);

$numbers = array_values($numbers);

inspect ($numbers);

