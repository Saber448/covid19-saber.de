<?php
require 'dbconnexion.php';//call database connection
if(isset($_POST["add"]))  //check if there is a post to add comment
{
	   $fname =$_POST['fname'];
		$lname =$_POST['lname'];
		$email =$_POST['email'];
		$subject =$_POST['subject'];
		$message =$_POST['message'];

		
$sql_query = "INSERT INTO contact (fname,lname,email,subject,message) VALUES ('$fname','$lname','$email','$subject','$message')"; //query store a message to database
$db->query($sql_query);

 header('Location: contact.php?s');

}



?>