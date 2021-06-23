
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include 'header.php';?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color:#f31515!important;">Pending stories</div>
                      
                                 
                    <?php

   require '../dbconnexion.php';// Using database connection file here
       $sql ="SELECT count(*) as total FROM stories where statut='pending'";// excute query  to get data
       $result = $db->query($sql);
       $row = $result->fetch_assoc();// fetch data from database
       $totalps = $row['total'];
?>
  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalps; ?></div>


                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300" style="color:#f31515!important;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Confirmed stories</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                <?php

   require '../dbconnexion.php';// Using database connection file here
       $sql ="SELECT count(*) as total FROM stories where statut='confirmed'";// excute query  to get data
       $result = $db->query($sql);
       $row = $result->fetch_assoc();// fetch data from database
       $totalcs = $row['total'];
?>
  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalcs; ?></div>

                    </div>
                       
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x iconuserdash"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Number of doctors Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Number of doctors</div>
        <?php
   require '../dbconnexion.php';// Using database connection file here
       $sql ="SELECT count(*) as total FROM users where role='doctor'";// excute query  to get data
       $result = $db->query($sql);
       $row = $result->fetch_assoc();// fetch data from database
       $totald = $row['total'];
?>
  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totald; ?></div>

                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bullhorn fa-2x iconmoder"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			     <!-- Number of patients Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Number of patients</div>
        <?php
   require '../dbconnexion.php';// Using database connection file here
       $sql ="SELECT count(*) as total FROM users where role='patient'";// excute query  to get data
       $result = $db->query($sql);
       $row = $result->fetch_assoc();// fetch data from database
       $totalp = $row['total'];
?>
  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalp; ?></div>

                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bullhorn fa-2x iconmoder"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>






		     <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4 Countriesdivcss">

              <!-- Project Card Example -->
              <div class="card shadow mb-4 ">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary" style="color:#f31515!important;">PENDING STORIES</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle"  href="pendingstories.php" role="button" id="dropdownMenuLink" >
                       All
                    </a>

                  </div>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                   <thead>
                               <tr>
                      <th>ID</th>
					   <th>Name</th>
                      <th>Title</th>
					   <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                
                    <?php

include "../dbconnexion.php"; 

  
	
$records = mysqli_query($db,"select *, DATE_FORMAT(date,'%d/%m/%Y') AS date from stories where statut='pending' order by date desc limit 6" ); 
  if (mysqli_num_rows($records) == 0) {
    echo "<tr class='odd ifemptycls'><td valign='top' colspan='5' class='dataTables_empty'>No pending stories for now</td></tr>";
} 

while($data = mysqli_fetch_array($records))
{	
 
?>

  <tr>
  <td class="imgstory"><?php
if($data['type_file']=='image'){
	 echo '<img  src="../images/'.htmlspecialchars($data["file"]).'"; ?>';
}
else{
	 	 echo '<img  src="../images/video.jpg">';
}
 ?></td>
    <td><?php echo $data['fname']; ?></td>
    <td><span><?php echo $data['title']; ?></span></td>
    <td><span><?php echo $data['date']; ?></span></td>


    <td><a href="pendingstory.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-icon-split edittblcls" title="Edit">
                    <span class="icon text-white-50">
                      <i class="fas fa-eye"></i>
                    </span>
                 </a></td>

  </tr>	
<?php
}
?>
                  </tbody>
                </table>
                <?php mysqli_close($db);  ?>
              </div>
                </div>
              </div>

              

            </div>

          </div>
		        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4 Countriesdivcss">

              <div class="card shadow mb-4 ">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary" >CONFIRMED STORIES</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle"  href="confirmedstories.php" role="button" id="dropdownMenuLink" >
                       All
                    </a>

                  </div>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered"  width="100%" cellspacing="0">
                   <thead>
                               <tr>
                      <th>File</th>
						<th>Name</th>
                      <th>Title</th>
					   <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                
                    <?php

include "../dbconnexion.php"; 

  
	
$records = mysqli_query($db,"select *, DATE_FORMAT(date,'%d/%m/%Y') AS date from stories where statut='confirmed' order by date desc limit 6" ); 
  if (mysqli_num_rows($records) == 0) {
    echo "<tr class='odd ifemptycls'><td valign='top' colspan='5' class='dataTables_empty'>No stories for now</td></tr>";
} 

while($data = mysqli_fetch_array($records))
{	

?>

  <tr>
 <td class="imgstory"><?php
if($data['type_file']=='image'){
	 echo '<img  src="../images/'.htmlspecialchars($data["file"]).'"; ?>';
}
else{
	 	 echo '<img  src="../images/video.jpg">';
}
 ?></td>
    <td><?php echo $data['fname']; ?></td>
    <td><span><?php echo $data['title']; ?></span></td>
    <td><span><?php echo $data['date']; ?></span></td>


    <td><a href="confirmedstory.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-icon-split edittblcls" title="Edit">
                    <span class="icon text-white-50">
                      <i class="fas fa-eye"></i>
                    </span>
                 </a></td>

  </tr>	
<?php
}
?>
                  </tbody>
                </table>
                <?php mysqli_close($db);  ?>
              </div>
                </div>
              </div>

              

            </div>

          </div>


 

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
	  

      <?php include 'footer.php';?>

 


