<?php  
session_start();
 if(isset($_POST['logout'])){
        session_destroy();
        header('Location:home.php');
    }?>
    <html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 
     <script type="text/javascript" >
        
   $(document).on('click','ul li ',function(){
   $(this).addClass('active').siblings().removeClass('active')
})</script>
 <style>.logout{
     background-color:dodgerblue;
     font-size:16px;
     font-weight:550;
     padding:5px 10px;
     
     border:2px solid black;
     border-radius:8px;
 }
 .TopFixedBanner{
    background-image: url("images/house-img-1.webp");
    
    min-height: 450px;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
     background-repeat: cover;
}
.TopBannerOverlay{
    width: 100%;
    min-height: 450px;
    position: absolute;
    background: rgb(0,0,0,0.1);
    
}</style>
</head>

<body >
<div class="header" style="width:100%;height:100px; background-color: white;">
<h1 style="margin-top:20px;color: black;font-size:40px;  font-family: Times New Roman, Times, serif; margin-left:40%;"><i class='fa-solid fa-house-chimney' style='font-size:40px;color:red;margin-top:20px;'></i>StayEase</h1>
</div>


    <div class="nav-bar" id="nav" style="top:130px;;width:100%" >

        <div class="menu-right">
            <span onClick="myFunction()">&#9776;</span>
            <ul id="menu" >
                <li ><a class="active" href="#">Home</a></li>
                <li><a href="Property.php">Properties</a></li>
              
                <li>  <a href="post.php">Add Property</a>
                    
                </li>
                <li  ><a href="aboutus.php">About Us</a></li>
                <!-- <li ><a href="#contactus">Contact Us</a></li>
                -->
                <?php if(isset( $_SESSION['email'])){  ?>
                <li><a href="view.php">View Cart</a></li><?php }?>
             
                <?php if(!isset( $_SESSION['email'])){  ?>   <li>  <a href="registration.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>
      Registration</a>
                  <?php }?>
                </li>
            
                <?php if(!isset( $_SESSION['email'])){  ?> 
                     <li>  <a href="login.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>
                  User Login</a></li> <?php }?>
                    <?php if( !isset( $_SESSION['email'])&&!isset( $_SESSION['AdminLoginId'])){  ?> 
                     <li>  <a href="adminlogin.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>
                    Admin Login</a></li> <?php }?>
                
                <?php if(isset( $_SESSION['email'] )){  ?>
                <li><form  action = "" method="post">
<button class="logout" name="logout" style="background-color:dodgerblue">Log out</button>
 </form></li><?php }
 ?>
                
            </ul>
           
   
 
    

        </div>
</div>

       
<div class="TopFixedBanner">
<div class="TopBannerOverlay">
    <h3 style="  text-align: center;margin-top:160px;color:white">WELCOME TO StayEase!!</h3>
    <P style="  text-align: center;margin-top:0px;color:white">THE KEY TO YOUR HOUSE</P>
</div></div>



     
<?php include "letestProperty.php" ;?>
 
  <?php include "footer.php" ;?>

</body>

</html>