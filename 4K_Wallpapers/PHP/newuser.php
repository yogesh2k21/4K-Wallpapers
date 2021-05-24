<?php
$fn=filter_input(INPUT_POST,'fn');
$ln=filter_input(INPUT_POST,'ln');
$email=filter_input(INPUT_POST,'E');
$gen=filter_input(INPUT_POST,'gender');
$pass=filter_input(INPUT_POST,'Password');
$rpass=filter_input(INPUT_POST,'Rpassword');
if (isset($_POST['register'])){
$host="localhost";
$dbusername="root"; 
$dbpassword="";
$dbname="accounts";
//  create connection.
$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
    die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
} 
else{
    if($pass==$rpass){  //comparing passwords
    $sql= "INSERT INTO data(FirstName,LastName,Email,Gender,Password) values ('$fn','$ln','$email','$gen','$pass')";
    if($conn->query($sql)){
        sleep(1);  
        header ("location: ../webpage/SIGNIN.php"); 
    }
    else{
        echo "ERROR: ".$sql."<br>".$conn->error; 
    }
    $conn->close();
}
else { //if password is not same than it will redirect the page to createacoount.html
    echo "<script>alert('Please Enter same Password!');</script>";  
    echo "<script>setTimeout(\"location.href = '../webpage/CREATEACCOUNT.php';\",0);</script>";
}
}
}
?>