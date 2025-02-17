<?php
// Different data types in PHP
$integer = 10;
$float = 10.5;
$string = "Hello, World!";
$array = array("apple", "banana", "cherry");
$boolean = true;
$null = null;

// a. Print all the data using echo and print
echo "Integer: $integer<br>";
print "Float: $float<br>";
echo "String: $string<br>";
print "Boolean: " . ($boolean ? 'true' : 'false') . "<br>";
echo "Null: $null<br>";

// b. Display content of array using print_r and var_dump
echo "Array content using print_r: <br>";
print_r($array);
echo "<br>Array content using var_dump: <br>";
var_dump($array);

// c. Display result of checking data types
echo "<br>Data types:<br>";
echo "Integer: " . gettype($integer) . "<br>";
echo "Float: " . gettype($float) . "<br>";
echo "String: " . gettype($string) . "<br>";
echo "Array: " . gettype($array) . "<br>";
echo "Boolean: " . gettype($boolean) . "<br>";
echo "Null: " . gettype($null) . "<br>";
?>

