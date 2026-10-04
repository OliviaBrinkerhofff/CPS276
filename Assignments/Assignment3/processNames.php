<?php

$listOfNames = [];
function addName($name){
        //new name as a string
        $list2 = explode(" ", $name);
        //one item array
        $lastFirst = array_flip($list2);
        //names swapped still as an array
        //$name2 = implode(", ", $lastFirst);
        //name back to string
        if(empty($listOfNames)){
            $listOfNames[0] = $lastFirst;
        }
        else{
        $names = implode("/", $listOfNames); //into a string
        $namesList = $names . "/" . $name2; //add the new name
        $listOfNames = explode("/", $namesList); // back to an array
        sort($listOfNames); //sort
        }
        return $listOfNames;
}

function clearNames(){

    $listOfNames = [];
    return $listOfNames;

}



?>