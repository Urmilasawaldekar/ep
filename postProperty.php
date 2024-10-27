<?php include "connection.php";
include "link.php" ;
 session_start();
 if(!isset( $_SESSION['email'])){
  ?><script>window.location.href="login.php";</script><?php
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
   
    <style>
   

/* .login-form{
    padding: 0 50px;
    background-color: rgb(179, 240, 255);
    width: 30%;
  border:1px solid;

    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    color: black;
    margin-top:54%;
    margin-bottom:100px;
   
}
.login-form h1{
    font-size: 30px;
    text-align: center;
    text-transform: uppercase;
    margin: 40px 0;
}
.login-form p{
    font-size: 18px;
    
    margin: 15px 0;
    color:black;

}
.login-form input,select,textarea{
    font-size: 13px;
    width: 100%;
    padding: 4px 10px;
    border: 0;
    outline: none;
    border-radius: 5px;
}
.login-form button{
    background-color: green;
    font-size: 18px;
    font-weight: bold;
    margin: 20px 0;
    padding: 5px 15px;
    width: 50%;
    border-radius: 5px;
    border: 0;
    
}
    
.logout{
    background-color:#4cd137;
    font-size:16px;
    font-weight:550;
    padding:5px 10px;
    
    border:2px solid black;
    border-radius:8px;
}  */
body {
   font-family: Arial, Helvetica, sans-serif;
}
* {
   box-sizing: border-box;
}
form {
   display: flex;
   flex-flow: row wrap;
   align-items: center;
}
form label {
   margin: 5px 10px 5px 0;
}
form input {
   margin: 5px 10px 5px 0;
   padding: 10px;
}
form button {
   padding: 10px 20px;
   font-size: 20px;
   background-color: rgb(39, 22, 141);
   border: 1px solid #ddd;
   color: white;
   cursor: pointer;
   font-weight: bolder;
   border-radius: 4px;
}
form button:hover {
   background-color: rgb(113, 65, 225);
}
@media (max-width: 800px) {
   form input {
      margin: 10px 0;
   }
   form {
      flex-direction: column;
      align-items: stretch;
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
                <li ><a  href="#">Home</a></li>
                <li><a href="Property.php">Properties</a></li>
              
                <li>  <a href="postProperty.php" class="active">Add Property</a>
                    
                </li>
                <li  ><a href="aboutus.php">About Us</a></li>
                /* <li ><a href="#contactus">Contact Us</a></li> */
               
                <?php if(isset( $_SESSION['email'])){  ?>
                <li><a href="view.php">View Cart</a></li><?php }?>
             
                <?php if(!isset( $_SESSION['email'])){  ?>   <li>  <a href="registration.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>
      Registration</a>
                  <?php }?>
                </li>
            
                <?php if(!isset( $_SESSION['email'])){  ?>  <li>  <a href="login.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>
      Login</a>
                  <?php }?>
                </li>
                <?php if(isset( $_SESSION['email'] )){  ?>
                <li><form  action = "" method="post">
<button class="logout" name="logout" >Log out</button>
 </form></li><?php }
 ?>
                
            </ul>
           
   
 
    

        </div>
</div>
<h1>Add Property</h1>
<form>
<label for="email">Email:</label>
<input type="email" id="email" placeholder="Enter email" name="email" />
<label for="pass">Password:</label>
<input type="password" id="pass" placeholder="Enter password" name="pass"/>
<button type="submit">Submit</button>
</form>

    <div class="login-form">
        <h2 style="text-align:center; margin-top:10px;">Add Property</h2>
        <form action="#" method="POST" enctype="multipart/form-data">
        <p>Owner Name</p>
            <input class="form-control" type="text" name="owner" id="owner" required="" placeholder="Enter name...">
            
            <pstyle="display:inline">Contect Number</p>
            <input class="form-control" type="text" name="contact" id="contact" required="" placeholder="Enter phone number...">
            <p>Property Name</p>
            <input class="form-control" type="text" name="pname" id="owner" required="" placeholder="Enter property name...">
            <p>Price</p>
            <input class="form-control" type="text" name="price" id="contact" required="" placeholder="Enter price...">
            <p>Property Status:</p>
        <select name="srproperty" id="srproperty" class="srproperty" required="">
                                    <option value=" ">---- Select ----</option>
                                    <option value="Sale">Sale</option>
                                    <option value="Rent">Rent</option>
                                </select>
                                <p>Type :</p>
                                <select name="type"  required="">
                                <option value="">---- Select ----</option>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Land">Land</option>
                                    <option value="Farmhouse">Farmhouse</option>
                                    <option value="Independent house">Independent house</option>
                                </select>

            <p>Sub-type</p>
            <select name="psubtype" id="psubtypetype" class="psubtype" required="">
                                    <option value=" ">---- Select ----</option>
                                    <option value="1RK">1RK</option>
                                    <option value="2RK">2RK</option>
                                    <option value="3RK">3RK</option>
                                    <option value="4RK">4RK</option>
                                    <option value="1BHK">1BHK</option>
                                    <option value="2BHK">2BHK</option>
                                    <option value="3BHK">3BHK</option>
                                    <option value="4BHK">4BHK</option>
                                </select>
            <p>Area</p>
            <input class="form-control" type="text" name="area" id="area" required="" placeholder="property mesurement....">
            <p>mesurement</p>
            <select name="areasq" id="areasq" class="cityname" required="">
                                    <option value="null">---- Select ----</option>
                                    <option value="Square Feet">Square Feet</option>
                                    <option value="Square Meter">Square Meter</option>
                                    <option value="Square Yard">Square Yard</option>
                                    <option value="Acre">Acre</option>
                                    <option value="Hectare">Hectare</option>
                                    <option value="Gaj">Gaj</option>
                                    <option value="Kanal">Kanal</option>
                                    <option value="Bigha">Bigha</option>
                                    <option value="Biswa">Biswa</option>
                                    <option value="Killa">Killa</option>
                                    <option value="Lessa">Lessa</option>
                                    <option value="Dhur">Dhur</option>
                                    <option value="Pura">Pura</option>
                                    <option value="Chatak">Chatak</option>
                                    <option value="Marla">Marla</option>
                                    <option value="Katha">Katha</option>
                                    <option value="Ground">Ground</option>
                                    <option value="Cent">Cent</option>
                                    <option value="Murabba">Murabba</option>
                                    <option value="Guntha">Guntha</option>
                                    <option value="Karam">Karam</option>
</select>
            <p>Select images</p>
            <input class="upload-box" type="file" id="file" name="file">

             <p>Address</p>
             <input class="form-control" type="text" name="address" id="address" required="" placeholder="property address..">
                            
			
            <p>Property Details</p>
            <textarea name="message" rows="5" placeholder="your message" required></textarea>

            <button type="submit" name="upload">upload</button>
            
        
        </form>
    </div>
  
</body>
</html>
<?php include "footer2.php" ;?>
<?php
if(isset($_POST['upload'])){
  

    $filename = $_FILES["file"]["tmp_name"];
    
    $name =  $_FILES["file"]["name"]; 
    
   
    
    
    move_uploaded_file($filename, "images/".$name);


  $oname =$_POST['owner'];
  $contact =$_POST['contact'];
  $pname =$_POST['pname'];
  $srproperty =$_POST['srproperty'];
  $psubtype =$_POST['psubtype'];
  $area =$_POST['area'];
  $areasq =$_POST['areasq'];
  $address =$_POST['address'];
  $message =$_POST['message'];
  $file =$_POST['file'];
  $price =$_POST['price'];
  $type =$_POST['type'];

  
$insert="INSERT INTO `property`(`id`, `product_name`, `price`, `city_name`, `property_status`, `type`, `sub_type`, `p_details`, `img`, `bedroom`, `bathroom`, `area`, `mesurement`, `owner_name`, `contact`) 
VALUES ('','$pname','$price','$address','$srproperty','$type','$psubtype','$message','$file','$bedroom','$bathroom','$area','$areasq','$oname','$contact')";
       
        if (mysqli_query($conn, $insert)) {
          echo"<script>
          alert('  Property add successfully');
          window.location.href='home.php';
          </script>";
        } else{
          echo"<script>
          alert('Property not add successfully');
          window.location.href='home.php';
          </script>";
        }
        
    
      
    
    


mysqli_close($conn);

}


?>


