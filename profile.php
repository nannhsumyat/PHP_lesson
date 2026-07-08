<?php
    session_start();
    if($_SESSION["email"] && $_SESSION["password"]){
        $email = "admin@gmail.com";
        $password = "123456789";
        if($_SESSION["email"] == $email && $_SESSION["password"] == $password){
            $_SESSION["name"] = "Admin";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
        <h1>My email is <?php echo $_SESSION["name"] ?></h1>
        <a href="logout.php" class="btn btn-danger">logout</a>
    </div>
</body>
</html>
<?php 
    }else{
        header("Location:login.php");
    }
        }else{
            header("Location:login.php");
        }
 ?>