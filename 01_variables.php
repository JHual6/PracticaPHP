<?php

//Single line comment
/*
variables:
string
integer
boolean
float o double
null
array
Object
Resource
*/ 

$name = 'Zura';
$age = 32;
$isFather = true;
$money = 19.99;
$salary = null;

echo $name;
echo "Hello " . $name . "! <br>";
echo "Hello {$name}! <br>"; 
echo 'Hello {$name}! <br>';
echo $age . "<br>";
echo $isFather . "<br>";
echo $money . "<br>";
echo $salary . "<br>";

print_r($name);
echo "<br>";
var_dump($name);
echo "<br>";

$name = 32;
echo gettype($name);
echo "<br>";

var_dump(is_string($age));
echo "<br>";
var_dump(is_int($age));
echo "<br>";
var_dump(is_bool($isFather));
echo "<br>";
var_dump(is_double($money));
echo "<br>";
var_dump(is_float($money));
echo "<br>";

var_dump(isset($name));
echo "<br>";
var_dump(isset($country));
echo "<br>";
var_dump(isset($salary));
echo "<br>";
?>