<?php

/********************************
if (condition) {
    code to be executed if condition is true;
}
********************************/

$number = 20;
if($number == 20) {
    echo "Hello 20";
}


echo PHP_EOL;


/********************************
if (condition) {
    code to be executed if condition is true;
} else {
    code to be executed if condition is false;
}
********************************/

// Write a program to determine a number even or odd ?
$number = 9;
if ($number % 2 == 0) {
    echo "Even";
} else {
    echo "Odd";
}


echo PHP_EOL;


/********************************
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}
********************************/

// Write a program to determine the largest number between the two numbers ?
$num1 = 50;
$num2 = 100;

if($num1 > $num2) {
    echo "Large number = " . $num1;
} elseif($num1 < $num2) {
    echo "Large number = " . $num2;
} else {
    echo "Numbers are equal";
}