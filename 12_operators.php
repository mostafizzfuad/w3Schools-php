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
$y = array("html", "css");  // Associative Array

var_dump($x == $y);


echo PHP_EOL;
echo PHP_EOL;


// 3. Identity	 (==) [Returns true if $x and $y have the same value pairs in the same order and of the same types]

$x = array("1" => "css", "0" => "html");  // Associative Array
$y = array("html", "css");  // Associative Array

var_dump($x === $y); // Identity
var_dump($x == $y); // Equality


echo PHP_EOL;
echo PHP_EOL;


// 4. Inequality	 (!=) [Returns true if $x is not equal to $y]

$x = array("0" => "html", "1" => "css");  // Associative Array
$y = array("html", "css");  // Associative Array

var_dump($x == $y); // Equality
var_dump($x != $y); // Inequality
var_dump($x <> $y); // Inequality


echo PHP_EOL;
echo PHP_EOL;


// 5. Non-identity	 (!==) [Returns true if $x is not identical to $y]

$x = array("1" => "css", "0" => "html");  // Associative Array
$y = array("html", "css");  // Associative Array

var_dump($x === $y); // Identity
var_dump($x !== $y); // Non-identity


echo PHP_EOL;
echo PHP_EOL;