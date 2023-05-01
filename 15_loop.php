<?php

/*********** for loop ***********
for (initialization; condition; increment/decrement) {
    code to be executed for each iteration;
}
********************************/

/// print 1 to 10 using for loop
for($i=1; $i<=10; $i++) {
    echo $i. " ";
}

echo PHP_EOL;

/// print 1 to 10 even number using for loop
for($i=2; $i<=10; $i+=2) {
    echo $i. " ";
}

echo PHP_EOL;
echo PHP_EOL;




/********** while loop **********
initialization;
while (condition) {
    code to be executed;
    ... ... ... ...
    increment/decrement;
}
********************************/
/// print 1 to 10 odd number using while loop
$i=1;
while($i<=10) {
    echo $i. " ";
    $i+=2;
}

echo PHP_EOL;
echo PHP_EOL;





/********* do while loop *********
initialization;
do {
    code to be executed;
    ... ... ... ...
    increment/decrement;
} while (condition);
********************************/
/// print 1 to 10 odd number using while loop
$i=1;
do {
    echo $i. " ";
    $i+=2;
}while($i<=10);



echo PHP_EOL;
echo PHP_EOL;



/********* foreach loop *********
foreach ($array as $value) {
    code to be executed;
}
********************************/
// The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

$name = array("Fuad", "Siam", "Junnun");
foreach($name as $singleName) {
    echo $singleName."\n";
}
echo PHP_EOL;

$name = array("Fuad"=>"25", "Siam"=>"18", "Junnun"=>"24");
foreach($name as $singleName=>$singleAge) {
    echo "$singleName = $singleAge \n";
}



echo PHP_EOL;
echo PHP_EOL;


/********* break statement *********/
for ($x = 1; $x < 10; $x++) {
    if ($x == 5) {
      break;
    }
    echo $x. " ";
}

echo PHP_EOL;
echo PHP_EOL;



/********* continue statement *********/
for ($x = 1; $x < 10; $x++) {
    if ($x == 5) {
      continue;
    }
    echo $x. " ";
}

echo PHP_EOL;
echo PHP_EOL;



/********* goto statement *********/
/// print 1 to 10 even number using do while loop
$i=0;

fuad:
    $i+=2;
    echo $i. " ";
    
if($i<10) goto fuad;