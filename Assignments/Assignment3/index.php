<?php
 require "processNames.php";
 
?>
















<!doctype html>
<html lang = "en">
    <head>
        <meta charset = "uft-8">
        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Add Names</title>
    </head>
    <body>
        <div class = "container">
            <h1>Add Names</h1>
            <form method = "post" action = "index.php">
                <input type = "submit" name = "addName" class = "btn btn-primary" value = "Add Name">
                <input type = "submit" name = "clearNames" class = "btn btn-primary" value = "Clear Names">
                <div class = "form-group">
                    <label for = "name">Enter Names</label>
                    <input type = "text" class = "form-control" id = "name" name = "name">
                </div>
                <div class = "form-group">
                    <label for = "nameList">List of Names</label>
                    <textarea style = "height: 500px;" class = "form-control" id = "nameList" name = "nameList">
                    <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        if (isset($_POST["addName"])) {
                            $name = $_POST["addName"];
                            addName($name);
                        } 
                        elseif (isset($_POST["clearNames"])) {
                            clearNames();
                        }
                    }
                    ?>
                    </textarea>
                </div>
            <form>
        </div>
    </body>
</html>
