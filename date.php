<?php

echo "<h1>Date Lesson</h1>";
echo "<h3>Today is ".date("Y-m-d")."</h3>";
echo "<h3>Today is ".date("l")."</h3>";

echo "<h1>Time</h1>";
echo "<h3>The time is ".date("h:i:sa")."</h3>";
echo date_default_timezone_get();

date_default_timezone_set("Asia/Yangon");
echo "<h3>The Myanmar time is ".date("h:i:sa")."</h3>";

echo "<h1>String to time</h1>";
$today = strtotime("today");
echo $today;
echo "<h3>Today is ".date("d.m.Y",$today)."</h3>";

$tomorrow = strtotime("tomorrow");
echo "<h3>Tomorrow is ".date("d.m.Y",$tomorrow)."</h3>";
echo "<h3>Today is ".date("d.m.Y",strtotime("next Saturday"))."</h3>";
echo "<h3>Today is ".date("d.m.Y",strtotime("+1 week"))."</h3>";
echo "<h3>Today is ".date("d.m.Y",strtotime("+2 week"))."</h3>";
?>