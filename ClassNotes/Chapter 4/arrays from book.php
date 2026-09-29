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

?>