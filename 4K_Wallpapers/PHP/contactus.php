<?php 
  $db = mysqli_connect('localhost', 'root', '', 'accounts');
  $name="";
  $email="";
  $txt="";
  if (isset($_POST['contactus'])){
    $email=$_POST['email'];
    $name=$_POST['name'];
    $txt=$_POST['msg']; 
  	$sql_e="INSERT INTO contactus(Name,Email,message) values ('$name','$email','$txt')";
    $result=mysqli_query($db, $sql_e);  

  	header ("location: ../webpage/HOME.php");   
}  
?> 