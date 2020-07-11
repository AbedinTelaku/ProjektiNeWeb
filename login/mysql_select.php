<?php
 require '../includes/dbconnect.php';

 $sql="SELECT * from users";
 if($result = mysqli_query($conn, $sql)){

    echo "<table border = '1' >";
    echo "<tr>";
       echo "<th>id</th>"; 
       echo "<th>name</th>"; 
       echo "<th>email</th>"; 
       echo "<th>password</th>";
       while($row= mysqli_fetch_array($result)){
           echo "<tr>";
           echo "<td>"$row['id'] . "</td>";
           echo "<td>"$row['name'] . "</td>";
           echo "<td>"$row['email'] . "</td>";
           echo "<td>"$row['password'] . "</td>";
           echo "</tr>";
       } 
       echo "</table>";
 }else{
     echo "Nuk ka te dhena";
 }

?>