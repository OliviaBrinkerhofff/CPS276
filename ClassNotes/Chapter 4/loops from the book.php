<?php

// 1. creating a list
$fruits = ["Apple", "Banana", "Cherry"];
$list = "<ul>"; 
foreach ($fruits as $fruit) {
    $list .= "<li>$fruit</li>";
}
$list .= "</ul>"; 

// 2. Creating a table
$table = "<table border='1'>"; // Added opening table tag
for ($i = 1; $i <= 3; $i++) {
    $table .= "<tr>"; // Added opening row tag
for ($j = 1; $j <= 3; $j++) {// Moved the text inside the cell and added td tags
    $table .= "<td>Row $i, Col $j</td>"; 
}
$table .= "</tr>"; // Added closing row tag
}

$table .= "</table>"; // Added closing table tag

?>
