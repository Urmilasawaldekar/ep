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
<!DOCTYPE html>
<html>
<head>
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
  <title>Users</title>
<style>
    table { 
  width: 80%; 
  border-collapse: collapse; 
  margin-top:3%;
  margin-left:17%;
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}
.checked{
	color:orange;
}
.btn2{
	text-decoration: none;
   width: 150px;
   background-color:dodgerblue;;
    color: white;
    border-radius: 15px;
    border: 2px solid black;
    padding: 6px;
    font-size: 17px;
    cursor: pointer;
    margin: 10px;
    transition: 0.2s;
	text-align:center;
	font-family:times-new-roman;
   
}
 .btn2:hover
{
    background-color: white;
    color: black;
    border: 2px solid black;
}
.main{
color:#1d4052;
margin-top:13%;
text-align:center;
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
<body style=" background-color:#bbb;">
<div class="header" style="width:100%;height:120px; background-color: white;position:fixed;top:0;">
<h1 style="margin-top:20px;color: black;font-size:40px;  font-family: Times New Roman, Times, serif; margin-left:40%;"><i class='fa-solid fa-house-chimney' style='font-size:40px;color:red;margin-top:20px;'></i>StayEase</h1>
</div>
 

    <div class="nav-bar" id="nav" style="position:fixed;width:15%;height:200%;top:20.4%;" >

        <div class="menu-right">
         
            <ul id="menu" >
                <li ><a  href="adminpanel.php">Home</a></li>
             
              
              
                        <li><a href="aproduct.php"> Properties</a></li>
                        <li><a class="active" href="users.php">Users </a></li>

                   
               
              
                <?php if(isset( $_SESSION['AdminLoginId'])){  ?>
                <li><form  action = "" method="post">
<button class="logout" name="logout" >Log out</button>
 </form></li><?php }?>
                
            </ul>
           
   
 
    

        </div>
</div>

<h3 class="main">Users Details</h3>

<table>
	<thead>
	<tr>
        <th>Sno.</th>
		<th>User Name</th>
		<th>Email</th>
		
		
		<th></th>
	
	</tr>
	</thead>
	<tbody>
	<tr>
    <?php  $sql = "SELECT * FROM `login` ";
$result = mysqli_query($conn,$sql);
$sno=1;
if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {?>
<td><?php echo $sno++; ?></td>
				<td><?php echo $row['username']; ?></td>
		<td><?php echo $row['email']; ?></td>
		  

<td><a class="btn2"  href="auserdelete.php?id=<?php echo $row['id']; ?>" >Delete</a></td> 

</tr>
		<?Php }}?>
		

	
	</tbody>
</table>
</body>
</html>    