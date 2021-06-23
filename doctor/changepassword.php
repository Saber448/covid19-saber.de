
<head>

<title>Admin  - Change Password</title>

<!-- Custom fonts for this template-->
<link href="css/singlepagecss.css" rel="stylesheet" type="text/css">

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
      <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
      
    </div>
    <!-- Card Body -->
    <div class="card-body">
<div class="container">
    
    <div class="row">
        <div class="col-md-6">
                <div class="panel panel-default">
                
                <div class="panel-body">
<div>  <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1){
                        echo "<p style='color:red'>Password and confirmation password do not match </p>";
				}
				 if($err==2){
                        echo "<p style='color:red'>incorrect password</p>";
					}
                }
				 if(isset($_GET['sucess'])){
                    $err = $_GET['sucess'];
                   
                        echo "<p style='color:green'>Password was successfully changed</p>";
                }
                ?></div>
                    <form method="post" action="updatepassword.php">
                        <div class="form-group">
                            <input type="password" name="currentPassword" class="form-control" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="newPassword" class="form-control" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm the password">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnChangePassword" class="btn btn-primary" value="Confirm"/>
                        </div>
                    </form>
                </div>
                </div>
        </div>
    </div>
</div>
           </div>
                </div>
        </div>
    </div>
</div>


<?php include 'footer.php';?>
