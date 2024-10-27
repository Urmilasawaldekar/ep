

<?php include "connection.php"?>
<?php include "nav.php"?>


<?php
 
 $id =$_GET['id'];
 
 
 
if(isset($_POST["update"])){
  

    $pswd = mysqli_real_escape_string($conn,$_POST['psw']);
    $cpswd = mysqli_real_escape_string($conn,$_POST['cpsw']);



    if($pswd==$cpswd){
    $sql="UPDATE `supplier_registration` SET password='$pswd'  WHERE sid='$id'";
 
    if (mysqli_query($conn, $sql)) {
     
      echo "
      <script>
                alert('Password updated successfully');
                window.location.href='home.php';
                </script>";
    } else {
      echo "
      <script>
                alert('Password updated not successfully');
                window.location.href='home.php';
                </script>";
    }
}else{
    echo  "<script>
      alert('Password not match');
     
      </script>";
  }
    mysqli_close($conn);
    }
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
   
 




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
            height:350px;
            margin-top:260px;
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
            background-color: green;
            font-size: 18px;
            font-weight: bold;
            margin: 20px 0;
            padding: 5px 15px;
            width: 90%;
            border-radius: 5px;
            border: 0;
        }
    </style>
</head>
<body>
<div class="nav-bar" id="nav" style="top:130px;width:100%" >

<div class="menu-right">
    <span onClick="myFunction()">&#9776;</span>
    <ul id="menu" >
        <li ><a  href="home.php">Home</a></li>
        <li ><a href="Property.php">Products</a></li>
      
        <li>  <a href="home.php">Add Products</a>
            <ul id="submenu">
                <li ><a href="Afp.php">Farmer  </a></li>
                <li ><a href="Asp.php">Supplier </a></li>

            </ul>
        </li>
        <li  id="navabout"><a href="home.php">About Us</a></li>
        <li ><a href="home.php">Contact Us</a></li>
        <li  id="navabout" ><a href="5w.php">Wheater</a></li>
        <?php if(isset( $_SESSION['UserPhone'])){  ?>
        <li><a href="viewf.php">View Cart</a></li><?php }?>
        <?php if(isset( $_SESSION['UserPhoneS'])){  ?>
        <li><a href="views.php">View cart</a></li><?php }?>
        <li><a href="news.php">Blogs</a></li>
        <li><a href="news3.php">News</a></li>
        <?php if(!isset( $_SESSION['UserPhone'])&&!isset( $_SESSION['UserPhoneS'])){  ?>
        <li>  <a href="home.php"><i style="color :white;" class="fa fa-user mr-2" aria-hidden="true"></i>
Registration</a>
            <ul id="submenu">
                <li><a href="Fregistration.php">Farmer </a></li>
                <li><a href="Sregistration.php">Supplier </a></li>

            </ul>
        </li><?php }?>
      
        <?php if(!isset( $_SESSION['UserPhone'])&&!isset( $_SESSION['UserPhoneS'])){  ?>
        <li>
            <a href="home.php"><i style="color :white;"  class="fa fa-user mr-2" aria-hidden="true"></i>
Login </a>
            <ul>
                <li><a href="flogin.php">Farmer </a></li>
                <li><a href="slogin.php">Supplier </a></li>
                <?php if(!isset( $_SESSION['AdminLoginId'])){  ?>  <li><a href="adminlogin.php">Admin</a></li><?php }?>

            </ul>
        </li><?php }?>
      
        <?php if(isset( $_SESSION['UserPhone'])){  ?>
        <li><form  action = "" method="post">
<button class="logout" name="logout" >Log out</button>
</form></li><?php }else{
  if(isset( $_SESSION['UserPhoneS'])){  ?>
    <li><form  action = "" method="post">
<button class="logout" name="logout" >Log out</button>
</form></li><?php
  
}}?>
    </ul>
   




</div>
        </div>
<div class="login-form">
        <h2 style="text-align:center; margin-top:10px;">Update Password</h2>
        <form action="#" method="POST">


            <p>Password:</p>
            <input type='password' id='psw' name='psw' minlength="8" required>

           <p> Confirm Password</p>
            <input type='password' id='cpsw' name='cpsw' >


            <button type="submit" name='update'>Upadate Password</button>
           
        </form>
   
</div>

<div class="footer" style="margin-top:40%"><?php include "footer.php";?></div>


</body>
</html>
