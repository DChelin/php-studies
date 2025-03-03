<?php

//Global Scope

$name = 'Alice';

function sayHello()
{
    global $name;
    //local scope
    echo 'Hello ' . $name;
}

echo $name;

