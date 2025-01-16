<?php

//String 

$name = 'Dev Chelin';
$name2 = 'John Doe';

var_dump($name);
echo '<br />';
echo getType($name2);

//Integer, no quotes around an integer as its a number, quotes will make it a string.

$age = 29;
var_dump($age);
echo '<br />';

//Float

$rating = 4.5;
var_dump($rating);
echo '<br />';

//Boolean
$isLoaded = true;
var_dump($isLoaded);
echo '<br />';

//Array

$friends = ['jason', 'janet', 'kyle', 'lara'];
var_dump($friends);
echo '<br />';

//Object

$person = new stdClass();
var_dump($person);
echo '<br />';

//NULL

$car = null;
var_dump($car);
echo '<br />';

//Resource

$file = fopen('sample.txt', 'r');
var_dump($file);