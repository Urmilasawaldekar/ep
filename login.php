
<?php include "connection.php" ;
include "link.php" ;

 session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>User Login</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }

        body {
            background-size: cover;

        }

        .login-form {
            padding: 0 30px;
            background-color: rgba(0, 0, 0, 0.5);
            width: 350px;
            height:500px;
            margin-top: 300px;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            color: #fff;
        }

        .login-form h1 {
            font-size: 30px;
            text-align: center;
            text-transform: uppercase;
            margin: 40px 0;
        }

        .login-form p {
            font-size: 20px;
            margin: 15px 0;

        }

        .login-form input {
            font-size: 16px;
            width: 95%;
            padding: 5px 10px;
            border: 0;
            outline: none;
            border-radius: 5px;
        }

        .login-form button {
            background:dodgerblue;
            font-size: 18px;
            font-weight: bold;
            margin: 20px 0;
            padding: 5px 15px;
            width: 50%;
            border-radius: 5px;
            border: 0;
        }
    </style>
</head>

<body>
<div class="header" style="width:100%;height:100px; background-color: white;">
        
        <h1 style="margin-top:20px;color: black;font-size:40px;  font-family: Times New Roman, Times, serif; margin-left:40%;"><i class='fa-solid fa-house-chimney' style='font-size:40px;color:red;margin-top:20px;'></i>StayEase</h1>
</div>


    <div class="nav-bar" id="nav" style="top:130px;;width:100%" >

        <div class="menu-right">
            <span onClick="myFunction()">&#9776;</span>
            <ul id="menu" >
                <li ><a  href="home.php">Home</a></li>
                <li><a href="Property.php">Properties</a></li>
              
                <li>  <a href="postProperty.php">Add Property</a>
                    
                </li>
                <li  ><a href="aboutus.php">About Us</a></li>
                <!-- <li ><a href="home.php">Contact Us</a></li> -->
               
                <?php if(isset( $_SESSION['email'])){  ?>
                <li><a href="view.php">View Cart</a></li><?php }?>
             
                <?php if(!isset( $_SESSION['email'])){  ?>   <li >  <a href="registration.php" ><i class="fa fa-user mr-2" aria-hidden="true"></i>
      Registration</a>
                  <?php }?>
                </li>
            
                <?php if(!isset( $_SESSION['email'])){  ?>  <li>  <a href="login.php" class="active"><i class="fa fa-user mr-2" aria-hidden="true"></i>
      User Login</a>
                  <?php }?>
                </li>
                <?php if( !isset( $_SESSION['email'])&&!isset( $_SESSION['AdminLoginId'])){  ?> 
                     <li>  <a href="adminlogin.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>
                    Admin Login</a></li> <?php }?>
                <?php if(isset( $_SESSION['email'] )){  ?>
                <li><form  action = "" method="post">
<button class="logout" name="logout" style="background-color:dodgerblue" >Log out</button>
 </form></li><?php }
 ?>
                
            </ul>
           
   
 
    

        </div>
</div>

<div class="login-form">
        <h2 style="text-align:center; margin-top:10px;">User Login</h2>
        <form action="#" method="POST">


            <p>Email:</p>
            <input type="email" name="email" required>

            <p>Password</p>
            <input type="password" name="password" required>



            <button type="submit" name="signin">Login</button>
            <p>If you have no account so please  create account first? <a class="link" href="registration.php" style="color:blue;">Create Account</a></p>
    <p>If you have forget your password? <a class="link" href="#" style="color:blue;">Click here</a></p>
        </form>
    </div>
    
</body>

</html>
<?php include "footer2.php" ;?>
<?php

if(isset($_POST['signin'])){
 
 
  $query="SELECT * FROM `login` WHERE email='$_POST[email]' AND password='$_POST[password]'";

  $result=mysqli_query($conn,$query);
  
  if(mysqli_num_rows($result)==1){
    

 
   $_SESSION['email']=$_POST['email'];
  // header('Location:Asp.php');
  ?><script>window.location.href="post.php";</script><?php
  }
  else{ 
   
    echo"<script>alert('incorrect Username Password');</script>";
  }

 
mysqli_close($conn);
}



?>