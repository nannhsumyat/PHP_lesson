<?php
// browser ပေါ်မှာ သိမ်း
// Login system မှာပါတဲ့ remember me
// Tracking analysis
// language change
// 4kb

    // setcookie("key","value",expire,domain,path)
    setcookie("age","10",time()+(86400 * 30),"/");

    if($_COOKIE["age"] == "18"){
        echo "You can buy";
    }else{
        echo "You can't buy";
    }
?>