<head>

<title>Admin  - Confirmed stories</title>

<!-- Custom fonts for this template-->
<link href="../dash/css/singlepagecss.css" rel="stylesheet" type="text/css">

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'header.php';?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All stories
</h1>
          </div>

     
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4 Countriesdivcss">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Stories</h6>
                 
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
$sql ="select count(*) as total from stories where statut='confirmed'";
     $result = $db->query($sql);
$row = $result->fetch_assoc();     
$recordscount = $row['total'];
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = $_GET['page'];
}
else{
    $currentPage = 1;
}

$perPage = 15;  
$pagestotal = ceil($recordscount / $perPage);
$premier = ((int)$currentPage * $perPage) - $perPage;
 

  
	
$records = mysqli_query($db,"select *, DATE_FORMAT(date,'%d/%m/%Y') AS date from stories where statut='confirmed' order by date desc LIMIT $premier, $perPage" ); 
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
			     <div class="row <?php echo ($recordscount <= $perPage) ? "hiddenpagi" : "" ?>" >
          <div class="col-lg-12 text-center">
            <div>
			 <?php for($page = 1; $page <= $pagestotal; $page++): ?>
			<a  href="confirmedstories.php?page=<?php echo $page; ?>" class="paginationlinkcss <?php echo ($currentPage == $page) ? "active" : "" ?>"><?php echo $page ?></a>
			    <?php endfor ?>
            </div>
          </div>
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

 

