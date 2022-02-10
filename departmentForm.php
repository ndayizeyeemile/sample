<?php
    include('header.php');
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    <style>
        body{
            justify-content:center;

        }
      
        .depHeader{
background:rgb(41, 155,201);
width:100%;
height:40px;
text-align:center;
color:white;
font-size:18px;
font-weight:bold;
    }
 
   input[type='text']{

width: 40%;
height: 20px;
padding: 5px;
margin: 45px 320px;
text-align:center;


}
input[type='submit']{

    width: 40%;
      min-height: 20px;
      padding: 5px;
      margin: 5px 320px;
      background: rgb(41, 155, 201);
      color:white;
      font-size: 16px;
      font-weight: bold;


}
.form1{
width:70%;
min-height:100px;
background:#ddd;
margin:5px 250px;

   
}


        
    </style>
    </head>
    <body>
   
    <div class="depHeader">Department Registration</div>
    <div class="form1">
    <form name="depForm" action="#"  method="POST">  
        <input type="text" name="dep_name" placeholder="Enter department Name" value="">
        <input type="submit"  id='sub' value="Save">
        </form>
    </div>
  <script src="js/department.js"></script>
    </body>
    </html>