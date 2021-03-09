<?php

function outputSortText()
{
    if (isset($_POST["text"])) {
        $text = $_POST["text"];
        $textArray = explode("\n", $text);
        $textSort = sortText($textArray);
        foreach ($textSort as $value){
            echo  implode(" ", $value)."<br>";
        }

    } else {
        include "task3.html";
    }
}
outputSortText();

function sortText($textArray){
    $sortArray = array();
    $i = 0;
    $index = 0;
    $array = array();

    foreach ($textArray as $value){
        $sortArray[$i] = $value;
        $i++;
    }

    foreach ($textArray as $value) {
        $sortArray[$i] = explode(" ", $value);
        shuffle($sortArray[$i]);
        $sortArray[$i] = implode(" ", $sortArray[$i]);
        $i++;
    }

    foreach ($sortArray as $value){
        $array[$index] = explode(" ", $value);
        $index++;
    }

    usort($array, function ($num1, $num2){
        if (strtolower($num1[1]) < strtolower($num2[1])) {
            return -1;
        }else return 1;
    });

    return $array;
}
