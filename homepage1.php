<?php
session_start();
include("connect1.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<style>
    .logout{
        display: fixed;
        top: 10px;
        right: 10px;
    }
</style>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
         <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        // while($row=mysqli_fetch_array($query)){
        //     echo $row['firstName'].' '.$row['lastName'];
        // }
       }
       ?>
      </p>
      <!-- <div class="logout"> -->

      <a  href="/Farmerdash.html"></a>
      <!-- </div> -->
      
    </div>
</body>
</html>