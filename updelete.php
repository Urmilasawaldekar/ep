<?php 
include "connection.php";?>
<?php
$id =$_GET['id'];

?>
<?php




//$cid=$_GET['id'];

$sql = "DELETE FROM `property` WHERE id='$id' ";
//print_r($sql);
if (mysqli_query($conn, $sql)) {
  
    echo "
    <script>
              alert('Record deleted successfully');
              window.location.href='view.php';
              </script>";
          
} else {
echo "
    <script>
              alert('Record deleted successfully');
              window.location.href='view.php';
              </script>";
}

mysqli_close($conn);

?>