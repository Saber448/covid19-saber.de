<?php
//php script for store a comment to database

if(isset($_POST["add"])) //check if there is a post to add comment
{
			require 'dbconnexion.php';//call database connection
	
		$id=$_POST['id'];
	  $fname =$_POST['fname'];
      $lname = $_POST['lname'];
      $content = $_POST['content'];
		
      $sql_query = "INSERT INTO comments (fname,lname,content,storyid) VALUES ('$fname','$lname','$content','$id')";//query store a comment to database
      $db->query($sql_query);
	   header('Location: story.php?id='.$id.'&s#comments');

   
}
 
?>    
