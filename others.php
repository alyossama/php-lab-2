<?php

// task 1 (Search for how to make \n work in browser.)
echo "Task 1";
// To make the \n work fine in php and make new line for you as the <br> tag, use the nl2br built-in method 
$line = "\n=====\nThis is the first line\nThis is the second line\n\n\n<hr>";
echo nl2br($line);
// ====================================================================================================================

// task 2 (Search for 3 built-in function of a string.)
echo "Task2<br>====";
//<1> explode
// Breaks a string into an array:
$str = "Hello world. It's a beautiful day.";
echo "<pre>";
print_r(explode(" ", $str));
echo "</pre><br><br>";

//<2> ucwords
// Converts the first character of each word to uppercase:
echo ucwords("the first character of each word in this sentence will be converted to uppercase <br><br><br>");

//<3> implode
// Joins array elements with a string:
$arr = array('Hello', 'World!', 'Beautiful', 'Day!');
echo implode(" ", $arr);
echo "<br><br><br><hr>";
// ====================================================================================================================

// task 3 (Write a PHP script to get the sum and avg of an indexed array, after that sort it in a reverse order (highest to lowest).)
echo "Task 3<br>=====<br><br>";
$taskThreeArray = [12, 45, 10, 25];

//sum
echo ("Array sum: " . array_sum($taskThreeArray) . "<br>");
//average = sum/count
echo ("Array average: " . array_sum($taskThreeArray) / count($taskThreeArray) . "<br><br>");

//sorting in reverse order

rsort($taskThreeArray);

$arrlength = count($taskThreeArray);

echo "Array after reverse sort<br><br>";
echo "<pre>";
print_r($taskThreeArray);
echo "</pre>";
echo "<br><hr>";
// ====================================================================================================================

// task 4 (Write a PHP script to sort the following associative array) 

echo "Task 4<br>=====<br><br>";

$sortByValAsc = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40);
$sortByKeyAsc = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40);
$sortByValDesc = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40);
$sortByKeyDesc = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40);




echo "<1>Ascending order sort by value<br><br>";
sort($sortByValAsc);



echo "<pre>";
print_r($sortByValAsc);
echo "</pre>";

echo "<br>";

echo "<2>Ascending order sort by Key<br><br>";
ksort($sortByKeyAsc);

echo "<pre>";
print_r($sortByKeyAsc);
echo "</pre>";

echo "<br>";

echo "<3>Descending order sort by value<br><br>";
rsort($sortByValDesc);

echo "<pre>";
print_r($sortByValDesc);
echo "</pre>";

echo "<br>";

echo "<4>Descending order sort by key<br><br>";
krsort($sortByKeyDesc);

echo "<pre>";
print_r($sortByKeyDesc);
echo "</pre>";

echo "<br>";
