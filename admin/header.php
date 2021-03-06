<?php
session_start();
 
if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
  header("location: ../login.php");
  exit;
}
else{
		if($_SESSION['role']=='admin'){
					$useremail =$_SESSION['email'];

        require '../dbconnexion.php';// Using database connection file here
       $sql ="SELECT * FROM users where email='$useremail'";// excute query  to get data
       $result = $db->query($sql);
       $row = $result->fetch_assoc();// fetch data from database
       $fname = $row['fname'];
	}
	else{
		header("location: ../login.php");
		exit;
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="../dashjsandcss/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../dashjsandcss/css/sb-admin-2.min.css" rel="stylesheet">


</head>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
      <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
	 <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
  <li class="nav-item ">
      <a class="nav-link" href="pendingstories.php">
        <i class="fas fa-fw fa-users"></i>
        <span>Pending stories</span></a>
    </li>
	 <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

	 <li class="nav-item ">
      <a class="nav-link" href="confirmedstories.php">
        <i class="fas fa-fw fa-users"></i>
        <span>Confirmed stories</span></a>
    </li>
	 <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

 <li class="nav-item ">
      <a class="nav-link" href="messages.php">
        <i class="fas fa-fw fa-envelope"></i>
        <span>Messages</span></a>
    </li>

	 
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>

        

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

         

      

          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $fname; ?></span>
              <img class="img-profile rounded-circle" src="../images/avaterlogin.png">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               <a class="dropdown-item" href="profil.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profil
              </a>
			                <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="changepassword.php">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Change Password
              </a>
              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
          </li>

        </ul>

      </nav>

      <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to go?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Select ???Logout??? below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a href='logout.php' class="btn btn-primary"><span>Logout</span></a>
          
  
        </div>
      </div>
    </div>
  </div>
