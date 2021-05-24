<?php 
  $db = mysqli_connect('localhost', 'root', '', 'accounts');
  $name="";
  $email="";
  if (isset($_POST['subscribe'])){
    $email=$_POST['Email'];
    $name=$_POST['name'];
      
  	$sql_e="INSERT INTO subscribe(Name,Email) values ('$name','$email')";
    $result=mysqli_query($db, $sql_e);  

  	header ("location: ../webpage/HOME.php");   
}  
?> 