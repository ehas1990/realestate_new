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
  <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--  -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel=" stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/media.css" type="text/css">
  <!--  -->
  <style>
  .img-fluid
  {
   height:250px;
  }
  .card
  {
  height:650px;
  }
  </style>
  
  {literal}
  <script>
	$(document).ready(function(){
		
		$('#district').change(function(){
		
		var  selection = $('#district').val();
		
		
			$.ajax({
				url:"loadDistricts.php",
				method:"POST",
				data:{district:selection},
				success:function(data){
					
					$('#show_panchayath').html(data);
				}
			});
		
		});
	
	
	});
  </script>
  {/literal}
  
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
                        <li ><a class="href" href="login.php"><i class="fa fa-user mr-3"></i>Login</a></li>
                        
                    </ul>
                 </div>
          </div>
    </div>
</header>
<!--  -->
<section id="section">
        <div class="container">
               <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <!--  -->
                            <div id="form-search">
                                <form action="" method="post">
								<input type="hidden" name="act" value="search">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                            <select class="form-control formsearch" name="property_for">
                                                     <option selected="true" disabled="disabled" value="x">Property For</option>
                                                     <option value="1">For Sale</option>
                                                     <option value="2">For Rent</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                            <select class="form-control formsearch" id="district" name="district">
													{if $districts}
                                                     <option value="x">Select District</option>
													 {foreach from=$districts item=d}
														<option value="{$d.district_key}">{$d.district_name}</option>
													 {/foreach}
													{else}
													 Add districts from admin panel
													{/if}
                                                     
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                            <select name="panchayath" class="form-control" id="show_panchayath">
												<option value="x">Select Panchayath</option>
											</select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-12" id="formsearch_btn">
                                           
                                            <input type="submit" name="submit" value="search" class="btn btn-danger btn-lg formsearch">
                                        </div>
                                    </div> 
                                </form>
                            </div>
                           
                                  
                            <!--  -->
                     </div>
               </div>
        </div>

</section>
<!--  -->
<div class="mt-3"></div>
<!-- property -->
<section>
   <div class="container">
            <div class="row">
			
            {if $properties}  
			
				{foreach from=$properties item=$p}
                    <!--  -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12" id="col-sm-row">    
                    <div class="card">
                                 
                        <img src="uploads/{$p.property_key}/{$p.property_image}/{$p.image_name}" class="img-fluid">
                        
                        <div class="adds">
						{if $p.property_for==1}
                            <h5>For Sales</h5>
						{/if}
						{if $p.property_for==2}
                            <h5>For Rent</h5>
						{/if}
                        </div>
                        <div class="rate">
                            <h5 class="text-center mt-2">{$p.property_price}</h5>
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
                            <li><span class="mr-3"><img src="icon/build_area.png" width="35px" height="35px"></span>{$p.property_floor} ft2
</li>
                            <li><span class="mr-3"><img src="icon/bedroom.png" width="35px" height="35px"></span>{$p.property_bedroom}</li>
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
			   
			   {/if}
                <!--  -->
             
                <!--  -->
               
                <!--  -->
            </div>
             <!--  -->
             <div class="mt-3"></div>
             
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
</body>
</html>
