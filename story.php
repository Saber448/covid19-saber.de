<!-- call the header section-->
<?php include 'header.php';

require 'dbconnexion.php';//call database connection
if(isset($_GET['id'])){//check if there is an id in link

	$id=$_GET['id'];
       $sql ="SELECT *,DATE_FORMAT(date,'%d/%m/%Y') AS date FROM stories where id='$id'";//query to get data from database
       $result = $db->query($sql);
       $row = $result->fetch_assoc();  
       $fname =$row['fname'];
		$date =$row['date'];
		$content =$row['content'];
		$title =$row['title'];
	  $file =$row['file'];
	  $type_file=$row['type_file'];
	  
	  $sqlcount ="select count(*) as total from comments where storyid='$id'";//query to get comments count from database
     $resultcount = $db->query($sqlcount);
$rowcount = $resultcount->fetch_assoc();     
$recordscount = $rowcount['total'];
}
	
?>




    <div class="hero-v1 herosp">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center mx-auto">
            <span class="d-block subheading"><?php echo $date; ?>, by <span class="byusercls"><?php echo htmlspecialchars($fname); ?></span></span>
            <h1 class="heading mb-3"><?php echo htmlspecialchars($title); ?></h1>
          </div>
          
        </div>
      </div>
    </div>


    <!-- MAIN -->




    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
            <div class="row mb-5">
              <div class="col-lg-6 fullwidth">
				<?php
				if( $type_file=="image"){
               echo' <img src="images/'.htmlspecialchars($file).'" alt="stroy picture" class="img-fluid storypic">';
				}
				else{
				 echo'<video class="img-fluid storypic"  controls>
				<source src="images/'.htmlspecialchars($file).'" type="video/mp4">
				</video>';
				}
				?>
                </div>
               
                </div>
                <p class="lead">
				<?php echo htmlspecialchars($content); ?>
				</p>


                <div class="pt-5" id="comments">
				   <?php
             
				 if(isset($_GET['s'])){
                   
                        echo "<p style='color:green'>Your comment has been successfully sent</p>";
                }
                ?>
                  <h3 class="mb-5"><?php echo $recordscount; ?> Comments</h3>
                  <ul class="comment-list">
				  <?php

include "dbconnexion.php"; 
$records = mysqli_query($db,"select *,DATE_FORMAT(date,'%d/%m/%Y - %H:%i') AS date from comments where storyid ='$id' order by date desc" ); 
while($data = mysqli_fetch_array($records))
{
?>
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/avaterlogin.png" alt="Free Website Template by Free-Template.co">
                      </div>
                      <div class="comment-body">
                        <h3><?php echo htmlspecialchars($data['fname']); ?></h3>
                        <div class="meta"><?php echo $data['date']; ?></div>
                        <p><?php echo htmlspecialchars($data['content']); ?></p>
                      </div>
                    </li>
					  <?php
}
?> <?php mysqli_close($db);  ?>	
                  </ul>
                  <!-- END comment-list -->

                  <div class="comment-form-wrap pt-5">
				
                    <h3 class="mb-5">Leave a comment</h3>
                    <form action="addcomment.php" method="post" class="p-5 bg-light">
                      <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="fname" name="fname" required>
                      </div>
                      <div class="form-group">
                        <label for="website">Last name</label>
                        <input type="text" class="form-control" id="lname" name="lname">
                      </div>

                      <div class="form-group">
                        <label for="message">Your comment *</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control" required></textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Post Comment" class="btn btn-primary" name="add">
                      </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"> 

                    </form>
                  </div>

                </div>

              </div>
              <div class="col-md-4 sidebar">
			  
           <div class="sidebarchild">
            <h2 class="mb-4 section-heading">What is Coronavirus?</h2>
            <p>Coronaviruses are a type of virus. There are many different kinds, and some cause disease. A coronavirus identified in 2019, SARS-CoV-2, has caused a pandemic of respiratory illness, called COVID-19.</p>
            <ul class="list-check list-unstyled mb-5">
              <li>COVID-19 is the disease caused by SARS-CoV-2, the coronavirus that emerged in December 2019.</li>
              <li>COVID-19 can be severe, and has caused millions of deaths around the world as well as lasting health problems in some who have survived the illness.</li>
              <li>The coronavirus can be spread from person to person. It is diagnosed with a laboratory test.</li>
              <li>COVID-19 vaccines have been authorized for emergency use by the U.S. Food and Drug Administration, and vaccination programs are in progress across the U.S. and in many parts of the world.</li>
              <li>Prevention involves physical distancing, mask-wearing, hand hygiene and staying away from others if you feel sick</li>
          
		  </ul>
            <p><a href="https://www.who.int/health-topics/coronavirus#tab=tab_1" class="btn btn-primary">Learn more</a></p>
          </div>
              </div>
            </div>
          </div>
        </div>




<!-- call the footer section-->
<?php include 'footer.php';?>
