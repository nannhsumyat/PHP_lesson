<?php
$name = "Nann Hsu Myat Phyo";
$address = "Pang Long";

echo "My name is $name";
echo '<br>';
echo 'I live in $address<br>';
echo 'I live in '.$address;
echo '<br>';
echo $name.' live in '.$address;
$first_name = 'Alan';
echo "<p>$first_name</p>";
$last_name = 'Walker';
echo "<p>$last_name</P>";

$first_name .= ' Walker ';
echo "<p>$first_name</p>";

$singer = ' Taylor Swift ';
echo "<p>My favourite singer is$singer.</p>";
echo "<p>My favourite singer is".trim($singer).".</p>";

echo strlen($singer);
echo "<br>";
$string_length = trim($singer);
echo strlen($string_length);
echo "<br>";

echo strtolower($singer);
echo "<br>";

echo strtoupper($singer);
echo "<br>";

echo substr("Hello Hsu Hsu",6);
echo "<br>";
echo substr("Hello Hsu Hsu",6,3);
echo "<br>";

echo str_replace("Pang Long","Small","Hello City");
echo "<br>";
$city = "Hello Mandalay";
echo "<p>$city</p>";
echo str_replace("Mandalay","Smart City",$city);
echo "<br>";
?>