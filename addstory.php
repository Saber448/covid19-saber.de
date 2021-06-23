<!-- call the header section-->
<?php include 'header.php';?>





    <div class="hero-v1 herosp">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center mx-auto">
            <h1 class="heading mb-3">Add your story with Coronavirus</h1>
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
               
				 if(isset($_GET['sucess'])){
                   
                        echo "<p style='color:green'>Your account has been successfully created</p>";
                }
                ?>
            <form id="ajax-upload-form" enctype= "multipart/form-data">
			<div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="ajax_file">Image or Video *</label>
                    <input type="file" id="ajax_file" name="ajax_file" class="file-input form-control" required>
                  </div>
                </div>
              </div>

			<div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="title">Story title *</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="content">Describe your story *</label>
                    <textarea name="content" id="content" class="form-control" cols="30" rows="10" required></textarea>
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
                    <label for="lname">Last name</label>
                    <input type="text" id="lname" name="lname" class="form-control" >
                  </div>
                </div>
              </div>
			  <br>
              <div class="row">
                <div class="col-lg-6">
                  <input type="submit" class="btn btn-primary" value="Post your story" name="submit">
				  				  <div class="progress-container"></div>
                </div>
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>
	<!-- call the footer section-->
	<?php include 'footer.php';?>
<script src="js/progress.js"></script><!-- call the progress script to show progress while uploading file-->

<script src="js/jquery-1.9.1.js"></script>
 <script>
       $(function () {

        $('#ajax-upload-form').on('submit', function (e) {<!-- Execute the form post with ajax-->

          e.preventDefault();

          $.ajax({
            url: 'addstoryscript.php',
            method:'POST',
            data: new FormData(this),
            contentType: false,
            cache:false,
            processData:false,
            success: function (data) {
            }
          });

        });

      });
    </script>
