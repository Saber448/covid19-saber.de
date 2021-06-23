<!-- call the header section-->
<?php include 'header.php';?>





    <div class="hero-v1 herosp">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center mx-auto">
            <span class="d-block subheading">Register</span>
            <h1 class="heading mb-3">Creat account</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel a, nulla incidunt eaque sit praesentium porro consectetur optio!</p>
          </div>
          
        </div>
      </div>
    </div>


    <!-- MAIN -->

    <div class="site-section ">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 centercls">
		  <?php
                if(isset($_GET['erreur'])){
                    
                        echo "<p style='color:red'>This email is already in use, please try a different one.</p>";
				
				}
				  if(isset($_GET['erreurpass'])){
                    
                        echo "<p style='color:red'>Confirmation password does not match</p>";
				
				}
				 if(isset($_GET['sucess'])){
                   
                        echo "<p style='color:green'>Your account has been successfully created</p>";
                }
                ?>
            <form action="registerscript.php" method="post">
			 <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="email">You are?</label>
                   <select name="role" class="form-control" onchange="hideDiv('DivmedicalID', this)" required>
  <option value="doctor">Doctor</option>
  <option value="patient">Patient</option>
</select>

              
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="fname">First name *</label>
                    <input type="text" id="fname" name="fname" class="form-control" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="lname">Last name *</label>
                    <input type="text" id="lname" name="lname" class="form-control" required>
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
                    <label for="adress">Address *</label>
                    <input type="text" id="address" name="address" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="phone">Phone number *</label>
                    <input type="text" id="phone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" required>
                  </div>
                </div>
              </div>
				
				
			  <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" id="password" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                  </div>
                </div>
              </div>
			  <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="passwordconfir">Password confrim *</label>
                    <input type="password" id="passwordconfir" name="passwordconfir" class="form-control"  required>
                  </div>
                </div>
              </div>
			 
              <div class="row">
                <div class="col-lg-6">
                  <input type="submit" class="btn btn-primary" value="Create account" name="add">
                </div>
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>
<!-- call the footer section-->
<?php include 'footer.php';?>
