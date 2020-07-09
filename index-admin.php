<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/kspress-style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

<?php

require 'includes/header.php';

if(isset($_SESSION['roli'])){

if($_SESSION['roli'] == 0){


    echo "<h1>YOU ARE NOT AUTH TO LOG IN THIS PAGE</h1>";
    throw new Exception('NO AUTH');
}
}else{
    echo "<h1>YOU NEED TO BE LOGGED IN FIRST</h1>";
}


?>










</body>


</html>