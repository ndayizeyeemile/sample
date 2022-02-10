<?php
session_start();
    include('header.php');
    require_once('database.php');
$smt=$conn->prepare('select *from department');
$smt->execute();
$data=$smt->fetchAll();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="empForm">
   <form name="form1" action="#" method="POST" encytpe="multipart/form-data">
        <div class="empHeader">Employee  Registration</div>
    <input type="text"  name="names"  placeholder="Enter Names" value="">
    <input type="text"  name="username"  placeholder=" Enter username" value="">
    <input type="text"  name="email"  placeholder=" Enter email" value="">
    <input type="text"  name="account"  placeholder=" Enter bank account" value="">
    <input type="password"  name="retypepassword"  placeholder=" Enter password" value="">
    <input type="password"  name="password"  placeholder=" Enter password" value="">
    <input type="text"  name="nationalId" placeholder="Enter NationalId" value="">
    <select name="department" id="">
   <option>Select Department</option>
     <?php foreach($data as $row):?>
       <option value="<?=$row['depId']?>"><?=$row['department_name']?></option>
       <?php endforeach?>
   </select>
   <select name="gender" id="">
   <option value="Male">Select Gender</option>
       <option value="Male">Male</option>
       <option value="Female">Female</option>
   </select>
    <input type="text"  name="phone" placeholder="Enter Phone " value="">
    <input type="date"  name="dob" placeholder=" Enter Dob" value="">
    <input type="text"  name="address"  placeholder="Enter Adderss" value="">
    <input type="submit"  name="subs"  id="SUBS" value="Save">
    </form>
   </div> 
<script src="js/employee.js"></script>
</body>
</html>