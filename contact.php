<!-- call the header section-->
<?php include 'header.php';?>





    <div class="hero-v1 herosp">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center mx-auto">
            <span class="d-block subheading">Contact</span>
            <h1 class="heading mb-3">Get In Touch</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel a, nulla incidunt eaque sit praesentium porro consectetur optio!</p>
          </div>
          
        </div>
      </div>
    </div>


    <!-- MAIN -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
		   <?php
               
				 if(isset($_GET['s'])){
                   
                        echo "<p style='color:green'>Your message has been successfully sent</p>";
                }
                ?>
            <form action="contactscript.php" method="post">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="fname">First name *</label>
                    <input type="text" id="fname" name="fname" class="form-control" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="lname">Last name</label>
                    <input type="text" id="lname" name="lname" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="text" id="email" name="email" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <input type="submit" class="btn btn-primary" value="Send Message" name="add">
                </div>
              </div>

            </form>
          </div>

          <div class="col-lg-5 ml-auto">
            <h3 class="mb-3 side-title">Quick info</h3>
            <div class="quick-contact">

              <div class="d-flex">
                <span class="icon-room"></span>
                <address>
                  Fake street, 3929, London
                </address>
              </div>
              <div class="d-flex">
                <span class="icon-phone"></span>
                <a href="#">+1 291 2902 392</a>
              </div>
              <div class="d-flex">
                <span class="icon-envelope"></span>
                <a href="#">info@mydomain.com</a>
              </div>
              <div class="d-flex">
                <span class="icon-globe"></span>
                <a href="#">https://mywebsite.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- call the footer section-->
<?php include 'footer.php';?>
