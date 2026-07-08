<?php

//sorting
//sort() => Array ascending order(a-z)

$programmings = ["PHP","Java","JavaScript","C","C++","C#","R","Python"];

echo "<h1>Sort</h1>";
sort($programmings);
foreach ($programmings as $programming){
    echo "<h3>$programming</h3>";
}

//rsort() => Array descending order(z-a)
echo "<h1>R-Sort</h1>";
rsort($programmings);
foreach ($programmings as $programming){
    echo "<h3>$programming</h3>";
}

$foods = [
    "breakfast" => "Mohingar",
    "lunch" => "Burmese rice and curry",
    "dinner" => "Mala Xiangua",
];
//ksort() => Associate array ascending order according to key
echo "<h1>K-Sort</h1>";
ksort($foods);
foreach ($foods as $key => $food){
    echo "<h3>Key is <i>$key</i> and value is <i>$food</i>.</h3>";
}

//krsort() => Associate array descending order according to key
echo "<h1>K-R Sort</h1>";
krsort($foods);
foreach ($foods as $key => $food){
    echo "<h3>Key is <i>$key</i> and value is <i>$food</i>.</h3>";
}

//asort() => Associate array ascending order according to value
echo "<h1>A-Sort</h1>";
asort($foods);
foreach ($foods as $key => $food){
    echo "<h3>Key is <i>$key</i> and value is <i>$food</i>.</h3>";
}

//arsort() => Associate array descending order according to value
echo "<h1>A-R Sort</h1>";
arsort($foods);
foreach ($foods as $key => $food){
    echo "<h3>Key is <i>$key</i> and value is <i>$food</i>.</h3>";
}

$colors = ["Green","Red","Blue","Yellow","brown"];
print_r($colors);
echo "<br>";

array_push($colors,"Pink","Purple");
print_r($colors);
echo "<br>";

array_pop($colors);
print_r($colors);
echo "<br>";

unset($colors[2]);
print_r($colors);
echo "<br>";

//Array to string
$actors = ["Daung","Pay Thi Oo","Lu Min","Thet Mon Myint","Paing Phyo Thu","Eaindra Kyaw Zin","Chit Thu Wai"];
print_r($actors);
echo "<br>";
echo gettype($actors);

$actors_string = implode(",",$actors);
echo "<h3>$actors_string</h3>";
echo gettype($actors_string);
echo "<br>";

//String to array
$actors_array = explode(",",$actors_string);
print_r($actors_array);
?>