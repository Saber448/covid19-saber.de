<?php
//php script for login page
if(isset($_POST['email']) && isset($_POST['password']))//check if there is a post to login
{
	require_once 'dbconnexion.php';//call database connection

   
    
  
    $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars(md5($_POST['password'])));
    
    if($email !== "" && $password !== "")
    {//query to get data from database
		$sql = "SELECT count(*) as total,role FROM users where email = '".$email."' and password = '".$password."'";
		$db->query($sql);
		$result = $db->query($sql);
	    $row = $result->fetch_assoc();
        $count = $row['total'];
		$role = $row['role'];
		
        if($count!=0) 
        {
			
			session_start();
           $_SESSION['email'] = $email;
		   $_SESSION['role'] = $role;
		     if($role ==  'doctor' ){
			
           header('Location: doctor/index.php');
			 }
			   if($role ==  'admin' ){
			
           header('Location: admin/index.php');
			 }
			 if($role ==  'patient' ){
				 header('Location: patient/index.php');
			 }
        }
		
		else
        {
           header('Location: login.php?erreur'); 
        }
		}
		
		else
        {
           header('Location: login.php?erreur'); 
        }
		
mysqli_close($db); 
	}
        else
        {
           header('Location: login.php?erreur'); 
        }
   
	

?>