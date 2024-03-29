<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact_style.css">
    <link rel="stylesheet" type="text/css" href="css/kspress-style.css">

</head>
<body>

<style>
.theheader{
    width: 100%;
    height: 80px;
    display: block;
    background-color: #101010;
}
.inner_header{
    width: 1000px;
    height: 100%;
    display: block;
    margin: 0 auto;
 
}
.logo_container{
    height: 100%;
    display: table;
    float: left;
}

.logo_container h1{
    color: white;
    height: 100%;
    display: table-cell;
    vertical-align: middle;
    font-family: 'Montserrat';
    font-size: 32px;
    font-weight: 200;
}
.logo_container h1 span{
    font-weight: 800;
}
.navigation{
    float: right;
    height: 100%;
}
.navigation a{
    height: 100%;
    display: table;
    float: left;
    padding: 0px 20px;
}
.navigation a li{
    display: table-cell;
    vertical-align: middle;
    height: 100%;
    color: white;
    font-family: 'Montserrat';
    font-size: 16px;
}
.footer-wraper{
    width: 1200px;
    margin-left: auto;
}
.single-footer{
    margin: 0 auto;
    margin-left: 200px;
    width: 20%;
    float: left;
    text-align: left;
    color: white;

}
.single-footer ul{
    margin: 0 auto;
    padding: 0;
    list-style: none;
}
.single-footer ul a{
    text-transform: uppercase;
    text-decoration: none;
    color: white;  
    font-size: 12px;
}
.single-footer p{
    width: 75%;
    
}
footer{
    width: 100%;
    height: 166px;
    bottom: 0;
    background-color: #262626;
}

</style>



<!---- Header includes ---->
<?php 
    session_start();
    include 'includes/header.php'; 

?>

    <section id="theheader" class="mainContainer">
        <section class="form">
            <div class="textContainer">
                <h1>Contact Us</h1>
                <p>Per cdo pytje/kerkese ne do të jemi më shumë se të lumtur t'ju ndihmojmë.</p>
            </div>
            <section class="threeParts">
                <div class="parts">
                    <div class="headingName"><h1>Zyret Tona</h1></div>
                    <div class="OfficeInfo">
                        <h2><i class="fa fa-phone" aria-hidden="true"></i> +38349332223</h2><br>
                        <p>pressonline@gmail.com</p>
                        <p>Rr.Isa Boletini, Ulpiane</p>
                    </div>
                </div>

                <script>
                    function validate(){
                        if(document.myForm.emri.value == ""){
                            alert("Sheno emrin tuaj");
                            document.myForm.emri.focus();
                            return false;
                        }
                        if(document.myForm.telefoni.value == "" || isNaN (document.myForm.telefoni.value) || document.myForm.telefoni.value.length < 9){
                            alert("Sheno numrin e telefonit tuaj");
                            document.myForm.telefoni.focus();
                            return false;
                        }
                        if(document.myForm.email.value == ""){
                            alert("Sheno emailin tuaj");
                            document.myForm.email.focus();
                            return false;
                        }
                }
                </script>

                <div class="parts">
                    <div class="headingName"><h1>Kerkese/Sygjerim</h1></div>
                    <div class="inputForm">

                        <form action="#" name = "myForm" onsubmit="return(validate())">
                        
                        <form action="" method="get" class="formDetail">
                            <input type="text" name="emri" value="" placeholder="Name" id="name">
                            <input type="text" name="telefoni" value="" placeholder="Telephone" id="telephone">
                            <input type="email" name="email" value="" placeholder="Email" id="email">
                            <textarea name="" placeholder="Comment"></textarea id="comment">
                            <input type="submit" value="Dergo" id="Sbutton"/>
                        </form>
                        </form>
                    </div>
                </div>
                

                <div class="parts">
                    <div class="headingName"><h1>Rrjetet Sociale</h1></div>
                    <div class="SocialIcons">
                        <p><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</p>
                        <p><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</p>
                    </div>
                </div>
            </section>
        </section>
    </section>

    <!---- Footer includes ---->
    <!--<?php include 'includes/footeri.php'; ?>-->
    
</body>
</html>