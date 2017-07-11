<!DOCTYPE html>
<html>
<head>
	<title>Log In | Aguirre Star Worldwide Travel Corporation</title>
    <?php include "includes/header.php" ?>
</head>
<body>
	<!-- navbar -->
	<div class="navbar-fixed">	
	   	<?php include "includes/navbar.php" ?>
	</div>
	<!-- navbar -->

	<!-- Hero -->
    <section class="hero">
      <div class="container text-center">
        <div class="row">
        	<div class="col s10 l4 push-s1 push-l4">
        		
              <div class="card grey lighten-5">
                <form class="card-content black-text">

                    <!--Logo-->
                    <div class="center">
                       <a> Logo Here</a>
                    </div>  
                    <!--username-->
                    <div class="row">
                        
                          <div class="col s3 push-s1 margin">
                              <i class="fa fa-user fa-3x" style="padding:5px" aria-hidden="true"></i>
                          </div>
                        
                          <div class="col s8">
                              <input id="username" name="username" type="text" class="validate">
                              <label for="username">Username</label>
                          </div>
                    </div>  
                    <!--password-->
                    <div class="row">
                        
                         <div class="col s3 push-s1 margin">
                              <i class="fa fa-key fa-3x" style="padding:5px" aria-hidden="true"></i>
                          </div>
                        
                          <div class="col s8" >
                              <input id="password" name="password" type="password">
                              <label for="password">Password</label>
                          </div>
                    </div> 
                    <!--buttons-->
                    <div class="row center">
                      
                      <!--log in button-->
                      <div class="col s6 l5 push-l4 push-s3">
                          <a class="waves-effect waves-light btn" type="submit" href="admin.php">Log In</a>
                      </div>
                    </div>
                </form>
              </div>


        	</div>          
        </div>
      </div>
      
    </section>
    <!-- /Hero -->


	<?php include "includes/footer.php" ?>

</body>
</html>