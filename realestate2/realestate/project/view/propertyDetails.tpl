<!DOCTYPE html>
<html lang="en">
<head>
  <title>Real Estate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet"  href="css/bootstrap-grid.css" type="text/css">
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
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel=" stylesheet" href="css/style.css" type="text/css">
  <!--  -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.0/dist/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <!--  -->
  <link rel="stylesheet" type="text/css" href="css/normalize.min.css" media="screen, print">
<link rel="stylesheet" type="text/css" href="css/smartslider.min.css" media="screen, print">
<style>
.image_property
{
width:720px;
}
</style>
  <!--  -->
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md bg-light navbar-light">
            <!-- Brand -->
          
            <a class="navbarbrand d-lg-none " href="#">Logo</a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
               
              </ul>
            </div>
            <!--  -->
            
                    <a class="navbar-brand " href="index.php"><img src="img/logo.png" alt="LOGO"></a>
            
            
            <!--  -->
            <div class="collapse navbar-collapse justify-content" id="collapsibleNavbar">
                <ul class="navbar-nav">
                   <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                  <li class="nav-item">
					{if $user_logined==true}
						<a class="nav-link" href="logout.php"><i class="fa fa-user"></i><span class="ml-2">Logout</span></a>
					{else}	
						<a class="nav-link" href="login.php"><i class="fa fa-user"></i><span class="ml-2">Logoin</span></a>	
					{/if}
                  </li>
                 
                 
                </ul>
              </div>
          </nav>
</header>
<!--  -->
<section id="section">
        <div class="container">
               <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <!--  -->
                            <!-- <div id="form-search">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                            <select class="form-control formsearch">
                                                     <option selected="true" disabled="disabled">Property For</option>
                                                     <option>For Rent</option>
                                                     <option>For Sale</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                            <select class="form-control formsearch">
                                                     <option selected="true" disabled="disabled">District</option>
                                                     <option>Alappuzha</option>
                                                     <option>Ernakulam</option>
                                                     <option>Idukki</option>
                                                     <option>Kannur</option>
                                                     <option>Kasaragod</option>
                                                     <option>Kollam</option>
                                                     <option>Kottayam</option>
                                                     <option>Kozhikode</option>
                                                     <option>Malappuram</option>
                                                     <option>Palakkad</option>
                                                     <option>Pathanamthitta</option>
                                                     <option>Thiruvananthapuram</option>
                                                     <option>Thrissur</option>
                                                     <option>Wayanad</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                            <select class="form-control formsearch">
                                                     <option  selected="true" disabled="disabled">Panchayati</option>
                                                     <option></option>
                                                     <option></option>
                                                     <option></option>
                                                     <option></option>
                                                
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                           
                                            <input type="button" name="submit" value="search" class="btn btn-danger btn-lg formsearch">
                                        </div>
                                    </div> 
                                </form>
                            </div> -->
                           
                                  
                            <!--  -->
                     </div>
               </div>
        </div>

</section>
<!--  -->
<div class="mt-3"></div>
<!--  -->

<section>
    <div class="container">
        <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                     <!-- 1 -->
                     <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <!--  -->
								<div class="img1">
								<img src="uploads/c0ed5878813b/5b971b0c07fc/h32.jpg" class="img-fluid image_property">
								</div>
                            <!--  -->
                            </div>
                     </div>
                     <!--  -->
                     <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                               <div class="card_details">
                                 
                                 <ul id="card_details">
                                    <li><a href=""><img src="icon/bedroom.png" width="35px" height="35px"><span class="ml-3">{$details.property_bedroom}</span></a></li>
                                    <li><a href=""><img src="icon/bathtub.png" width="35px" height="35px"><span class="ml-3">{$details.property_bathroom}</span></a></li>
                                    <li><a href=""><img src="icon/icons-floor.png" width="35px" height="35px"><span class="ml-3">{$details.property_floor}</span></a></li>
                                    <li><a href=""><img src="icon/icons-park.png" width="35px" height="35px"><span class="ml-3">{$details.property_parking}</span></a></li>
                                    <li><a href=""><img src="icon/build_area.png" width="35px" height="35px"><span class="ml-3">{$details.property_area}</span></a></li>
                                 </ul>
                               </div>
                               <div class="card_details">
                                <h5>Description</h5> 
                                 <p>{$details.property_description}</p>
                              </div>
                           </div>
                     </div>
                     <!--  -->
                     <div class="mt-5"></div>
                    <div class="row">
					 
                       
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card_details">
                              
                                  <h5>Gallery</h5>
                              </div>
							{if $propertyImages}
                                <!--  -->
                                <p class="imglist">
								
								{foreach from = $propertyImages item=image}
                                <a href="uploads/{$details.property_key}/{$image.image_key}/{$image.image_name}" data-fancybox="group" data-caption="">
                                    <img src="uploads/{$details.property_key}/{$image.image_key}/{$image.image_name}"  class="img-thumbnail thumbnail">
                                </a>
                                
                                {/foreach}   
                            
                                </p>
                                <!--  -->
							{else}
							
								There is no other images in Gallerry
							 
							{/if}
                            </div> 
                    </div>
                    <!--  -->
                   
                   <!-- <div class="row">
                        <h6>documentation</h6>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                              
                                <a class="btn btn-danger" href="">Click here</a>
                             
                            </div> 
                    </div>  -->
                    
               </div>
               
               <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="mt-4"></div>
                <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-img text-center">
                                  <img src="icon/icons-user.png">
                            </div>
                            <div class="card-body">
                                <h6 class="text-center">{$details.name}</h6>
                                <div class="mt-2"></div>
                                <h6 class="text-center"><span><i class="fa fa-solid fa-phone fa-bounce mr-3"></i></span><a href="tel:+919452345678">{$agentDetails.contact_number}</a></h6>
                                <div class="mt-2"></div>
                                <h6 class="text-center"><span><i class="fa fa-brands fa-whatsapp fa-bounce mr-3"></i></span><a href="tel:+919452345678">{$agentDetails.user_name}</a></h6>
								<div class="mt-4"></div>
								{if $user_logined}
									<h6 class="text-center">Client Name : {$details.Client_Name } <br> Client Number : {$details.Client_Number}  </h6>
								{/if}
								<div class="mt-4"></div>
						   </div>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6>location</h6>
                         <!--  -->
                         <div class="card">
                           
                                <img src="icon/google-maps.webp" height="250px">
                           
                         </div>
                        
                     
                         <!--  -->
                     </div>
                </div>
                    
                    
               </div>
        </div>
    </div>
</section>

<!-- property -->
<!-- Releated adds -->
<section>
   
        <div class="container  my-3">
            <h5>Releated Property</h5>
            <div class="row mx-auto my-auto">
                <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item py-5 active">
                            <div class="row">
							{if $similarProperties} 
							
								{foreach from=$similarProperties item=$p}
									<div class="col-sm-4">
										<div class="card">
									 
											<img src="uploads/{$p.property_key}/{$p.property_image}/{$p.image_name}" class="img-fluid">
											
											<div class="adds">
												<h5>For Sales</h5>
											</div>
											<div class="rate">
												<h5 class="text-center mt-2">26000</h5>
											</div>
										  
											<div class="carddetails">
												<h6 class="text-center">{$p.property_name}</h6>
												<div class="cardloc">
													<h6><span class="mr-3"><img src="icon/location.png" width="35px" height="35px"></span>{$p.district}&nbsp;[{$p.panchayath}]</h6>
												</div>
											   
											</div>
											<div class="cardtext mt-2">
												{$p.property_description} 
											</div>
											<ul id="card-details">
												
												<li><span class="mr-3"><img src="icon/icons-floor.png" width="35px" height="35px"></span>{$p.property_floor}</li>
												<li><span class="mr-3"><img src="icon/build_area.png" width="35px" height="35px"></span>{$p.property_area}</li>
												<li><span class="mr-3"><img src="icon/bedroom.png" width="35px" height="35px">{$p.property_bedroom}</span>2</li>
												<li><span class="mr-3"><img src="icon/bathtub.png" width="35px" height="35px"></span>{$p.property_bathroom}</li>
											
											</ul>
											<div class="btn-viewmore">
												<a href="propertyDetails.php?key={$p.property_key}" class="btn btn-danger">View More</a>
											</div>
										   <div class="mt-2"></div>
										</div>  
									</div>
								{/foreach}
								
                             {else}   
                                 Empty Similar Property Listings..
                             {/if}  
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
           
        </div>
</section>

<!-- footer -->
<div class="mt-3"></div>
<footer>
    
      <div class="container">
      
            <div class="row">  
                   <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt-3">
                    <h6>Popular District</h6>
                    <table>
                        <tbody>
                             
                              <tr>
                                <td><a href="#" class="link">Ernakulam</a></td>
                             
                             </tr>
                              
                              <tr>
                                <td><a href="#" class="link">Pathanamthitta</a></td>
                                
                              
                              </tr>
                              <tr>
                                <td><a href="#" class="link">Thiruvananthapuram</a></td>
                               
                              </tr>
                              <tr>
                                <td><a href="#"  class="link">Wayanad </a></td>
                               
                             
                              </tr>
                        </tbody>
                    </table>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt-3">
                       <h6>About Us</h6>
                      
                       <table>
                            <tbody>
                               
                                <tr>
                                    <td><a href="property.html" class="link">Property</a></td>
                                
                                </tr>
                                <tr>
                                    <td><a href="#" class="link">Contact Us</a></td>
                                
                                </tr>
                                
                            </tbody>
                       </table> 
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt-3">
                     <h5>logo</h5>
                     <table>
                        <tbody>
                              <tr>
                                <td><a href="#">Help</a></td>
                           
                              </tr>
                              <tr>
                                 <td><a href="#">Site Map</a></td>
                               
                             </tr>
                              <tr>
                                <td><a href="#">Legal & Privacy information</a></td>
                               
                             </tr>
                              
                        </tbody>
                    </table>

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
<script src="js/owlslider.js"></script>
{literal}
<script>
    $('#myCarousel').carousel({
  interval: 100
})

</script>
{/literal}
</body>
</html>
