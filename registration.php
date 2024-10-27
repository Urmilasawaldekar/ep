<?php include "connection.php" ;
include "link.php" ;
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
    <style>
    *{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}
body{
    background-size: cover;

}
.login-form{
    padding: 0 30px;
    background-color: rgba(0,0,0,0.5);
    width: 350px;
    margin-top: 330px;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    color: #fff;
}
.login-form h1{
    font-size: 30px;
    text-align: center;
    text-transform: uppercase;
    margin: 40px 0;
}
.login-form p{
    font-size: 20px;
    margin: 15px 0;

}
.login-form input{
    font-size: 16px;
    width: 95%;
    padding: 5px 10px;
    border: 0;
    outline: none;
    border-radius: 5px;
}
.login-form .btn4{
    background-color:dodgerblue;
    font-size: 18px;
    font-weight: bold;
    margin: 20px 0;
    padding: 5px 15px;
    width: 80%;
    border-radius: 5px;
    border: 0;
    
}
.logout{
    background-color:dodgerblue;
    font-size:16px;
    font-weight:550;
    padding:5px 10px;
    
    border:2px solid black;
    border-radius:8px;
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
                <li ><a href="home.php">Home</a></li>
                <li><a href="Property.php">Properties</a></li>
              
                <li>  <a href="post.php">Add Property</a>
                    
                </li>
                <li  ><a href="aboutus.php">About Us</a></li>
                <!-- <li ><a href="home.php">Contact Us</a></li> -->
               
                <?php if(isset( $_SESSION['email'])){  ?>
                <li><a href="view.php">View Cart</a></li><?php }?>
             
                <?php if(!isset( $_SESSION['email'])){  ?>   <li>  <a href="registration.php" class="active" ><i class="fa fa-user mr-2" aria-hidden="true"></i>
      Registration</a>
                  <?php }?>
                </li>
            
                <?php if(!isset( $_SESSION['email'])){  ?>  <li>  <a href="login.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>
      User Login</a>
                  <?php }?>
                </li>
                <?php if( !isset( $_SESSION['email'])&&!isset( $_SESSION['AdminLoginId'])){  ?> 
                     <li>  <a href="adminlogin.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>
                    Admin Login</a></li> <?php }?>
                <?php if(isset( $_SESSION['email'] )){  ?>
                <li><form  action = "" method="post">
<button class="logout" name="logout" >Log out</button>
 </form></li><?php }
 ?>
                
            </ul>
           
   
 
    

        </div>
</div>



    <div class="login-form">

        <h2 style="text-align:center; margin-top:10px;">User Registration</h2>
        <form action="#" method="POST">
                <p>User Name:</p>
                <input type="text" name="name" required>


            
            <p>Email Id</p>
            <input type="email" name="email" required >
            <p>Password</p>
            <input type="password" name="password"  minlength="8" required>
            <p>Confirm Password</p>
            <input type="password" name="cpassword" minlength="8" required>
             <button class="btn4"type="submit" name="submit"style='background:dodgerblue;'>Create Account</button>
            <p>If you have account already so login? <a href="login.php" >Login</a></p>
        
        </form>
    
    </div>
  
                </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
  $uname = $_POST['name'];
  $email = $_POST['email'];
  $pswd = $_POST['password'];
  $cpswd =$_POST['cpassword'];

  if($pswd==$cpswd){
   
$sql=" SELECT * FROM `login` WHERE email='$email'";
  
$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        if( $email==$row['email']){
          echo"<script>
    alert('Email already exist');
    window.location.href='registration.php';
    </script>";
            }
          }
        }
        else{
        $insert="INSERT INTO `login`(`id`, `username`, `email`, `password`) 
        VALUES ('','$uname','$email','$pswd')";
       
        if (mysqli_query($conn, $insert)) {
          echo"<script>
          alert(' Registration successfully');
          window.location.href='home.php';
          </script>";
        } else{
          echo"<script>
          alert(' Registration not successfully');
          window.location.href='home.php';
          </script>";
        }
        
    }
      
    
    
}else{
  echo"<script>
  alert('Passeord not match');
  window.location.href='registration.php';
  </script>";
}

mysqli_close($conn);

}
?>
<?php include "footer2.php" ;?>

    