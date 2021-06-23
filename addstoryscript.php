<?php
//php script for store a story to database

if($_POST) //check if there is a post to add story
{
		require 'dbconnexion.php';//call database connection
   
	  $title =$_POST['title'];
      $content = $_POST['content'];
	  $type_file = substr($_FILES['ajax_file']['type'],0,5);
	   $file = $_FILES['ajax_file']['name'];
	   $fname = $_POST['fname'];
      $lname = $_POST['lname'];
		//query store a story to database
      $sql_query = "INSERT INTO stories (fname,lname,title,content,	file,type_file,statut) VALUES ('$fname','$lname','$title','$content','$file','$type_file','pending')";
      $db->query($sql_query);
   
   
}
 
?>    
