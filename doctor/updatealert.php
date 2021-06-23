<?php
require '../dbconnexion.php';

if(isset($_GET['id'])){

    $id =$_GET['id'];
       $sql ="SELECT * FROM alerts where id='$id'";
       $result = $db->query($sql);
       $row = $result->fetch_assoc();
       $title = $row['title'];
       $medicalID = $row['medicalID'];
       $content = $row['content'];

}

if(isset($_POST['edit']))
{
	$id=$_GET['id'];
	   $title = $_POST['title'];
       $medicalID = $_POST['medicalID'];
       $content = $_POST['content'];
      $sql_query = "UPDATE alerts SET title='$title',medicalID='$medicalID',content='$content' WHERE id='$id'";
      $db->query($sql_query);
    	 echo "<meta http-equiv='refresh' content='0'>";

 

}

if(isset($_POST['delete']))
{
  $id=$_GET['id'];
    $sql_query = "DELETE from alerts WHERE id='$id'";
  
      $db->query($sql_query);
      header('Location:index.php');
exit;
}



?>
<head>

<title>Admin  - Update or Delete alert</title>

<!-- Custom style for this template-->
<link href="../dash/css/singlepagecss.css" rel="stylesheet" type="text/css">

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
<?php include 'header.php';?>
<div class="container-fluid">
<div class="row">

<!-- Area Chart -->
<div class="col-xl-8 col-lg-7 singlepagefullwodthdiv">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Update alert</h6>
      
    </div>
    <!-- Card Body -->
    <div class="card-body">
    <div class="formdivsinglepage">
              <form  action="" method="post" enctype="multipart/form-data">
                               <span class="spantitle">Title *</span>
                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" required>
							<span class="spantitle">Medical ID *</span>
                            <input type="text" name="medicalID" class="form-control" value="<?php echo $medicalID; ?>" required>
                     <span class="spantitle">Description *</span>
                    <textarea id="content" name="content" rows="4"  class="form-control textareapushcls" required><?php echo $content; ?></textarea>
                    
                            <div class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <input type="submit"  name="edit" class="submitupdatebtn" value="Confirm"  onClick="conf()">
</div>
                  <div class="btn btn-danger btn-icon-split divdelete">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                    <span class="text" onclick="document.getElementById('id01').style.display='block'">Delete</span>
</div>

                    </form>
            
</div>
    </div>
  </div>
</div>


</div>


</div>


<div id="id01" class="modaldelete">
  <span onclick="document.getElementById('id01').style.display='none'" class="closedelete" title="Close Modal">×</span>
  <form class="modal-contentdelete" action=""  method="post" enctype="multipart/form-data">
    <div class="containerdelete">
      <h1>Delete alert</h1>
      <p>Are you sure you want to delete this alert?</p>
    
      <div class="clearfixdelete">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtndelete"><i class="fas fa-arrow-left"></i> Cancel</button>
        <button type="submit"  name="delete" class="submitdeletebtn" ><i class="fas fa-trash"></i> Delete</button>

      </div>
    </div>
	</div>
  </form>


<script>
var modal = document.getElementById('id01');

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<script>
function conf()
{
alert("Your alert has been successfully updated");
}
</script>
<?php include 'footer.php';?>
