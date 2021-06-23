
<!DOCTYPE html>
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><meta charset="UTF-8" />
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />

<meta name="viewport" content="width=device-width" />
<title>
	Domaine - Login
</title>
<link rel="icon" type="image/png" href="images/avaterlogin.png" />
<link rel="stylesheet" type="text/css" href="css/csslogin.css" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

</head>
<body>
    <form method="post" action="loginscript.php" id="form1">

    <div>
       
         <div id="loginboxID" class="loginbox">
    <img src="images/avaterlogin.png" class="avatar">
              
        <div class="bod">
		  <?php
                if(isset($_GET['erreur'])){
                   
                        echo "<p style='color:red'>Incorrect email or password.</p>";
					
					 
                }
                ?>
           <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
        <input class="form-control" name="email" placeholder="Email" type="email" required>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="password" placeholder="Password" type="password" required>
    </div>
          
              <input type="submit" name="cnxbtn" value="Login" id="cnxbtn" />
			  
           <div class="lsseparatorcls"><span class="separatorcls">OR</span></div>
            <div class="signupdivcls">
                    <a href="register.php">Creat account</a>
                  </div>
        
            </div>
           
            <p class="footertextcopyright">Copyright © 2021 domaine.com. All right reserved.</p>
        </div>
         </div> 

      

    </form>
</body>
</html>
