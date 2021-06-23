
<head>

<title>Admin  - Update or Delete alert</title>

<!-- Custom style for this template-->
<link href="../dash/css/singlepagecss.css" rel="stylesheet" type="text/css">

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
   <!-- call the header section-->
<?php include 'header.php';
require '../dbconnexion.php';

       $sql ="SELECT * FROM users where email='$useremail'";
       $result = $db->query($sql);
       $row = $result->fetch_assoc();
       $fname = $row['fname'];
       $lname = $row['lname'];
       $address = $row['address'];
		$phone = $row['phone'];

if(isset($_POST['edit']))
{
	   $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $address = $_POST['address'];
	   $phone = $_POST['phone'];
      $sql_query = "UPDATE users SET fname='$fname',lname='$lname',address='$address',phone='$phone' WHERE email='$useremail'";
      $db->query($sql_query);
echo "<meta http-equiv='refresh' content='0'>";
}



?>
<div class="container-fluid">
<div class="row">

<!-- Area Chart -->
<div class="col-xl-8 col-lg-7 singlepagefullwodthdiv">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Update profil</h6>
      
    </div>
    <!-- Card Body -->
    <div class="card-body">
    <div class="formdivsinglepage">
              <form  action="" method="post" enctype="multipart/form-data">
                               <span class="spantitle">First name *</span>
                            <input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>" required>
							  <span class="spantitle">Last name *</span>
                            <input type="text" name="lname" class="form-control" value="<?php echo $lname; ?>" required>
							  <span class="spantitle">Address *</span>
                            <input type="text" name="address" class="form-control" value="<?php echo $address; ?>" required>
							  <span class="spantitle">Phone*</span>
                            <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>" required>
							
                            <div class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <input type="submit"  name="edit" class="submitupdatebtn" value="Confirm"  onClick="conf()">
</div>
                 

                    </form>
            
</div>
    </div>
  </div>
</div>


</div>


</div>



  </form>


<script>
function conf()
{
alert("Your profil has been successfully updated");
}
</script>
   <!-- call the footer section-->
<?php include 'footer.php';?>
