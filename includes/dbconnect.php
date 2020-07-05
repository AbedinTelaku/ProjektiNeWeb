<?php
 
 try{
    $pdo= new PDO("mysql:host=localhost;dbname=info_db", "root", "");
 }catch(PDOException $pdo){
     die("Lidhja deshtoi");
 }
?>