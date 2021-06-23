<?php
session_start();
$email = $_SESSION["email"];
require '../dbconnexion.php';
if(isset($_POST['btnChangePassword']))
{
$result = mysqli_query($db,"SELECT * from users WHERE email='" . $email . "'");
$row=mysqli_fetch_array($result);

if( md5($_POST["currentPassword"]) == $row["password"]){
	
if($_POST["newPassword"] == $_POST["confirmPassword"] ) {
mysqli_query($db,"UPDATE users set password='" . md5($_POST["newPassword"]) . "' WHERE email='" . $email . "'");
 header('Location: changepassword.php?sucess=1');
} 
else{
	header('Location: changepassword.php?erreur=1');
}
}
else{
	header('Location: changepassword.php?erreur=2');
}
}
?>