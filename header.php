<?php
require_once('database.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<style>
    #logged{
float:right;
color:white;
font-size:15px;
font-weight:bold;

    }
</style>

</head>
<body>
    
    <div class="header">
        <img src="logo.jpg" alt="" style="height:120px;">
    <p id="logged"><?php echo "Logged in As"." ". $_SESSION['employeeId']?></p>
    <div class="rightMenu">
    <ul>
    <li><a href="employee.php">My Account</a></li>
    <li><a href="niceForm.php">Log out</a></li>
     
     
    </ul>
   </div>
   
    </div>

<script src=""></script>    
</body>
</html>