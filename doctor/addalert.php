
<head>

<title>Admin  - Add Category</title>

<!-- Custom style for this template-->
<link href="../dash/css/singlepagecss.css" rel="stylesheet" type="text/css">

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
<?php include 'header.php';

require '../dbconnexion.php';

if(isset($_POST['add']))
{
	  $sqluser ="select *  from users where email='$useremail'";
     $result = $db->query($sqluser);
$row = $result->fetch_assoc();     
$fname = $row['fname'];
  $address = $row['address'];
$phone = $row['phone'];
    
      $content = $_POST['content'];
	        $title = $_POST['title'];
	        $medicalID = $_POST['medicalID'];
			
if(isset($_FILES['Newimage'])){
	   $image = $_FILES['Newimage']['name'];
}

      $sql_query = "INSERT INTO alerts (fname,address,phone,content,title,medicalID,email,image)
	  VALUES ('$fname','$address','$phone','$content','$title','$medicalID','$useremail','$image')";
      $db->query($sql_query);
   
  

if(isset($_FILES['Newimage'])){
  $errors= array();
  $file_name = $_FILES['Newimage']['name'];
  $file_size =$_FILES['Newimage']['size'];
  $file_tmp =$_FILES['Newimage']['tmp_name'];
  $file_type=$_FILES['Newimage']['type'];
 
  if($file_size > 2097152){
     $errors[]='File Size must be Under 2MB';
  }
  
  if(empty($errors)==true){
     move_uploaded_file($file_tmp,"../images/".$file_name);
 

  }
  else{
     print_r($errors);
  }
}
  }
?>

<div class="container-fluid">
<div class="row">

<div class="col-xl-8 col-lg-7 singlepagefullwodthdiv">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Add Alert</h6>
      
    </div>
    <!-- Card Body -->
    <div class="card-body">
    <div class="formdivsinglepage">
                    <form  action="" method="post" enctype="multipart/form-data">
					
                            <span class="spantitle">Image</span>
                            <input type="file" name="Newimage"  class="form-control">
 <span class="spantitle">Title *</span>
                            <input type="text" name="title"  class="form-control" placeholder="Example : there is no more beds for intensive care or oxygen " required>
 
 <span class="spantitle">Medical ID *</span>
                            <input type="text" name="medicalID"  class="form-control" required>

                    <span class="spantitle">Description *</span>
                    <textarea id="content" name="content" rows="4"  class="form-control textareapushcls" required></textarea>
                    
 

		 <br>
                            <div class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <input type="submit"  name="add" class="submitupdatebtn" value="Add Alert" onClick="conf()">
</div>
                 

                    </form>
            
</div>
    </div>
  </div>
</div>


</div>


</div>



</div>
<script>
function conf()
{
alert("Success , alert has been added");
}
</script>
<?php include 'footer.php';?>
