<?php

$listOfNames = [];
function addName($name){
        //new name as a string
        $list2 = explode(" ", $name);
        //one item array
        $lastFirst = array_flip($list2);
        //names swapped still as an array
        $name2 = implode(", ", $lastFirst);
        //name back to string
        if(count($listofNames) === 0){
            array_push($listofNames, $name2);
        }
        else{
        $names = implode("/", $listOfNames);
        $namesList = $names . "/" . $name2;
        $listOfNames = explode("/", $namesList);
        sort($listOfNames);
        }
        return $listOfNames;
}

function clearNames(){



}



?>