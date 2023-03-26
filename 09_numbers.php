<?php

// ********** Number System Representation ********** //
$decimal = 12;
$octal = 015;
$hexaDecimal = 0x2B;




// ***** convert decimal to others ***** //
printf("%b", $decimal); // convert binary
echo PHP_EOL;
printf("%x", $decimal); // convert hexadecimal
echo PHP_EOL;
printf("%o", $decimal); // convert octal


echo PHP_EOL;
echo PHP_EOL;

// ********** Check if the type of a variable is integer, float, finite/infinite, NaN :  ********** //
// check integer
$x = 5985;
var_dump(is_int($x));
$x = 59.85;
var_dump(is_int($x));
    
    
// check float
$x = 10.365;
var_dump(is_float($x));
    
    
// Check finite or infinite
$x = 1.9e411;
var_dump($x);
    
    
// Invalid calculation will return a NaN value (NaN stands for Not a Number.)
$x = acos(8);
var_dump($x);


echo PHP_EOL;
echo PHP_EOL;


// ********* Check if the variable is numeric  ******** //
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));


echo PHP_EOL;
echo PHP_EOL;


// *******  Type Casting ********** // 
// ********** Cast float to int ********** //
$x = 23465.768;
var_dump($x);

$convert = (int)$x;
var_dump($convert);

echo PHP_EOL;


// ********** Cast string to int ********** //
$x = "358445.768";
var_dump($x);

$convert = (int)$x;
var_dump($convert);