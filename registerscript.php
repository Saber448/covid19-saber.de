<?php
require 'dbconnexion.php';//call database connection
if(isset($_POST["add"])) //check if there is a post to add user
{
		$role =$_POST['role'];
	   $fname =$_POST['fname'];
		$lname =$_POST['lname'];
		$email =$_POST['email'];
		$address =$_POST['address'];
		$phone =$_POST['phone'];
		$password =$_POST['password'];
	 
 $sql = "select count(*) as total from users WHERE email='$email'";//query to check if email already exist in database
     $db->query($sql);
	  $result = $db->query($sql);
       $row = $result->fetch_assoc();
         $emailerror =$row['total'];



	if($emailerror!=1){
		if( $_POST["passwordconfir"] == $_POST["password"]) {
$sql_query = "INSERT INTO users (fname,lname,email,address,phone,password,role)
 VALUES ('$fname','$lname','$email','$address','$phone','" . md5($password) . "','$role')"; //query store a user to database
$db->query($sql_query);

 header('Location: register.php?sucess');
		}
		else{
	
	header('Location: register.php?erreurpass');
	}
}
 
else{
	
	header('Location: register.php?erreur');
	}

}

?>