<div class="header">
    <div class="inner_header">
            <div class="logo_container">
                <h1>KS-Press</h1>
            </div>
                <ul class="navigation">
                <a href="sport.php"><li>Sport</li></a>
                    <a href="ekonomi.php"><li>Ekonomi</li></a>
                    <a href="shendeti.php"><li>Shendeti</li></a>
                    <a href="index-admin.php" ><li>Admin</li></a>
                    
                    <?php
                
                    if(isset($_SESSION['name'])){
                        $name = $_SESSION['name'];
                        echo '<a><li>Miresevini ';
                        echo  $name;
                        echo '</li></a>';
                        
                        echo '<a><li>            
                        <form action="Ks-press.php" method="POST">
                        <button style="height:40px; background-color:red;" name="submit" type="submit" class="submit-btn">Log out</button>
                        </li></a>';
                        

                    }else{
                        echo '<a href="../projektiphp/login/login.php" ><li>Login</li></a>';
                        echo '<a href="../projektiphp/login/signup.php" ><li>Register</li></a>';
                    }

                    ?>

                </ul>
    </div>
</div>

