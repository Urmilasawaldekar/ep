<?php include "connection.php";
 session_start();
include "link.php";
if(isset($_POST['logout'])){
    session_destroy();
    header('Location:home.php');
}?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>

   
    <style>
.container{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top:30px;
    
}
.card-body{
  height:250px;
  min-height: 1px;
    padding: 1.25rem;
    height: 250px;
}
.cards{
    width: 330px;
    margin: 10px;
    background-color: white;
    border-radius: 15px;
    transition: 0.2s;
	margin-top:0px;
	margin-bottom:40px;
    border:solid 1px;
}
.card-img img{
    width: 96%;
    height: 300px;
    margin-left:6.5px;
    margin-top:5px;
    border-radius: 10px 10px 10px 10px;
    border:1px solid;
}
.cards:hover{
    box-shadow:3.9px 7.8px 7.8px hsl(0deg 0% 0% /0.38)
}


.card-footer{
    display: flex;
    justify-content: center;
    align-items: center;
}

.card-footer  a{
  text-decoration: none;
   width: 150px;
   background:dodgerblue;
    color: white;
    border-radius: 15px;
    border: 1px solid black;
    padding: 6px;
    font-size: 17px;
    cursor: pointer;
    margin: 10px;
    transition: 0.2s;
	text-align:center;
	font-family:times-new-roman;
   
}
.card-footer a:hover
{
    background-color: white;
    color: black;
    border: 2px solid black;
}

/* .logout{
    background-color:#4cd137;
    font-size:16px;
    font-weight:550;
    padding:5px 10px;
    
    border:2px solid black;
    border-radius:8px;
} */

 /* .para{
font-family: 'Lato', sans-serif;
font-family: 'Lobster', cursive;
text-align: justify;
margin-left:10px;  
margin-bottom:1px;  
  
    

} */
.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 5px;
  background-color: #fff;
  border: 1px solid #ddd;
  margin-right:20px;
   
}

.form-inline button {
  padding: 5px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
  border-radius:5px;
}

.form-inline button:hover {
  background-color: royalblue;
}
.form-inline select{
    margin-right:20px;
    width:10%;
    height:20%;
}
@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}


p{
    margin-right:20px;  
}
h1{
    color:orange;
    margin-top:40px;
    margin-bottom:20px;
    text-align:center;
}
.para ,h2{
  font-family: serif;
text-align: justify;
margin-left:12px;  
margin-bottom:4px;  
 font-size:18px; 
    

}
select{
    padding:5px;
    border-radius:5px;
    margin: 5px 10px 5px 0;
    background-color: #fff;
    border: 1px solid #ddd;
}
    </style>
</head>

<body>

<?php include "header.php";?>


    <div class="nav-bar" id="nav" style="top:130px;;width:100%" >

        <div class="menu-right">
            <span onClick="myFunction()">&#9776;</span>
            <ul id="menu" >
                <li ><a  href="home.php">Home</a></li>
                <li><a href="Property.php" >Properties</a></li>
              
                <li>  <a href="post.php">Add Property</a>
                    
                </li>
                <li  ><a href="aboutus.php">About Us</a></li>
                <!-- <li ><a href="home.php">Contact Us</a></li> -->
               
                <?php if(isset( $_SESSION['email'])){  ?>
                <li><a href="view.php" class="active">View Cart</a></li><?php }?>
             
                <?php if(!isset( $_SESSION['email'])){  ?>   <li>  <a href="registration.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>
      Registration</a>
                  <?php }?>
                </li>
            
                <?php if(!isset( $_SESSION['email'])){  ?>  <li>  <a href="login.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>
     User Login</a>
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
    
	
<!-- <div><h1 class="main">Cart</h1></div> -->

<div class="container" style="width:100%;margin-top:5%;">
<?php  
 if(!isset($_POST['upload'])){
  
 //$sql = "SELECT * FROM `asproduct`  WHERE  pname LIKE '%$search%' OR address LIKE '%$search%'";
 $sql = "SELECT * FROM `property` where email= '$_SESSION[email]'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {?>
		<div class="cards">
        <div class="card-img">
        <?php if(!$row['img']==Null){?>
            <img  src="images/Properties/<?php echo $row["img"]; ?>" alt="not found"/><?php }?>
		</div>
        <div class="card-body">
           
            
            <p class="para">Property Name : <?php echo $row["product_name"]; ?></p>
            <p class="para">Price: <?php echo $row["price"]; ?></p>
            <p class="para">City Name : <?php echo $row["city_name"]; ?></p>
            <p class="para">Property Status : <?php echo $row["property_status"]; ?></p>
            <p class="para">Type : <?php echo $row["type"]; ?></p>
            <p class="para">Sub Type : <?php echo $row["sub_type"]; ?></p>
        </div>
        <div class="card-footer" >
           <?php echo  " <a href='updelete.php?id= $row[id]' style='background-color:dodgerblue;'>Remove</a>";?>
           <?php echo  " <a href='updelete1.php?id= $row[id]' style='background-color:dodgerblue;'>Update</a>";?>
        </div>
    </div>
<?php }}}?>
      
   
      </div>


</body>

</html>
<?php include "footer.php" ;?>
