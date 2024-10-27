<?php include "connection.php";
 session_start();
 include "link.php" ;
 if(isset($_POST['logout'])){
  session_destroy();
  header('Location:home.php');
}?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Product Details</title>
<style>
* {
  box-sizing: border-box;
  
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 30%;
  padding: 15px;
 margin-bottom:20px;
  margin-left:10px;
  box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
  height: 500px; /* Should be removed. Only for demonstration */
 
}
.column3 {
  float: left;
  width: 40%;
  padding: 10px;
  margin-bottom:20px;
  box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
  height: 500px; /* Should be removed. Only for demonstration */
}
.column2 {
  float: left;
  width: 28%;
  padding: 10px;
  margin-bottom:20px;
  box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
  height: 500px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  background-color:white;
}
.para ,h2{
  font-family: Times New Roman, Times, serif;
text-align: justify;
margin-left:10px;  
margin-bottom:4px;  
 font-size:20px; 
    

}
.main{
  text-align:center;margin-bottom:50px;
  color:#1d4052;
  font-size:40px; 
  margin-top:10px;
  font-family: Times New Roman, Times, serif;
}
.main2{
 margin-bottom:20px;
  color:#1d4052;
  font-size:25px; 
  margin-top:10px;
  font-family: Times New Roman, Times, serif;
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
                <li ><a  href="home.php">Home</a></li>
                <li><a href="Property.php"  class="active">Properties</a></li>
              
                <li>  <a href="post.php">Add Property</a>
                    
                </li>
                <li  ><a href="aboutus.php">About Us</a></li>
                <!-- <li ><a href="home.php">Contact Us</a></li> -->
               
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
<button class="logout" name="logout" style="background-color:dodgerblue">Log out</button>
 </form></li><?php }
 ?>
                
            </ul>
           
   
 
    

        </div>
</div>
<?php
$id=$_GET['id'];
$sql = "SELECT * FROM `property` where id = '$id' ";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {?>
<h2 class="main" style="color:#1d4052;margin-left:8%;">Property Details</h2>

<div class="row">
  <div class="column" >
   
   <?php if(!$row['img']==Null){?>
            <img  src="images/Properties/<?php echo $row['img']; ?>" width="100%" height="100%" alt="not found"><?php }?>
  </div>
  <div class="column3" >
  <h2 class="main2">Property Information</h2>
        <p class="para">Property Name :- <?php echo $row["product_name"]; ?></p>
            <p class="para">Price :- <?php echo $row["price"]; ?> ₹</p>
            <p class="para">City Name :- <?php echo $row["city_name"]; ?></p>
            <p class="para">Area :- <?php echo $row["area"]; ?> <?php echo $row["mesurement"]; ?></p>
            <p class="para">Property Status :- <?php echo $row["property_status"]; ?></p>
            <p class="para">Type :-<?php echo $row["type"]; ?></p>
            <p class="para">Sub Type :-<?php echo $row["sub_type"]; ?></p>
            <p class="para">Property Detail :- <?php echo $row["p_details"]; ?></p>
  </div>
  <div class="column2" >
    <h2 class="main2">Owner Information</h2>
    <p class="para">Name :- <?php echo $row["owner_name"]; ?></p>
    <p class="para">Phone no. :-<?php echo $row["contact"]; ?></p>
    <p class="para">Email :-<?php echo $row["email"]; ?></p>

  </div>
</div>
<!-- <div class="row">
  <div class="column2" >
    <h2>Owner Information</h2>
    <p class="para">Name : Lata Sharma</p>
    <p class="para">Phone no. : 6267891233</p>
  </div>
 
</div> -->
<?php }}?>

</body>
</html>

<?php include "footer.php" ;?>