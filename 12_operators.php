<?php


// ********** array operators ********** //

// 1. Union (+)

$x = array("0" => "html", "1" => "css");  // Associative Array
$y = array("0" => "html", "1" => "css", "2" => "php");  // Associative Array

var_dump($x + $y);


echo PHP_EOL;
echo PHP_EOL;


// 2. Equality	 (==) [Returns true if $x and $y have the same value pairs]

$x = array("0" => "html", "1" => "css");  // Associative Array
$y = array("html", "css");  // Index Array

var_dump($x == $y); // true


echo PHP_EOL;
echo PHP_EOL;


// 3. Identity	 (==) [Returns true if $x and $y have the same value pairs in the same order and of the same types]

$x = array("1" => "css", "0" => "html");  // Associative Array
$y = array("html", "css");  // Index Array

var_dump($x === $y); // Identity -> false
var_dump($x == $y); // Equality -> true


echo PHP_EOL;
echo PHP_EOL;


// 4. Inequality	 (!=) / (<>) [Returns true if $x is not equal to $y]

$x = array("0" => "html", "1" => "css");  // Associative Array
$y = array("html", "css");  // Index Array

var_dump($x == $y); // Equality -> true
var_dump($x != $y); // Inequality -> false
var_dump($x <> $y); // Inequality -> false


echo PHP_EOL;
echo PHP_EOL;


// 5. Non-identity	 (!==) [Returns true if $x is not identical to $y]

$x = array("1" => "css", "0" => "html");  // Associative Array
$y = array("html", "css");  // Index Array

var_dump($x === $y); // Identity
var_dump($x !== $y); // Non-identity


echo PHP_EOL;
echo PHP_EOL;




// ********** ternary operators ********** //
// ternary operator (large between two numbers)
$num1 = 15000;
$num2 = 18000;
$largeNumber = ($num1 > $num2) ? $num1 : $num2;
echo $largeNumber;

echo PHP_EOL;

// ternary operator (large between three numbers)
$num1 = 5000;
$num2 = 8000;
$num3 = 9000;

$largeNumber = ($num1 > $num2) ? $num1 : (($num2 > $num3) ? $num2 : $num3);
echo $largeNumber;


echo PHP_EOL;
echo PHP_EOL;


// ********** Null coalescing operators ********** //

$defaultAutoPassMark = 70;
$studentMark = 45; // comment this statement -> print 70

$result = $studentMark ?? $defaultAutoPassMark; // if user input studentMark => print studentMark ; otherwise print default

echo $result;