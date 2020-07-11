<?php
session_start();
if(isset($_SESSION['roli'])){
   



 require '../includes/dbconnect.php';
?>

<?php

 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $personi=$_POST['personi'];

    $sql="INSERT INTO users (name,email,password, added_by) VALUES(:name,:email,:password, :personi)";
    $query=$pdo->prepare($sql);
    $query->bindParam('name',$name);
    $query->bindParam('email',$email);
    $query->bindParam('password',$password);
    $query->bindParam('added_by', $added_by);

    $query->execute();
    header("Location: users.php");
 }
?>

<div class="container">
 <form action="add_users.php" method="POST">
 Emri:
 <input type="text" name="name" placeholder="Shkruaj emrin tuaj">
 Mbiemri:
 <input type="email" name="email" placeholder="Shkruaj emrin tuaj">
 Passwordi:
 <input type="password" name="password">
<input type="hidden" name="added_by" value="<?php echo $_SESSION['name']; ?> ">

 <input type="submit" name="submit" value="Dergo">
 </form>
</div>

<?php  } else{
   header("Location: users.php");
}


?>