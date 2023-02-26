<?php

/////////////////// *** global scope *** ///////////////////

$x = 10;  // global scope
 
function globalScope() {
    // echo "Variable x inside function is: $x";  // using x inside this function will generate an error
} 
globalScope();

echo "Variable x outside function is: $x";


echo PHP_EOL;
echo PHP_EOL;



/////////////////// *** local scope *** ///////////////////

function localScope() {
    $age = 25; // local scope
    echo "Variable age inside function is: $age";
}
localScope();

// echo "Variable age outside function is: $age";  // using $age outside the function will generate an error





echo PHP_EOL;
echo PHP_EOL;



/////////////////// *** global keyword *** ///////////////////

$num1 = 20;
$num2 = 30;

function globalKeyword() {
    // use the global keyword rule 1 :
    global $num1, $num2;
    $num1 += $num2; // num1 = num1 + num2 // increment

    /* 
    use the global keyword rule 2 :
    PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
    $GLOBALS['num1'] += $GLOBALS['num2']; 
    */
}
globalKeyword();

echo $num1;






echo PHP_EOL;
echo PHP_EOL;



/////////////////// *** static keyword *** ///////////////////
function staticKeyword() {
    static $x = 0;
    echo $x. " ";
    $x++;
}
  
staticKeyword();
staticKeyword();
staticKeyword();