<?php

// Adding elements
$fruits = ["Apple", "Banana"];
array_push($fruits, "Cherry", "Date");
print_r($fruits); // ["Apple", "Banana", "Cherry", "Date"]

// Removing elements
$lastFruit = array_pop($fruits);
echo $lastFruit; // "Date"

// Slicing arrays
$sliced = array_slice($fruits, 1, 2);
print_r($sliced); // ["Banana", "Cherry"]

// Splicing arrays
array_splice($fruits, 1, 2, ["Blueberry"]);
print_r($fruits); // ["Apple", "Blueberry", "Date"]

// Sorting
$fruits = ["Banana", "Apple", "Cherry"];
sort($fruits);
print_r($fruits); // ["Apple", "Banana", "Cherry"]

// Associative sorting
$person = ["name" => "John", "age" => 30, "city" => "New York"];
asort($person);
print_r($person); // ["age" => 30, "name" => "John", "city" => "New York"]

// String conversion
$fruits = ["Apple", "Banana", "Cherry"];
$string = implode(", ", $fruits);
echo $string; // "Apple, Banana, Cherry"

// Array from string
$fruits = explode(", ", "Apple, Banana, Cherry");
print_r($fruits); // ["Apple", "Banana", "Cherry"]

?>