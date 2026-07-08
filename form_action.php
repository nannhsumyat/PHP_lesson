<?php
    /*var_dump($_GET);
    //Super Global Variable
    //$_REQUEST,$_SERVER,$_GET,$_POST,$_FILES,$_SESSION,$_COOKIE


    $name = $_GET["name"];
    $email = $_GET["email"];
    $password = $_GET["password"];
    echo "<h1>$name and $email and $password</h1>";*/

    var_dump($_FILES);
    //Super Global Variable

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $photo = $_FILES["photo"];
    echo "<h1>$name and $email and $password</h1>";
    print_r($photo);
?>