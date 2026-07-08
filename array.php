<?php

//index array
$laptops = array("Apple","Dell","Lenovo","Asus","Hp","Acer");
print_r($laptops);
echo "<br>";
echo $laptops[1];
echo "<br>";

$fruits = [];
$fruits[0] = "Apple";
$fruits[1] = "Orange";
$fruits[2] = "Banana";
$fruits[3] = "Mango";
print_r($fruits);
echo "<br>";

//associative array
$students = [
    "name" => "Mg Mg",
    "age" => "23",
    "year" => "Second Year",
    "email" => "mgmg@gmail.com",
    "phone" => "09795849408",
];
print_r($students);
echo "<br>";
echo $students["name"];

foreach ($students as $key => $value){
    echo "<h1>$key is $value</h1>";
}

//Multidimensional array
$foods = [
    'breakfast' => ['Mohingar','Nan Gyi Thoke','Kaung Nyin Paung'],
    'lunch' => ['Shan style rice','Rice and burmese curry'],
    'dinner' => ['Chapatis and curry','Kausuetho','Lahpet thouk'],
];
print_r($foods);
echo "<br>";
foreach ($foods as $key => $value){
    foreach ($value as $k => $v){
        echo "<h3>$v</h3>";
    }
}

// PHP code အတွင်းမှာ HTML code ရေးခြင်း
foreach ($foods as $key => $items){
    echo "<h1>$key</h1>";
    echo "<ul>";
        foreach ($items as $item){
            echo "<li>$item</li>";
        }
    echo "</ul>";
}

?>


<!-- HTML code အတွင်းတွင် PHP code ရေးခြင်း -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    foreach ($foods as $key => $value){
     ?>
     <h1><?php echo $key ?></h1>
     <ul>
        <?php 
        foreach ($value as $v){
         ?>
         <li><?php echo $v ?></li>
         <?php } ?>
     </ul>
    <?php
    }
    ?>
</body>
</html>