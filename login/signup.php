<?php
  session_start();

  if(isset($_SESSION['user_id'])){
      header("Location: index.php");
  }

  require '../includes/dbconnect.php';

  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password= password_hash($_POST['password'], PASSWORD_BCRYPT);
    
    $sql="INSERT INTO users(name,email,password) VALUES ('{$name}', '{$email}', '{$password}')";
    konfirmimi($sql);
    $query=$pdo->prepare($sql);
    $query->bindParam('name', $name);
    $query->bindParam('email',$email);
    $query->bindParam('password',$password);

    if($query->execute()){
        $message="Jeni regjistruar me sukses";
    }else{
        $message="Ka nje problem gjate regjitstrimit";
    }
  }



  function konfirmimi($result){
    global $connect;
    if(!$result){
        die('DESHTOJ' . mysqli_error($connect));
        }
}
?>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../css/SignUpStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/kspress-style.css">
</head>
<body>

<!---- Header includes ---->
<?php require '../includes/header.php'; ?>

<div>


    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <!--<button type="button" class="toggle-btn" onclick="login()">Login</button> -->
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="../images/fb-login.png">
                <img src="../images/tw-login.png">
                <img src="../images/google-fb.png">
            </div>

            <script type="text/javascript" src="../js/loginjs.js"></script>
            


            <!--<form id="login" class="input-group" action="login.php" name="myForm" onsubmit="return(validateLogIn())" method="POST">
                <input type="email" class="input-field" name="email" value="" placeholder="Username" >
                <input type="password" class="input-field" name="password" placeholder="Enter Password">
                <input type="checkbox" class="chech-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log in</button>
            </form> -->

            <form id="register" action="signup.php" class="input-group" name="registerForm" onsubmit="return(validateRegister())" method="POST">
                <input type="text" class="input-field" value="" name="emri" placeholder="Shenoni emrin tuaj:" >
                <input type="email" class="input-field" value=""name="email" placeholder="Email" >
                <input type="password" class="input-field" value="" name="password" placeholder="Enter Password">
                <input type="checkbox" class="chech-box"><span>I agree to the terms conditions</span>
                <button type="submit" class="submit-btn" >Register</button>
            </form>

        </div>
<div>
    <?php include '../includes/footer.php'; ?>
    
</div>
    </div>
    <script>
        //var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px"
            y.style.left = "50px"
            z.style.left = "110px"
        }
        /*function login(){
            x.style.left = "50px"
            y.style.left = "450px"
            z.style.left = "0px"
        } */
    </script>
</div>


</body>
</html>