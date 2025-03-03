<?php

//layout of a function 

//function functionName (parameter1, parameter2){
    //Code to be executed
//}

//functionName(); // Call to function

function sayHello(){
    echo 'Hello World';
}

function sayGoodbye(){
    return 'Good bye';
}

sayHello();

$goodbye = sayGoodbye();
echo $goodbye;