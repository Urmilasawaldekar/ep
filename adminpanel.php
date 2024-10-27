<?php include "connection.php";
?>
<?php
session_start();

if(!isset( $_SESSION['AdminLoginId'])){
    header("Location:adminlogin.php");
}
?>
<?php   if(isset($_POST['logout'])){
        session_destroy();
        header('Location:adminlogin.php');
    }?>
    <html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="stylea.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   
   <link rel="stylesheet" href="bx-home.svg">
  
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
     background:dodgerblue;
     font-size:16px;
     font-weight:550;
     padding:5px 10px;
     
     border:2px solid black;
     border-radius:8px;
 }
 .box{
     width:30%;
     height:30%;
    border:2px solid black;  
    margin-left:18%;
    margin-top:18%;
    background-color:#ffff00;
    float:left;
   
 }
 .box2{
     width:30%;
     height:30%;
    border:2px solid black;  
    margin-left:18%;
    margin-top:18%;
    background-color:#ffff00;
    float:right;
 }
 
 </style>
  <style type="text/css"> 
        .container {
            width:815px;
            height:700px;
           
            padding-top:8%;
            padding-left:18%;
            padding-right:15px;
        }
        #st-box {
            float:left;
            width:230px;
            height:160px;
            background-color:#eaeaea;
         
          
        }
        #nd-box {
            float:left;
            width:230px;
            height:160px;
            background-color:#eaeaea; 
          
            margin-left:15px;
        }
   
      
        h3 {
            color:blue;
            margin-top:14%;
            margin-left:6%;
        }
        </style> 
</head>

<body style=" background-color:#bbb;">
<div class="header" style="width:100%;height:120px; background-color: white;position:fixed;top:0;">
<h1 style="margin-top:20px;color: black;font-size:40px;  font-family: Times New Roman, Times, serif; margin-left:40%;"><i class='fa-solid fa-house-chimney' style='font-size:40px;color:red;margin-top:20px;'></i>StayEase</h1>
</div>
 

    <div class="nav-bar" id="nav" style="position:fixed;width:15%;height:200%;top:20.4%;" >

        <div class="menu-right">
         
            <ul id="menu" >
                <li ><a class="active" href="adminpanel.php">Home</a></li>
             
              
              
                        <li><a href="aproduct.php"> Properties</a></li>
                        <li><a href="users.php">Users </a></li>

                   
               
              
                <?php if(isset( $_SESSION['AdminLoginId'])){  ?>
                <li><form  action = "" method="post">
<button class="logout" name="logout" style="background-color:dodgerblue" >Log out</button>
 </form></li><?php }?>
                
            </ul>
           
   
 
    

        </div>
</div>

 

<center> 
        <h3 style='color: #1d4052;'>Admin Dashboard</h3>
          
        <div class="container">
            <div id="st-box">
            <h4 style="text-align:center;margin-top:10px;">Properties </h4>
    <?php
    
    $sql = "SELECT * FROM `property` ";
    
    $result = mysqli_query($conn,$sql);
    
    $row= mysqli_num_rows($result) ;
    echo"<p class='card-text ' style='margin-left:10px;text-align:center;margin-top:20px;font-size:35px;'>$row</p>";
          
              ?>
            </div>
              
            <div id="nd-box">
            <h4 style="text-align:center;margin-top:15px;">Users </h4>
    <?php
    
    $sql = "SELECT * FROM `login` ";
    
    $result = mysqli_query($conn,$sql);
    
    $row= mysqli_num_rows($result) ;
    echo"<p class='card-text ' style='margin-left:10px;text-align:center;margin-top:20px;font-size:35px;'>$row</p>";
          
              ?>
            </div>
              
           
        </center>
</body>

</html>