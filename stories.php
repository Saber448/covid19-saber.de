<!-- call the header section-->
<?php include 'header.php';?>




    <div class="hero-v1 herosp">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center mx-auto">
            <span class="d-block subheading">Stories</span>
          </div>
          
        </div>
      </div>
    </div>


    <!-- MAIN -->




    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4 section-heading">Latest People's Stories with Coronavirus </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
          </div>
        </div>

        <div class="row">
			<?php

include "dbconnexion.php"; 
$sql ="select count(*) as total from stories";
     $result = $db->query($sql);
$row = $result->fetch_assoc();     
$recordscount = $row['total'];
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = $_GET['page'];
}
else{
    $currentPage = 1;
}

$perPage = 9;  
$pagestotal = ceil($recordscount / $perPage);
$premier = ((int)$currentPage * $perPage) - $perPage;
 

  
$records = mysqli_query($db,"select *,DATE_FORMAT(date,'%d/%m/%Y') AS date from stories where statut='confirmed' order by date desc LIMIT $premier, $perPage" ); 

while($data = mysqli_fetch_array($records))
{
	 $sqlcount ="select count(*) as total from comments where storyid=".$data['id']."";
     $resultcount = $db->query($sqlcount);
$rowcount = $resultcount->fetch_assoc();     
$commentscount = $rowcount['total'];
?>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
            <div class="post-entry">
              <a href="story.php?id=<?php echo $data['id']; ?>" class="thumb">
                <span class="date"><?php echo $data['date']; ?></span>
               	<?php
				if( $data['type_file']=="image"){
               echo' <img src="images/'.htmlspecialchars($data["file"]).'" alt="Image" class="img-fluid">';
				}
				else{
				 echo' <figure class="img-play-vid">
              <img src="images/video.jpg" alt="Image" class="img-fluid">
              <div class="absolute-block d-flex">
                <span class="btn-play">
                  <span class="icon-play"></span>
                </span>
              </div>
            </figure>';
				}
				?>
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span><?php echo htmlspecialchars($data['fname']); ?></span>
                </a>
                <a href="story.php?id=<?php echo $data['id']; ?>#comments">
                  <span class="icon-comment"></span>
                  <span><?php echo $commentscount; ?>  Comments</span>
                </a>
              </div>
              <h3><a href="story.php?id=<?php echo $data['id']; ?>"><?php echo htmlspecialchars($data['title']); ?></a></h3>
            </div>
          </div>
		  <?php
}
?> <?php mysqli_close($db);  ?>	
        </div>

  
		 <div class="row <?php echo ($recordscount <= $perPage) ? "hiddenpagi" : "" ?>" >
          <div class="col-lg-12 text-center">
            <div class="custom-pagination">
			 <?php for($page = 1; $page <= $pagestotal; $page++): ?>
			<a href="stories.php?page=<?php echo $page; ?>" class="<?php echo ($currentPage == $page) ? "active" : "" ?>"><?php echo $page ?></a>
			    <?php endfor ?>
            </div>
          </div>
        </div>
      </div>
    </div>




<!-- call the footer section-->
<?php include 'footer.php';?>
