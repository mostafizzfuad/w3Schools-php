<?php

// string 
$name = "Mostafizur Rahman Fuad";
var_dump($name);

echo PHP_EOL;
echo PHP_EOL;


// integer
$x = 2023;
var_dump($x);

echo PHP_EOL;
echo PHP_EOL;

// float
$y = 27.563;
var_dump($y);

echo PHP_EOL;
echo PHP_EOL;


// boolean
$x = true;
var_dump($x);

echo PHP_EOL;
echo PHP_EOL;


// NULL
$x = NULL;
var_dump($x);

echo PHP_EOL;
echo PHP_EOL;



// array ( অনেকগুলো ভ্যালুকে একটা সিঙ্গেল ভ্যারিএবলের মধ্যে রাখার জন্য অ্যারে ইউজ করা হয় )
$x = array(1,2,3);
$name1 = array("Fuad" , "Musfiqur" , "Junnun");
$name2 = ['Fuad' , 'Musfiqur' , 'Junnun'];

var_dump($x);
var_dump($name1);
var_dump($name2);

echo PHP_EOL;
echo PHP_EOL;



// object : Classes and objects are the two main aspects of object-oriented programming.

class Student {
    function department() {
        return "Bsc in CSE";
    }
    function details() {
        echo $this-> department();
    }
}
$st = new Student();
$st->details();


// resource : The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP. A common example of using the resource data type is a database call.

