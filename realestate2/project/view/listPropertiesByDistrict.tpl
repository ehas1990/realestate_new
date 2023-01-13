<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mediatorkerala</title>
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
 
.card
  {
  height:780px !important;
  } 
   .card:hover
   {

 box-shadow: 0px 1px 6px 1px #222121;
transition: cubic-bezier 02.s;
transition: ease-out;

   }
   #navlink {
	
	width:164px;
}
   @media only screen 
  and (min-device-width: 210px) 
  and (max-device-width:320px)
{
#nav_1_tab {
    margin-left: 0px; 
	width:164px;
}
#navlink {
	background: linear-gradient(171deg, black, transparent);
	width:164px;
}
#form-search1 {
	margin-top: -59px;
}
}
#form-search1 {
	margin-top: -7px;
}
.card
  {
  height:815px;
  } 
}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
{
#form-search1 {
	margin-top: -7px;
}

#nav_1_tab {
    margin-left: 0px; 
	width:164px;
}
#navlink {
	background: red;
	width:164px;
}

}
@media only screen 
  and (min-device-width:480px) 
  and (max-device-width:620px)
{
#navlink, #nav_1_tab {
	width: 174px !important;
}
.nav-tabs li {
	width: 42% !important;
}
	.card {
	height:720px !important;
}
#section {
	height: 457px !important;
	background-size: cover;
	margin-top: -85px !important;
}
#form-search {
	height: 340px !important;
	margin-top: 78px !important;
	background: linear-gradient(171deg, black, transparent);
	padding-left: 50px;
	padding-right: 50px;
	padding-top: 20px;
	box-shadow: linear-gradient(171deg, black, transparent);
}
}
@media only screen 
  and (min-device-width:620px) 
  and (max-device-width:720px)
  {
  #navlink{
	width: 174px !important;
}
#nav_1_tab {
	width: 174px !important;
}
.nav-tabs li {
	width: 42% !important;
}
   #form-search {
    height: 282px !important;
    margin-top: 150px;
    background: linear-gradient(171deg, black, transparent);
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 20px;
    box-shadow: linear-gradient(171deg, black, transparent);
}
#form-search1 {
	margin-top: -34px !important;
}
  .card {
	height:740px !important;
}
  }
  @media only screen 
  and (min-device-width:720px) 
  and (max-device-width:820px)
  {
    #navlink, #nav_1_tab {
	width: 174px !important;
}
.nav-tabs li {
	width: 42% !important;
}
   #form-search {
    height:278px !important;
    margin-top: 150px;
    background: linear-gradient(171deg, black, transparent);
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 20px;
    box-shadow: linear-gradient(171deg, black, transparent);
}

#form-search1 {
	margin-top: -34px !important;
}
  .card {
	height:1000px !important;
}
  }
  @media only screen 
  and (min-device-width:820px) 
  and (max-device-width:1200px)
  {
     #form-search {
    height: 150px !important;
    margin-top: 150px;
    background: linear-gradient(171deg, black, transparent);
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 20px;
    box-shadow: linear-gradient(171deg, black, transparent);
}
  .card {
	height: 1020px !important;
}
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
<!---->
    <header>
 
        <nav class="navbar navbar-expand-md bg-light navbar-light">
            <!-- Brand -->
          
            <a class="navbarbrand d-lg-none " href="index.php"><img src="img/logo.png" alt="LOGO" class="logo-img"></a>
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
                  <a class="nav-link" href="contactus.php">CONTACT</a>
                </li>
				 <li class="nav-item">
                  <a class="nav-link" href="login.php">LOGIN</a>
                </li>
               <!--  <li class="nav-item">
                   {if $user_logined==true}
					
					<a class="nav-link" href="logout.php"><i class="fa fa-user"></i><span class="ml-2">Logout</span></a>	
					
					{else}	
						<a class="nav-link" href="login.php"><i class="fa fa-user"></i><span class="ml-2">Logoin</span></a>	
					{/if}
                </li> -->
                 
                 
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
							<div id="form-search1">
                            <div id="form-search">
							<div class="message">
							{if $displayMessage==1}
							{if $message}	
								{if $color=="gree"}
								<div class="alert alert-success alert-dismissible fade show" role="alert">
                                  {$message}
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                 </button>
								</div>
								{/if}
								{if $color=="red"}
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  {$message}
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                 </button>
								</div>
								{/if}
							{/if}
							{/if}
							</div>
			                 <ul class="nav nav-tabs justify-content-center">
                                        <li class="nav-item">
                                        <a class="nav-link active btn text-white " id="navlink" data-toggle="tab" href="#propertysearch">property search</a>
                                        </li>
                                        <li class="nav-item"  id="nav_1_tab">
                                        <a class="nav-link btn text-white" id="navlink" data-toggle="tab"  href="#AgentSearch">Agent Search</a>
                                        </li>
                                        
                                    </ul>
                                    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="propertysearch" class="container tab-pane active">
                                            <div class="mt-4"></div>
                                            <form action="" method="post">
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
                                                        <select name="panchayath" class="form-control formsearch" id="show_panchayath">
												            <option value="x">Select Panchayath</option>
											            </select>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12" id="formsearch_btn">
                                                    
                                                       <input type="submit" name="submit" value="search" class="btn btn-danger btn-sm sm-btn formsearch">
                                                    </div>
                                                </div>  
                                            </form>
                                        </div>
                                        <div id="AgentSearch" class="container tab-pane fade">
                                            <div class="mt-4"></div>
                                            <form action="" method="post">
                                                <div class="row">
                                                   
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
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
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                            <select name="panchayath" class="form-control formsearch" id="show_panchayath">
												                   <option value="x">Select Panchayath</option>
											                </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12" id="formsearch_btn">
                                                    
                                                         <input type="submit" name="submit" value="search" class="btn btn-danger btn-sm sm-btn formsearch">
                                                    </div>
                                                </div>  
                                            </form>
                                        </div>
                                        </div>
                               
                           
                                  
                            <!--  -->
							</div>
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
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="text-center">
                    <a href="#" class="btn btn-light"><img src="icon/row.svg" width="30px"></a>
                     <a href="#" class="btn btn-light"><img src="icon/grid.svg" width="30px"></a>
                </div>
          </div>
  
     </div>
   </div>
<section>
<div class="mt-3"></div>
<section>

   <div class="container">
     
            <div class="row">
			  <div class="mt-3"></div>
            {if $properties}  
			
				{foreach from=$properties item=$p}
				  <div class="mt-3"></div>
                    <!--  -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12" id="col-sm-row">  
<div class="mt-3"></div>				
                    <div class="card">
                         <div id="img-property">        
                        <img src="uploads/{$p.property_key}/{$p.property_image}/{$p.image_name}" class="img-fluid" id="fluid_img">
                        </div>
                        <div class="adds card-img-overlay">
						{if $p.property_for==1}
                            <h6>For Sales</h6>
						{/if}
						{if $p.property_for==2}
                            <h6>For Rent</h6>
						{/if}
                        </div>
                        <div class="rate">
                            <h5 id="rate-h5"class="text-center mt-2">{$p.property_price}</h5>
                        </div>
                      <div class="meu-sticky">
                        <div class="carddetails">
                            <h6 class="text-center" id="h6">{$p.property_name}</h6>
                            <div class="cardloc">
                                <h6 id="h6"><span class="mr-3"><img src="icon/location.png" width="25px" height="25px"></span>{$p.district}
								<br class="mt-2">[{$p.panchayath}]</h6>
                            </div>
                           
                        </div>
                        <div class="cardtext mt-2">
                           {$p.property_description} 
                        </div>
                        <ul id="card-details">
                            <li><span class="mr-3"><img src="icon/build_area.png" width="35px" height="35px"></span>{$p.property_floor} ft2</li>
                            <li><span class="mr-3"><img src="icon/bedroom.png" width="35px" height="35px"></span>{$p.property_bedroom}</li>
                            <li><span class="mr-3"><img src="icon/bathtub.png" width="35px" height="35px"></span>{$p.property_bathroom}</li>
                        
                        </ul>
						</div>
						
                        <div class="btn-viewmore">
                            <a href="propertyDetails.php?key={$p.property_key}" class="btn btn-danger btn-sm sm-btn ">View More</a>
                        </div>
						
                       <div class="mt-2"></div>
                    </div>  
                </div>
				
			{/foreach}
            {else}
			   
			   <div class="emptyBox">
					<center>There is no properties listed in this platform yet..</center>
			   </div>
			   
			{/if}
                <!--  -->
             
                <!--  -->
               
                <!--  -->
            </div>
             <!--  -->
             <div class="mt-3"></div>
             
    </div>
	   <div class="mt-3"></div>
</section>            
<!-- footer -->
<div class="mt-3"></div>
<footer>
    
      <div class="container">
      
            <div class="row">  
                   <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt-3">
                    <h6>Popular District</h6>
					
					{if $districts}
                         <ul class=" nav navbar-nav">
						 {foreach from=$districts item=d}
                         	{if $d.popular==1}
							<li class="nav-item"><a href="listPropertiesByDistrict.php.php?k={$d.district_key}" class="nav-link">{$d.district_name}</a></li>
                          	{/if}
                        {/foreach}
						</ul>
					{else}
						There is no popular Districts Added Yet
					{/if}
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
                         <p>All rights reserved <a href="https://a2zalphabetsolutionz.com/">A2ZAlphabet Solution PVT.LTD</a></p>
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
