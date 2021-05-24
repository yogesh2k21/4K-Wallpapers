<?php 
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'accounts');
  $password = "";
  $email = "";
  if (isset($_POST['register'])){
  	$email = $_POST['Email'];
  	$password = $_POST['Password'];

  	$sql_e = "SELECT * FROM data WHERE Email='$email'"; 
  	$sql_p = "SELECT * FROM data WHERE Password='$password'";
  	$res_e = mysqli_query($db, $sql_e);
    $res_p = mysqli_query($db, $sql_p);

    $userid="SELECT FirstName from data where Email='$email'";
    $id = mysqli_query($db,$userid);
    $usernaam=mysqli_fetch_assoc($id);
    
      
    if(mysqli_num_rows($res_e)==0){
            echo "<script>alert('No Account Exists!');</script>";  
            echo "<script>setTimeout(\"location.href = '../webpage/SIGNIN.php';\",0);</script>";
    }
  
    if(mysqli_num_rows($res_e)>0){
        if(mysqli_num_rows($res_p)==0){
            echo "<script>alert('Access Denied Beacause of Wrong Password.');</script>";  
            echo "<script>setTimeout(\"location.href = '../webpage/SIGNIN.php';\",0);</script>";            	
        }
    }

    if(mysqli_num_rows($res_e) > 0){
        if(mysqli_num_rows($res_p)>0){
        $_SESSION['Profile']=$usernaam['FirstName'];
        header("location:../webpage/HOME.php");
        }
    }
}  
?>