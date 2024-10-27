<?php include "connection.php";
include "link.php" ;
 session_start();
 if(!isset( $_SESSION['email'])){
  ?><script>window.location.href="login.php";</script><?php
}
if(isset($_POST['logout'])){
  session_destroy();
  header('Location:home.php');
}?>
<!DOCTYPE html>
<html>
   <head>
      <title>Add Property</title>
   <style>
    
    select{
      background: #fff;
        color: black;
        border: 1px solid black;
        
        width: calc(50% - 10px);
        height: 50px;
        padding: 12px;
        font-size: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;
    }
  

   .fbtn{
    background-color: #4593E7 ;
    font-size: 18px;
    font-weight: bold;
    margin-top: 10px;
    margin-bottom: 20px;
    margin-right: 400px;
    margin-left:45px;
    padding: 5px 15px;
    width: 30%;
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
 }</style>
   </head>
   <body style="background-color:#fff;" >
   <div class="header" style="width:100%;height:100px; background-color: white;">
<h1 style="margin-top:20px;color: black;font-size:40px;  font-family: Times New Roman, Times, serif; margin-left:40%;"><i class='fa-solid fa-house-chimney' style='font-size:40px;color:red;margin-top:20px;'></i>StayEase</h1>
</div>


    <div class="nav-bar" id="nav" style="top:130px;;width:100%" >

        <div class="menu-right">
            <span onClick="myFunction()">&#9776;</span>
            <ul id="menu" >
                <li ><a class="active" href="home.php">Home</a></li>
                <li><a href="Property.php">Properties</a></li>
              
                <li>  <a href="postProperty.php">Add Property</a>
                    
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
            
                <?php if(!isset( $_SESSION['email'])){  ?>  <li>  <a href="login.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>
      Login</a>
                  <?php }?>
                </li>
                <?php if(isset( $_SESSION['email'] )){  ?>
                <li><form  action = "" method="post">
<button class="logout" name="logout" style="background-color:dodgerblue" >Log out</button>
 </form></li><?php }
 ?>
                
            </ul>
           
   
 
    

        </div>
</div>

   <div >
      <h1 style="margin-left:580px;color:#1d4052;margin-bottom:30px;margin-top:20px;font-size:35px;"> Add Property</h1>

      <form action="#" method="POST" enctype="multipart/form-data" style='padding-left:500px;'>
      <input type="hidden" name="email" id="email" required="" value="<?php echo $_SESSION['email'];?>">
     
         <br><br>
         <div style='width:120px;color:black;'>Owner Name</div>
         <input type="text" name="owner" id="owner" required="" placeholder="Enter name..." style='background: #fff;
        color: black;
        border: 1px solid black;
    
        width: calc(50% - 10px);
        height: 50px;
        padding: 12px;
        font-size: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;'>
         <br><br>

         <div style='width:120px;color:black;'>Contact Number</div>
         <input type="text" name="contact" id="contact" required="" placeholder="Enter phone number..."  style='background: #fff;
        color: black;
        border: 1px solid black;
      
        width: calc(50% - 10px);
        height: 50px;
        padding: 12px;
        font-size: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;'>
         <span id='lasterror' style="margin-left:120px;"></span><br><br>

         <div style='width:120px;color:black;'>Property Name</div>
         <input  type="text" name="pname" id="owner" required="" placeholder="Enter property name..."  style='background: #fff;
        color: black;
        border: 1px solid black;
      
        width: calc(50% - 10px);
        height: 50px;
        padding: 12px;
        font-size: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;'><br><br>
         <div style='width:120px;color:black;'>Price</div>
         <input type="text" name="price" id="contact" required="" placeholder="Enter price..."  style='background: #fff;
        color: black;
        border: 1px solid black;
      
        width: calc(50% - 10px);
        height: 50px;
        padding: 12px;
        font-size: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;'><br><br>

         <div style='width:120px;color:black;'>Property Status:</div>
         
         <select name="srproperty" id="srproperty" class="srproperty" required="">
                                    <option value=" ">---- Select ----</option>
                                    <option value="Sale">Sale</option>
                                    <option value="Rent">Rent</option>
                                </select>
                                <br><br>

         <div style='width:120px;color:black;'>Type :</div>
         <select name="type"  required="">
                                <option value="">---- Select ----</option>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Land">Land</option>
                                    <option value="Farmhouse">Farmhouse</option>
                                    <option value="Independent house">Independent house</option>
                                </select><br><br>

         <div style='width:120px;color:black;'>Sub-type</div>
         <select name="psubtype" id="psubtypetype" class="psubtype" >
                                    <option value=" ">---- Select ----</option>
                                    <option value="1RK">1RK</option>
                                    <option value="2RK">2RK</option>
                                    <option value="3RK">3RK</option>
                                    <option value="4RK">4RK</option>
                                    <option value="1BHK">1BHK</option>
                                    <option value="2BHK">2BHK</option>
                                    <option value="3BHK">3BHK</option>
                                    <option value="4BHK">4BHK</option>
                                </select><br><br>

         
         <div style='width:120px;color:black;'>Area</div>
         <input type="text" name="area" id="area" required="" placeholder="property mesurement...."  style='background: #fff;
        color: black;
        border: 1px solid black;
      
        width: calc(50% - 10px);
        height: 50px;
        padding: 12px;
        font-size: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;'>
         <br><br>

         <div style='width:120px;color:black;'>Mesurement</div>
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
</select><br><br>

         <div style='width:120px;color:black;'>Select images</div>
         <input  type="file" id="file" name="file"  style='background: #fff;
        color: black;
        border: 1px solid black;
      
        width: calc(50% - 10px);
        height: 50px;
        padding: 12px;
        font-size: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;'><br><br>
         <div style='width:120px;color:black;'>Address</div>
             <input  type="text" name="address" id="address" required="" placeholder="property address.." style='background: #fff;
        color: black;
        border: 1px solid black;
      
        width: calc(50% - 10px);
        height: 50px;
        padding: 12px;
        font-size: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;'>
                            
             <br><br>
             <div style='width:120px;color:black;'>Property Details</div>
            <textarea name="message" rows="5" placeholder="your message" required  style=' background: #fff;
        color: black;
        border: 1px solid black;
        width: calc(50% - 10px);
        /* height: 50px; */
        padding: 12px;
        font-size: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;'></textarea>
         <div>
           <center>  <button class="fbtn type="submit" name="upload" >upload</button></center>
         </div>
        
      </form>
      </div>
   </body>
</html>
<?php include "footer.php" ;?>
<?php
if(isset($_POST['upload'])){
  

    $filename = $_FILES["file"]["tmp_name"];
    
    $name =  $_FILES["file"]["name"]; 
    
   
    
    
      move_uploaded_file($filename, "images/Properties/".$name);


  $oname =$_POST['owner'];
  $contact =$_POST['contact'];
  $pname =$_POST['pname'];
  $srproperty =$_POST['srproperty'];
  $psubtype =$_POST['psubtype'];
  $area =$_POST['area'];
  $areasq =$_POST['areasq'];
  $address =$_POST['address'];
  $message =$_POST['message'];
 
  $price =$_POST['price'];
  $type =$_POST['type'];
  $email =$_POST['email'];

$insert="INSERT INTO `property`(`id`, `product_name`, `price`, `city_name`, `property_status`, `type`, `sub_type`, `p_details`, `img`, `area`, `mesurement`, `owner_name`, `contact`, `email`) 
VALUES ('','$pname','$price','$address','$srproperty','$type','$psubtype','$message','$name','$area','$areasq','$oname','$contact','$email')";
 
        if (mysqli_query($conn, $insert)) {
          echo"<script>
          alert('  Property add successfully ');
          window.location.href='property.php';
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


