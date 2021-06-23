<!-- call the header section-->
<?php include 'header.php';

require 'dbconnexion.php';//call database connection
if(isset($_GET['id'])){//check if there is an id in link

	$id=$_GET['id'];
       $sql ="SELECT *,DATE_FORMAT(date,'%d/%m/%Y') AS date FROM alerts where id='$id'";//query to get data from database
       $result = $db->query($sql);
       $row = $result->fetch_assoc(); 
	   
       $fname =$row['fname'];
		$date =$row['date'];
		$content =$row['content'];
		$title =$row['title'];
	  $email =$row['email'];
	  $medicalID=$row['medicalID'];
	  	  $phone =$row['phone'];
	  	  $address =$row['address'];
		  	  	  $image =$row['image'];



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
				if( $image!=""){
               echo' <img src="images/'.htmlspecialchars($image).'" alt="alert picture" class="img-fluid storypic">';
				}
				else{
				 echo'<img src="images/covidalert.jpg" alt="alert picture" class="img-fluid storypic">';
				}
				?>
                </div>
                </div>
				
                <p class="lead">
				<?php echo htmlspecialchars($content); ?>
				</p>



              </div>
              <div class="col-md-4 sidebar">
			  
           <div class="sidebarchild">
            <h2 class="mb-4 section-heading">Doctor contact :</h2>
            <ul class="list-check list-unstyled mb-5">
              <li>Name : <b><?php echo htmlspecialchars($fname); ?></b></li>
              <li>Email : <b><?php echo htmlspecialchars($email); ?></b></li>
              <li>Phone number : <b><?php echo htmlspecialchars($phone); ?></b></li>
              <li>Adress : <b><?php echo htmlspecialchars($address); ?></b></li>
              <li>Medical ID : <b><?php echo htmlspecialchars($medicalID); ?></b></li>
          
		  </ul>
          </div>
              </div>
            </div>
          </div>
        </div>



<!-- call the footer section-->
<?php include 'footer.php';?>
