<!DOCTYPE html>
<html lang="en">
<head>
  <title>Real Estate</title>
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
    <div class="container-fluid">
          <div class="row">
                 <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                    <h3 class="logo"><a href="index.php">Logo</a></h3>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <form action="" method="post">
                              <input type="text" name="search" placeholder="" class="form-control formsearch">
                              <div class="search-btn">
                                <i class="fa-solid fa-magnifying-glass fasearch"></i>
                              
                                <input type="button" name="submit" value="" class="btn btn-danger btn-sm btn-search">
                              </div>
                             
                       </form>
                  
                 </div>
                 <div class="col-lg-4 col-md-4 col-ms-12 col-12" id="col-navlogin">
                    <ul class="nav navlogin">
                        
					{if $user_logined==true}
                        <li ><a class="href" href="logout.php"><i class="fa fa-user mr-3"></i>Logout</a></li>
					{else}
					
						 <li ><a class="href" href="logoin.php"><i class="fa fa-user mr-3"></i>Login</a></li>
					{/if}
                    </ul>
                 </div>
          </div>
    </div>
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
					
					 {if $post_number<$planLimit}
                     <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                               
                                <h5><a href="postproperty.php"  class="btn btn-light btn-dashboard"><span>Post Property</span></a></h5>
                            </div>
                     </div>
					 {else}
					 
					 You can post only {$planLimit} posts .<br>
					 
					 {/if}
                     <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                               <h5><a href="viewMyProperties.php"  class="btn btn-light btn-dashboard">View My Properties</a></h5>
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
                 
                  <ul>
                      <li class="link"><a href="#" >Ernakulam</a></li>
                      <li class="link" ><a href="#" >Pathanamthitta</a></li>
                      <li class="link"><a href="#" >Thiruvananthapuram</a></li>
                      <li class="link"><a href="#" >Wayanad </a></li>
                  </ul>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt-3">
                     <h6>About Us</h6> 
                     <ul>
                          <li class="link"><a href="property.html">Property</a></li>
                          <li class="link"><a href="#">Contact Us</a></li>
                    </ul>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt-3">
                   <h5>logo</h5>
              
                  <ul>
                      <li  class="link"><a href="#">Help</a></li>
                      <li class="link"><a href="#" >Site Map</a></li>
                      <li class="link"><a href="#">Legal & Privacy information</a></li>
                </ul>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt-3">
                  <h6>Follows</h6>
                  <ul class=" nav">
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
