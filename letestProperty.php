<?php include "connection.php";
// session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products </title>
    <!-- main style  -->
    <link rel="stylesheet" herf="style.css">
	 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Lobster&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
.container2{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top:30px;
}
.cards{
    width: 300px;
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


.card-body{
  height:250px;
  min-height: 1px;
    padding: 1.25rem;
    height: 250px;
}
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
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
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
.main{
    color:#1d4052;
    margin-top:40px;
    margin-bottom:20px;
    text-align:center;
}
.para ,h2{
  font-family: serif;
text-align: justify;
margin-left:0px;  
margin-bottom:4px;  
 font-size:18px; 
    

}
    </style>
</head>

<body>


    
		
<div><h1 class="main" style="color:#1d4052">Latest Properties</h1></div>

<div class="container2">
   
<?php  
 
  
 //$sql = "SELECT * FROM `asproduct`  WHERE  pname LIKE '%$search%' OR address LIKE '%$search%'";
 $sql = "SELECT * FROM `property` ORDER BY id DESC LIMIT 4 ";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {?>
		<div class="cards">
        <div class="card-img">
        <?php if(!$row['img']==Null){?>
            <img  src="images/Properties/<?php echo $row['img']; ?>" alt="not found" width:"512",height="512"><?php }?>
		</div>
        <div class="card-body">
           
            
            <p class="para">Property Name : <?php echo $row["product_name"]; ?></p>
            <p class="para">Price: <?php echo $row["price"]; ?></p>
            <p class="para">City Name : <?php echo $row["city_name"]; ?></p>
            <p class="para">Property Status : <?php echo $row["property_status"]; ?></p>
            <p class="para">Type : <?php echo $row["type"]; ?></p>
            <p class="para">Sub Type : <?php echo $row["sub_type"]; ?></p>
        </div>
        <div class="card-footer">
           <?php echo  " <a href='pDetails.php?id= $row[id]'> read more</a>";?>
        </div>
    </div>
<?php }}?>
      
   
      </div>


</body>

</html>
