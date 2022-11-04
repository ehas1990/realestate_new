<!DOCTYPE html>
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
 <!--  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->
 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--  -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel=" stylesheet" href="css/style.css" type="text/css">
  <!--  -->
  <style>
        .form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius:17px !important;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    box-shadow: #0000008c -1px 3px 6px 0px !important;
   
}
  </style>
  <!--  -->
  
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
                    <h3><a href="index.php">Logo</a></h3>
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
                 <div class="col-lg-4 col-md-4 col-ms-12 col-12">
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
<!--  -->
<section id="section">
        <div class="container">
               <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <!--  -->
                            <div class="contact_header">
                                <h1 class="text-center">Property Form</h1>
                            </div>
                            <!--  -->
                     </div>
               </div>
        </div>

</section>
<!--  -->
<div class="mt-3"></div>
<!-- contact details -->

<!-- site map -->
<section>
    <div class="container">
         <div class="row">
		 {if $post_number < $planLimit}
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="form-card">
                            <form action="" method="post" enctype="multipart/form-data">
							<input type="hidden" name="act" value="addPost"/>
							
                             <div class="row">
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                      <h2>Property Details</h2>
                                 </div>
                                 
                              </div>
                                <div class="row">
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <label class="form-label">Property Name</label>
                                     </div>
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="propertyname" placeholder="Property Name" class="form-control">
											 
                                     </div>
                                </div>
                                <div class="mt-4"></div>
								
								  <div class="row">
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <label class="form-label">Property For</label>
                                     </div>
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <input type="radio" name="propertyfor" value="1"> For Sale
										   <input type="radio"  name="propertyfor" value="2"> For Rent
											 
                                     </div>
                                </div>
                                <div class="mt-4"></div>
                                <div class="row">
                                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                             <label class="form-label">Upload Photos 1 &nbsp;* &nbsp;(Please select atleast 1 image)</label>
                                       </div>
                                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                             <input type="file" name="mainphoto" placeholder="Upload1" class="form-control">
                                       </div>
                                 </div>
                                 <div class="mt-4"></div>
                                 <div class="row">
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <label class="form-label">Upload Photos 2</label>
                                     </div>
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <input type="file" name="photo2" placeholder="Upload2" class="form-control">
                                     </div>
                                </div>
                                <div class="mt-4"></div>
                               <div class="row">
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <label class="form-label">Upload Photos 3</label>
                                     </div>
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <input type="file" name="photo3" placeholder="Upload3" class="form-control">
                                     </div>
                               </div>
                               <div class="mt-4"></div>
                               <div class="row">
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <label class="form-label">Upload Photos 4</label>
                                     </div>
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <input type="file" name="photo4" placeholder="Upload4" class="form-control">
                                     </div>
                               </div>
                               <div class="mt-4"></div>
                               <div class="row">
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <label class="form-label">Property Price</label>
                                     </div>
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <input type="text" name="propertyprice" placeholder="Property Price" class="form-control">
                                     </div>
                             </div>
                             <div class="mt-4"></div>
                          <div class="row">
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                     <label class="form-label">Property Area</label>
                               </div>
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                     <input type="text" name="propertyarea" placeholder="Property Area in Sq.feet" class="form-control">
                               </div>
                          </div>
                          <div class="mt-4"></div>
                         <!--  <div class="row">
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                     <label class="form-label">Property District</label>
                               </div>
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                   
									{if $districts}
									 
									 <select name="district" class="form-control ms-2" id="district">
										<option value="x">Please Select District</option>
										{foreach from=$districts item=d}
											<option value={$d.district_key}>{$d.district_name}</option>
										{/foreach}
                                                   
                                     </select>
									 
									 {else}
										Please Add Districts from Admin Panel
									 {/if}
									 
									 
                               </div>
                          </div> -->
                          
                     <!--  <div class="mt-4"></div>
                         
                         
                          <div class="row">
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                     <label class="form-label">Property panchayath </label>
                               </div>
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                     
									 
									 <select name="panchayath" class="form-control" id="show_panchayath">
												<option value="X">Select Panchayath</option>
									</select>
									 
                               </div>
                          </div> -->
                          <div class="mt-4"></div>
                          <div class="row">
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h2>Property Facilities</h2>
                           </div>
                          
                          </div>
                          <div class="mt-4"></div>
                          <div class="row">
                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="mt-2"></div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div id="facilities">
                                                <label class="form-label">BedRooms</label>
                                                <select name="bedrooms" class="form-control ms-2" id="select_form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    
                                                </select>   
                                            </div>
                                    </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div id="facilities">
                                                    <label class="form-label">Bathrooms</label>
                                                    <select name="bathrooms" class="form-control ms-2" id="select_form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        
                                                    </select>   
                                                </div>
                                        </div>
                                    </div>
                                    <div class="mt-2"></div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div id="facilities">

                                                    <label class="form-label">Floor</label>
                                                    
                                                        <select name="floor" class="form-control ms-2" id="select_form_control">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                        </select>
                                                    
                                                        
                                                </div> 
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div id="facilities">
                                                <label class="form-label">Car parking</label>
                                                <select name="parking" class="form-control ms-2" id="select_formcontrol">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    
                                                </select>   
                                            </div>
                                    </div>
                                    </div>

                               </div>
                          </div>
                          <div class="mt-4"></div>
                          <div class="row">
                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                 <h2>Property Description</h2>
                               </div>
                               <div class="mt-2"></div>
                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                   <textarea name="description" cols="100px" class="form-control" maxlength="350"></textarea>
								   
                               </div>
                          </div> 
						  <div class="row">
                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                 <h2>Location Map 1</h2>
                               </div>
                               <div class="mt-2"></div>
                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!--    <textarea name="map" cols="100px" class="form-control" maxlength="350"></textarea> -->
								  <input type="text" class="form-control" placeholder="Google Map Iframe Code" name="map">
                               </div>
                          </div>
                          
                          <div class="mt-4"></div>
                          <div class="row">
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                             <div class="row">
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                  <div class="mt-2"></div>
                                     
                                     
                                    <div class="mt-2"></div>
                                    
                                   <div class="mt-2"></div>
                                  
                                
 
                               </div>
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div id="faclities-btn" class="text-center">
                                          
										  <input type="submit" value="Submit Post"  class="btn btn-danger btn-lg">
                                    </div>
                               </div>
                              </div>
                           </div>
                          </div>
                            </form>
                      </div>
               </div>
			   {else}
				You reached your post limit..
			   {/if}
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
</body>
</html>
