<?php
// array : single variable এর মধ্যে multiple value ধারণ করে। [An array is a special variable, which can hold more than one value at a time.]



/********* Indexed Arrays *********/
$name = array("Mostafizur", "Siam", "Fuad", "Masud");
echo $name[2];

// $name[0] = "Mostafizur";
// $name[1] = "Siam";
// $name[2] = "Junnun";
// $name[3] = "Masud";

echo PHP_EOL;
echo PHP_EOL;


// Loop Through an Indexed Array (print)
$name = array("Mostafizur", "Siam", "Fuad", "Masud", "Eishita");
$arrLen = count($name); // Length of an Array using count() Function

for ($i = 0; $i < $arrLen; $i++) {
    echo $name[$i]."\n";
}

echo PHP_EOL;
echo PHP_EOL;



/********* Associative Arrays *********/
// [Associative arrays are arrays that use named keys that you assign to them.]
$age = array(
    "mostafizur" => "25",
    "Siam" => "15",
    "Eishita" => "23",
    "Fuad" => "19"
);

echo "Eishita age is ". $age['Eishita'];

echo PHP_EOL;
echo PHP_EOL;


// Loop Through an Associative Array (print)
$ages = array(
    "mostafizur" => "25",
    "Siam" => "15",
    "Eishita" => "23",
    "Fuad" => "19"
);

foreach ($ages as $singleName => $singleAge) {
    echo "Name: " . $singleName . ", Age: " . $singleAge;
    echo "\n";
}



echo PHP_EOL;
echo PHP_EOL;



/********* Multidimensional Arrays *********/
// [A multidimensional array is an array containing one or more arrays.]


/********* 2d array table *********
Name            Age     Phone Number
Mostafizur	    25	    01794059375
Eishitaaa        22	    01775059389
Musfiqur	    18	    01998456372
 ********************************/

$info = array(
    array("Mostafizur", 25, 1794059375),
    array("Eishitaaa", 22, 1775059389),
    array("Musfiqur", 18, 1998456372),
);

// print Eishitaaa's age
echo $info[1][1];
echo PHP_EOL;
// print Musfiqur's name
echo $info[2][0];


echo PHP_EOL;
echo PHP_EOL;



// Loop Through an Multidimentional Array (print)
for ($row = 0; $row < 3; $row++) {
    for ($col = 0; $col < 3; $col++) {
        echo $info[$row][$col]. "\t";
    }
    echo PHP_EOL;
}



echo PHP_EOL;
echo PHP_EOL;




/********* Sorting Arrays *********/

// sort() : ascending alphabetical order
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$carLengths = count($cars);

for ($i = 0; $i < $carLengths; $i++) {
    echo $cars[$i]. "\n";
}


echo PHP_EOL;
echo PHP_EOL;


// sort() : ascending numerical order
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
$arrLength = count($numbers);

for ($i = 0; $i < $arrLength; $i++) {
    echo $numbers[$i]. "\t";
}


// Descending Order - rsort()  : same as upper example


echo PHP_EOL;
echo PHP_EOL;


/****** Sort Array (Ascending Order), According to Value - asort() :
note : sorts an associative array in ascending order, according to the value */
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value; // sort by value
    echo "\n";
}




echo PHP_EOL;
echo PHP_EOL;


/****** Sort Array (Ascending Order), According to Key - ksort() :
note : sorts an associative array in ascending order, according to the key */
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value; // sort by value
    echo "\n";
}



/****** Sort Array (Descending Order), According to Value - arsort() :
note : sorts an associative array in descending order, according to the value */



/****** Sort Array (Descending Order), According to Key - krsort() :
note : sorts an associative array in descending order, according to the key */

