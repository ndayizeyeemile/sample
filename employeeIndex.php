<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
    margin:0;
    padding:0;
    /* increase border inside of the container*/
    box-sizing: border-box;
    list-style: none;
    text-decoration:none;
}

body{
    font-family: helvetica;
    background-image:url(hr.jpg);
    background-repeat:no-repeat;
    background-size:cover;
}
nav{
    background:#0082e6;
    width:100%;
    height:80px;
}

ul{
    float:right;
    margin-right: 20px;
}


label.logo{
    color:white;
    font-size:30px;
       /* center content in container without need to use margin and padding*/
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
}

nav ul li{
    /* display in single line*/
    display: inline-block;
   /* center content in container without need to use margin and padding*/
    line-height: 80px;
    margin:0 5px;
    
}


nav ul li a{
    color:white;
    font-size:17px;
    text-transform: uppercase;
    padding:7px 13px;
    border-radius: 3px;
    
}

a.active, a:hover{
    background: #1b9fff;
    /* hover appear in 5 seond*/
    transition:.5s;
}
nav ul ul{

    position:absolute;
    top:5px;
    display:none;
}
nav ul li:hover >ul{
display:block;     
} 
nav ul ul li{
width:100px;
float:none;
display:list-item;
position: relative;
top :-5px;
}
p{

    margin:30px 30px;
    color:white;
    font-size:18px;
}
.right a{
background:white;
margin-top:50px;
float:right;
}
.right a:hover{
background:gray;
}
#sign{
    background:white;


}
#sign:hover{
  color:skyblue;
    

}

    </style>
</head>
<body>
<header>
    <nav>
      
        <label class="logo">HR MANAGEMENT</label>
        <ul>
            <li><a href="#" class="active">home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="leave.php">Request leave</a></li>
            <li><a href="training.php">Apply Training</a></li>
           <li><a href="leave.php">leave Status</a></li>
           <li class="#"><a href="#">View<i class="fa fa-caret-down"></i></a>
             <ul>

             <li><a href="leave.php">Leave status</a></li>
             <li><a href="#">Training status</a></li>
             </ul>
           </li>
           
        </ul>
    </nav>
</header>  
<div class="content">
<p>Welcome to this page if you have any issue <br>tell through your account.</p>
</div>
<div class="right">
  <h1><a href="employeeForm.php">Create Account</a></h1>

</div>
<h1><a href="niceForm.php" id="sign">Sign In</a></h1>
</body>
</html>
