<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mediatorkerala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
  <link rel=" styleheet" href="css/bootstrap-reboot.css" type="text/css">
  <link rel=" stylesheet" href="css/bootstrap-reboot.min.css" type="text/css">
  <link rel=" stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--  -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&amp;display=swap" rel="stylesheet">
  <link rel=" stylesheet" href="./css/style.css" type="text/css">
  <link rel="stylesheet" href="css/media.css" type="text/css">
  <!--  -->
</head>
<body>
    <header>
 
        <nav class="navbar navbar-expand-md bg-light navbar-light">
            <!-- Brand -->
          
            <a class="navbarbrand d-lg-none " href="index.php"><img src="img/logo.png" alt="LOGO" class="logo-img"></a></a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ABOUT</a>
                </li>
               
              </ul>
            </div>
            <!--  -->
            
                    <a class="navbar-brand " href="index.php"><img src="img/logo.png" class="logo-img" alt="LOGO"></a>
            
            
            <!--  -->
            <div class="collapse navbar-collapse justify-content" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  
                  <li class="nav-item">
                   {if $user_logined==true}
					
					<li class="nav-item">
					<a class="nav-link" href="logout.php">LOGOUT</a>	
					</li>
					{else}	
					<li class="nav-item">
						<a class="nav-link" href="login.php">LOGIN</a>	
					</li>
					{/if}
                  </li>
                 
                 
                </ul>
              </div>
          </nav>
      
    
    </header>
    <section id="section">
        <div class="container">
               <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <!--  -->
                            <div>
                                <form action="" method="post">
                                    <!-- <div class="row">
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                                             <input type="text" name="district" placeholder="District" class="form-control">
                                        </div>
                                       
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                                           
                                            <input type="button" name="submit" value="Submit" class="btn btn-danger btn-lg formsearch">
                                        </div>
                                    </div>  -->
                                </form>
                            </div>
                           
                                  
                            <!--  -->
                     </div>
               </div>
        </div>

</section>
<!--  -->
<section>
    <div class="mt-5"></div>
        <div class="container">
               <div class="row">
					
					 
                     <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                               
                                <h5><a href="agentsUnderPanchayath.php"  class="btn btn-light btn-dashboard">List All Agents in <br> {$district}&nbsp;[{$panchayath}]</a></h5>
                            </div>
                     </div>
					 
					 
					 
                     <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                               <h5><a href="pendingPropertiesForExecutive.php"  class="btn btn-light btn-dashboard">List All Properties in <br> {$district}&nbsp;[{$panchayath}]</a></h5>
                           </div>
                    </div>
                    
                    
               </div>
        </div>
    <div class="mt-5"></div>    
</section>
<!--  -->
<div class="mt-3"></div>
<!-- property -->
        
<!-- footer -->
<div class="mt-3"></div>
<footer>
    
      <div class="container">
      
            <div class="row">  
                   <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt-3">
                    <h6>Popular District</h6>
                
                         <ul class=" nav navbar-nav">
                         	<li class="nav-item"><a href="#" class="nav-link">Ernakulam</a></li>
                          	<li class="nav-item"><a href="#" class="nav-link">Pathanamthitta</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Thiruvananthapuram</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">TWayanad</a></li>
                        </ul>

                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt-3">
                       <h6>About Us</h6>
                       
                       <ul class=" nav navbar-nav">
                          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                          <li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
                       </ul>

                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt-3">
				      <h6>Quick links</h6>
                       <ul class=" nav navbar-nav">
							  <li class="nav-item"><a class="nav-link" href="plans.php">Plans</a></li>
							  <li class="nav-item"><a class="nav-link"  href="#">Refund Policy</a></li>
							  <li class="nav-item"><a class="nav-link"  href="#">Privacy Policy </a></li>
							  <li  class="nav-item"><a class="nav-link"  href="#">Terms And Conditions</a></li>
							  
						 
						</ul>

                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt-3">
                    <h6>Follows</h6>
                    <ul class=" nav ">
                        <li class="nav-item"><a class="nav-link"><i class=" fa fas fa-brands fa-facebook-square fa-2x text-dark"></i></a></li>
                        <li class="nav-item"><a class="nav-link"><i class="fa-brands fa-instagram fa-2x text-dark"></i></a></li>
                        <li class="nav-item"><a class="nav-link"><i class="fa-brands fa-twitter-square fa-2x text-dark"></i></a></li>
                        <li class="nav-item"><a class="nav-link"><i class="fa-brands  fa-youtube-square fa-2x text-dark"></i></a></li>
                    </ul>
                   </div>
            </div>
           
      </div>
    <!--  -->
    <div class="mt-3"></div>
    <div class="foot">
        <div class="container">
              <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                         <p>All rights reserved <a href="#">A2ZAlphabet Solution PVT.LTD</a></p>
                     </div>
              </div>
        </div>
       </div>
    <!--  -->
    
</footer>

<!-- end Property -->
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.esm.js"></script>
<script src="js/bootstrap.esm.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
