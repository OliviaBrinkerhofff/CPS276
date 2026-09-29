<?php

$numbers = [1];

$output = "";

for($i = 2; $i <= 50; $i++){
    array_push($numbers, $i);
}

for($i = 1; $i < count($numbers); $i+=2){
//foreach($numbers as $number){
    
    $output .= "$numbers[$i] - ";

}



//print_r($numbers);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Assignment 2</title>
</head>
    <body class = "container">
        <main>
            Even numbers: <?php echo $output?>

</html>


