<?php

session_start();
// browser မှာ PHPSESSID ဆောက်ပြီး server မှာ file storage အနေနဲ့သိမ်း temp/sess_xxx_213
// php.ini session.gc_maxlifetime = 1440 (24 minu)
// အသုံးများသောနေရာများ
// Login System (Authentication)
// Shopping cart (e-commerce website)
// User preference (Languages, Themes)
// Multi-step forms (Wizard forms)
// Flash messages (notification)

$_SESSION["name"] = "Nann Hsu Myat Phyo";
$_SESSION["email"] = "nannphyo850@gmail.com";

if($_SESSION["name"] && $_SESSION["email"]){
    echo "<h1>My name is ".$_SESSION["name"]."</h1>";
    echo "<h1>My email is ".$_SESSION["email"]."</h1>";
}else{
    echo "<h1>Empty data.</h1>";
}
?>