<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mediatorkerala1</title>
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
   <link rel="stylesheet" href="css/min.css" type="text/css">




<!-- Optional theme -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
 
  <!--  -->
  <style>

  #slider-text{
  padding-top: 40px;
  display: block;
}
#slider-text .col-md-6{
  overflow: hidden;
}

#slider-text h2 {
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 30px;
  letter-spacing: 3px;
  margin: 30px auto;
  padding-left: 40px;
}
#slider-text h2::after{
  border-top: 2px solid #c7c7c7;
  content: "";
  position: absolute;
  bottom: 35px;

  }

#itemslider h4{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 12px;
  margin: 10px auto 3px;
}
#itemslider h5{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;
  font-size: 12px;
  margin: 3px auto 2px;
}
#itemslider h6{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;;
  font-size: 10px;
  margin: 2px auto 5px;
}
.badge {
  background: #b20c0c;
  position: absolute;
  height: 40px;
  width: 40px;
  border-radius: 50%;
  line-height: 31px;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;
  font-size: 14px;
  border: 2px solid #FFF;
  box-shadow: 0 0 0 1px #b20c0c;
  top: 5px;
  right: 25%;
}
#slider-control img{
  padding-top: 60%;
  margin: 0 auto;
}
@media screen and (max-width: 992px){
#slider-control img {
  padding-top: 70px;
  margin: 0 auto;
}
}

.carousel-showmanymoveone .carousel-control {
  width: 4%;
  background-image: none;
}
.carousel-showmanymoveone .carousel-control.left {
  margin-left: 5px;
}
.carousel-showmanymoveone .carousel-control.right {
  margin-right: 5px;
}
.carousel-showmanymoveone .cloneditem-1,
.carousel-showmanymoveone .cloneditem-2,
.carousel-showmanymoveone .cloneditem-3,
.carousel-showmanymoveone .cloneditem-4,
.carousel-showmanymoveone .cloneditem-5 {
  display: none;
}
@media all and (min-width: 768px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -50%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 50%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
    display: block;
  }
}
@media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(50%, 0, 0);
    transform: translate3d(50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
@media all and (min-width: 992px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-2,
  .carousel-showmanymoveone .carousel-inner .cloneditem-3,
  .carousel-showmanymoveone .carousel-inner .cloneditem-4,
  .carousel-showmanymoveone .carousel-inner .cloneditem-5,
  .carousel-showmanymoveone .carousel-inner .cloneditem-6  {
    display: block;
  }
}
@media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(16.666%, 0, 0);
    transform: translate3d(16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-16.666%, 0, 0);
    transform: translate3d(-16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}


  <!---->
  
  #submit{
  width:fit-content;
  }
  #nav_1_tab
  {
      margin-left: 10px;
  }
  #navlink
  {
    background-color: #dc3545;
    border-color: #dc3545;
	width:135px;
  }
 .sm-btn{

    width: 100px;
  
    text-align: center;
    font-weight: 800;
    padding: 5px 0px;
    color: white;
    font-size: 12px;
    display: inline-block;
    text-decoration: none;

 }
.card
  {
  height:fit-content;
  } 
   .card:hover
   {

 box-shadow: 0px 1px 6px 1px #222121;
transition: cubic-bezier 02.s;
transition: ease-out;

   }
      @media only screen 
  and (min-device-width: 210px) 
  and (max-device-width:320px)
{
#nav_1_tab {
    margin-left: 0px;
}
#navlink {
    width: 177px !important;
   
}
.nav-tabs li {
   
    margin-top: 5px;
}
#tab-search
{
margin-left:-39px !important;
}
}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
{
#tab-search
{
margin-left: 18px !important;
}

#nav_1_tab {
    margin-left: 0px !important;
}
#navlink {
   
    width: 218px !important;
}
.nav-tabs li {
   
    margin-top: 10px;
}
}
@media only screen 
  and (min-device-width:480px) 
  and (max-device-width:620px)
{
#tab-search
{
margin-left: 18px !important;
}
.nav-tabs li {
   
    margin-top: 5px;
}
.nav-tabs li {
	width: 29% !important;
}
.card
{
height:auto !important;
}
#navlink {
    
    font-size: 10px !important;
}
}
@media only screen 
  and (min-device-width:620px) 
  and (max-device-width:720px)
  {
  .nav-tabs li {
   
    margin-top: 5px;
}
.nav-tabs li {
	width: 43% !important;
}
.card
{
height:auto !important;
}
  }
   @media only screen 
  and (min-device-width:720px) 
  and (max-device-width:820px)
  {
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
                  <a class="nav-link" href="login.php">LOGIN</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="pay.php">PAY</a>
                </li>
				   <li class="nav-item">
                  <a class="nav-link" href="contactus.php">CONTACT</a>
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
			                <!-- <ul class="nav nav-tabs justify-content-center" id="tab-search">
                                        <li class="nav-item">
                                        <a class="nav-link active btn btn-sm sm-btn btn-lg-sm text-white " id="navlink" data-toggle="tab" href="#propertysearch">property search</a>
                                        </li>
                                        <li class="nav-item"  id="nav_1_tab">
                                        <a class="nav-link btn text-white sm-btn btn-sm btn-lg-sm" id="navlink" data-toggle="tab"  href="#AgentSearch">Agent Search</a>
                                        </li>
                                        
                                    </ul>-->
                                    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="propertysearch" class="container tab-pane active">
                                            <div class="mt-4"></div>
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
                                                        <select name="panchayath" class="form-control formsearch" id="show_panchayath">
												            <option value="x">Select Panchayath</option>
											            </select>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12" id="formsearch_btn">
                                                    
                                                    
                                                       <input type="submit" name="submit" value="search" class="btn btn-danger  formsearch" id="submit">
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
<!--<section>
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
<section>-->
<section>
<div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">

          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="uploads/f85f4da9af25/e6e2e499de09/k1.jpg" class="img-responsive center-block"></a>
              
              <h5 class="text-center">For Rent [$10000]</h5>
              
              <h4 class="text-center">Alappuzha [Kalangara]</h4>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
             <a href="#"><img src="uploads/f85f4da9af25/e6e2e499de09/k1.jpg" class="img-responsive center-block"></a>
              
              <h5 class="text-center">For Rent [$10000]</h5>
              
              <h4 class="text-center">Alappuzha [Kalangara]</h4>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="uploads/f85f4da9af25/e6e2e499de09/k1.jpg" class="img-responsive center-block"></a>
              
              <h5 class="text-center">For Rent [$10000]</h5>
              
              <h4 class="text-center">Alappuzha [Kalangara]</h4>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
             <a href="#"><img src="uploads/f85f4da9af25/e6e2e499de09/k1.jpg" class="img-responsive center-block"></a>
              
              <h5 class="text-center">For Rent [$10000]</h5>
              
              <h4 class="text-center">Alappuzha [Kalangara]</h4>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
            <a href="#"><img src="uploads/f85f4da9af25/e6e2e499de09/k1.jpg" class="img-responsive center-block"></a>
              
              <h5 class="text-center">For Rent [$10000]</h5>
              
              <h4 class="text-center">Alappuzha [Kalangara]</h4>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
<a href="#"><img src="uploads/f85f4da9af25/e6e2e499de09/k1.jpg" class="img-responsive center-block"></a>
              
              <h5 class="text-center">For Rent [$10000]</h5>
              
              <h4 class="text-center">Alappuzha [Kalangara]</h4>
            </div>
          </div>

        </div>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right" class="img-responsive"></a>
      </div>
      </div>
    </div>
  </div>
</div>
</section>


<div class="mt-3"></div>

<section>

   <div class="container">
     
            <div class="row">
			  <div class="mt-3"></div>
            {if $properties}  
			
				{foreach from=$properties item=$p}
				  <div class="mt-3"></div>
                    <!--  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" id="col-sm-row">  
               <div class="mt-3"></div>				
                    <div class="card">
                         <div id="img-property">       
                        <a href="propertyDetails.php?key={$p.property_key}" >						 
                            <img src="uploads/{$p.property_key}/{$p.property_image}/{$p.image_name}" class="img-fluid" id="fluid_img">
						</a>
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
                     
                        <div class="carddetails">
                            <h6 class="text-center">{$p.property_name}</h6>
							<div class="text-center"><img src="icon/location.png" width="20px" height="20px"></div>
                            <div class="cardloc mt-2">
                                <h6>{$p.district}
								[{$p.panchayath}]</h6>
                            </div>
                           
                        </div>
                       
                        <ul id="card-details">
                              <li><a><img src="icon/build_area.png" width="20px" height="20px"><span class="ml-2">10000-ft2</span></a></li>
							  <li><a><img src="icon/bedroom.png" width="20px" height="20px"><span class="ml-2">{$p.property_bedroom}</span></a></li>
                              <li><a><img src="icon/bathtub.png" width="20px" height="20px"><span class="ml-2">{$p.property_bathroom}</span></a></li>
							  <li><a><img src="icon/icons-floor.png" width="20px" height="20px"><span class="ml-2">3</span></a></li>
							  <li><a><img src="icon/icons-park.png" width="20px" height="20px"><span class="ml-2">3</span></a></li>
                        </ul>
						
						<div class="mt-2"></div>
						   <div class="btn-viewmore">
								<a href="propertyDetails.php?key={$p.property_key}" class="btn btn-danger btn-lg-sm btn-sm sm-btn ">View More</a>
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
							<li class="nav-item"><a href="listPropertiesByDistrict.php?k={$d.district_key}" class="nav-link">{$d.district_name}</a></li>
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
<!---->
 <script type="text/javascript">
   $(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});

  </script>
<!---->

<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.esm.js"></script>
<script src="js/bootstrap.esm.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
