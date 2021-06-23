<?php


//php script to upload file into images folder
if($_FILES && !$_FILES['ajax_file']['error']){
    $allowed_types = ["image","video"];
    $type = substr($_FILES['ajax_file']['type'],0,5);
    if(in_array($type,$allowed_types)){
	
        move_uploaded_file($_FILES['ajax_file']['tmp_name'],"images/".$_FILES['ajax_file']['name']);
    }
}
 
?>    
