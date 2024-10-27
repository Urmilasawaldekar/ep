<?php 
 include "link.php" ;
 session_start();
 if(isset($_POST['logout'])){
    session_destroy();
    header('Location:home.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>About Us</title>
    <style>
    *{
    padding: 0;
    margin: 0;
    
    box-sizing: border-box;

}
.about-us{
    font-family:time New Roman;
    height: 100vh;
    width: 100%;
    padding: 90px 0;
    background-color: white;
  }
  .pic{
    border-radius: 10px;
    height: 375px;
    width: 450px;
  }
  .about{
    width: 1130px;
    max-width: 85%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
  }
  .text{
    width: 540px;
  }
  .text h2{
    font-size: 90px;
    font-weight: 600;
    margin-bottom: 10px;
  
  }
  .text h5{
    font-size: 22px;
    font-weight: 500;
    margin-bottom: 20px;
  }
  span{
    color: #4070f4;
  }
  .text p{
    font-size: 18px;
    line-height: 25px;
    letter-spacing: 1px;
  }
  .data{
    margin-top: 30px;
  }
  .hire{
    font-size: 18px;
    background: dodgerblue;
    color: #fff;
    text-decoration: none;
    border: none;
    padding: 8px 25px;
    border-radius: 6px;
    transition: 0.5s;
  }
  .hire:hover{
    background: #000;
    border: 1px solid #4070f4;
  }


/* .about-text{
  
    height:70vh;
    background-color:#34ebdb;
    
}

.about-text h1{

    color: black;
    font-size: 30px;
    text-transform: capitalize;
 
	    
	
}

.about-text p{
    color: blue;
    letter-spacing: 1px;
    line-height: 28px;
    font-size: 18px;
  margin-top:50px;
	margin-right:20px;
		margin-left:20px;
        text:justify;
	} */
    
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
                <li><a href="Property.php">Properties</a></li>
              
                <li>  <a href="post.php">Add Property</a>
                    
                </li>
                <li  ><a href="aboutus.php" class="active">About Us</a></li>
                <!-- <li ><a href="home.php">Contact Us</a></li> -->
               
                <?php if(isset( $_SESSION['email'])){  ?>
                <li><a href="view.php">View Cart</a></li><?php }?>
             
                <?php if(!isset( $_SESSION['email'])){  ?>   <li>  <a href="registration.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>
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
<button class="logout" name="logout" style="background-color:dodgerblue">Log out</button>
 </form></li><?php }
 ?>
                
            </ul>
           
   
 
    

        </div>
</div>
           <section class="about-us">
        <div class="about">
            <img src="images/ab.jpg" class="pic">
            <div class="text"">
                <h2 >About Us</h2>
                <p style="font-weight:normal;">we understand that people everywhere are searching for a home to call their own. We want to make this search as joyful as finally finding the perfect home because we understand that finding a home is much more than an online search!
A home is a cherished memory that lasts forever, it is where the walls embrace memories, the ceilings shelter love and laughter, where the quiet corners offer a much-needed pause and life itself becomes a reason to celebrate.So to make this journey joyful, our website entrypoint is helpful using this you can search the property likes city name,property status and as well as you can sell  property using giving property information after login.
</p>
                <div class="data">
                    <a href="#" class="hire">Read more</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
<?php include "footer.php" ;?>