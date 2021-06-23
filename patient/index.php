
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

   <!-- call the header section-->
 <?php include 'header.php';?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Probability of virus</h6>
                
                </div>
                <div class="card-body">
				    <div class="formdivsinglepage">
				
 <span class="spantitle">High Fever</span>
                        <span id="valuehf"></span>
<div class="slidecontainer">
  <input type="range" min="0" max="100" value="0" class="sliderrange" id="Hfinput">
</div>
<hr>
 <span class="spantitle">Cough</span>
                        <span id="valueCough"></span>
<div class="slidecontainer">
  <input type="range" min="0" max="100" value="0" class="sliderrange" id="vCoughinput">
</div>
<hr>
 <span class="spantitle">Sore Troath</span>
                        <span id="valueSt"></span>
<div class="slidecontainer">
  <input type="range" min="0" max="100" value="0" class="sliderrange" id="Stinput">
</div>
<hr>
 <span class="spantitle">Headache</span>
                        <span id="valueHeadache"></span>
<div class="slidecontainer">
  <input type="range" min="0" max="100" value="0" class="sliderrange" id="Headacheinput">
</div>
		 <br><hr>
                            <div class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
					<a class="strlinka" href="#" data-toggle="modal" data-target="#testresult" onclick="getresult()">
                Show test result
              </a>
                   
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
	  
   <!-- Test result Modal-->
  <div class="modal fade" id="testresult" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Result</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
		Your test result is: <span id="resultid"></span>
		<hr>
		<div id="ifone">
              <div class="coldo">
                <h3>You should do</h3>
                <ul class="listdo">
                  <li>Stay at home</li>
                  <li>Wear mask</li>
                  <li>Use Sanitizer</li>
                  <li>Disinfect your home</li>
                  <li>Wash your hands</li>
                  <li>Frequent self-isolation</li>
                </ul>
              </div>
              <div class="coldont">
                <h3>You should avoid</h3>
                <ul class="listdont">
                  <li>Avoid infected people</li>
                  <li>Avoid animals</li>
                  <li>Avoid handshaking</li>
                  <li>Aviod infected surfaces</li>
                  <li>Don't touch your face</li>
                  <li>Avoid droplets</li>
                </ul>
              </div>
          </div>
        <div id="iftwo">
              <div class="coldo">
                <h3>You should do</h3>
                <ul class="listdo">
                  <li>Visit your doctor</li>
				  <li>Stay in touch with your doctor.</li>
				   <li>Self-isolation</li>
                  <li>Take care of yourself. Get plenty of rest. Stay hydrated by drinking lots of fluids, like water or herbal tea</li>
                  <li>Monitor your symptoms carefully</li>
                  <li>Cover your cough and sneezes</li>
                 <li>Wash your hands often.</li>
                </ul>
              </div>
              <div class="coldont">
                <h3>You should avoid</h3>
                <ul class="listdont">
                  <li>do not go to work, school or public places – work from home if you can</li>
				  <li> do not go on public transport or use taxis</li>
				   <li>do not go out to get food and medicine – order it online or by phone, or ask someone to bring it to your home</li>
				   <li>do not have visitors in your home, including friends and family – except for people providing essential care</li>
				   <li>do not go out to exercise – exercise at home or in your garden, if you have one</li>
                  <li>Avoid animals</li>
                </ul>
              </div>
          </div>
		</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
          
  
        </div>
      </div>
    </div>
  </div>
        <!-- call the footer section-->
 <?php include 'footer.php';?>

 


