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
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/vaakash/socializer@2f749eb/css/socializer.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <!--  -->
  <style>
 
.card
  {
  height:720px;
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

#navlink {
	background: linear-gradient(171deg, black, transparent);
	width: 180px;
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
  height:auto;
  } 
}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
{
.banner {
    background-image: url('../img/banner.jpg');
    height: 300px;
    background-position: 30px 120px 60px 30px;
    background-position-x: -219px !important;
}
#form-search1 {
	margin-top: -7px;
}

#navlink {
	background: linear-gradient(171deg, black, transparent);
	width: 180px;
}
#nav_1_tab {
	margin-left: 0px !important;
	  margin-top: 10px;
}

}
@media only screen 
  and (min-device-width:480px) 
  and (max-device-width:620px)
{
.banner {
    background-image: url('../img/banner.jpg');
    height: 300px;
    background-position: 30px 120px 60px 30px;
    background-position-x: -219px !important;
}
#navlink, #nav_1_tab {
	width: 174px !important;
}
.nav-tabs li {
	width: 42% !important;
}
	.card {
	height: auto !important;
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

  #navlink, #nav_1_tab {
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
	height:auto !important;
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
	height:auto !important;
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
<div class="sr-sharebar sr-sb-vl sr-sb-right sr-sb-white"><div class="socializer a sr-32px sr-opacity sr-vertical sr-icon-white sr-pad"><span class="sr-facebook"><a href="https://www.facebook.com/share.php?u=https%3A%2F%2Fwww.aakashweb.com%2Fapps%2Fsocial-buttons-generator%2F&amp;t=Free%20Social%20Media%20Share%20Buttons%20Generator%20-%20Aakash%20Web" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></span><span class="sr-fbmessenger"><a href="fb-messenger://share?link=https%3A%2F%2Fwww.aakashweb.com%2Fapps%2Fsocial-buttons-generator%2F" target="_blank" title="Facebook messenger"><i class="fa fa-comment"></i></a></span><span class="sr-twitter"><a href="https://twitter.com/intent/tweet?text=Free%20Social%20Media%20Share%20Buttons%20Generator%20-%20Aakash%20Web%20-%20https%3A%2F%2Fwww.aakashweb.com%2Fapps%2Fsocial-buttons-generator%2F%20" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></span><span class="sr-email"><a href="mailto:?subject=Free%20Social%20Media%20Share%20Buttons%20Generator%20-%20Aakash%20Web&amp;body=%20-%20https%3A%2F%2Fwww.aakashweb.com%2Fapps%2Fsocial-buttons-generator%2F" target="_blank" title="Email"><i class="fa fa-envelope"></i></a></span><span class="sr-whatsapp"><a href="https://api.whatsapp.com/send?text=Free%20Social%20Media%20Share%20Buttons%20Generator%20-%20Aakash%20Web%20https%3A%2F%2Fwww.aakashweb.com%2Fapps%2Fsocial-buttons-generator%2F" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a></span><span class="sr-instagram"><a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></span></div></div>
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
        
           
     </div>     
  
</section>
<!--  -->
<div class="mt-3"></div>
<!-- property -->
	<section >
    <div class="container">
        <div class="row" id="row">
          
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              
                <div class="card">
                    <div class="banner">
                        <div class="banner_img">
                        {if $recordDetails.agent_photo_name}
							<img class="card-img-top "  id="card-img-top" src="cards/{$agentDetails.user_key}/{$recordDetails.record_key}/{$recordDetails.agent_photo_key}/{$recordDetails.agent_photo_name}" class="img-fluid">
						{else}
							<img class="card-img-top "  id="card-img-top" src="img/agent.png" class="img-fluid">
						{/if}
						</div>
                    </div>
                    
                   <div class="mt-5"></div>
                   <div id="card-agent-view">
                            <div class="cardbody" id="card_light_bg">
                                <div class="container mt-3">
                                   <div class="row">
                                       
                                     
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div>
                                            <div class="verify-icon">Verified Agent
                                                <img src="img/warranty-icon-36.png" class="verify-img">
                                          </div>
                                                <div class="ul-points">
                                                        
                                                    <div class="ul-points1" >
                                                        points: {if $points} {$points} {else} No Points Yet{/if}
                                                    </div>
                                                    <div class="ul-points2">
                                                   <!--  No.of Dealings:10000 -->
                                                    </div>
                                                </div>
                                        </div >
                                           
                                       </div>
                                    </div>
                                    <br>
                                    <!-- Nav tabs -->
                                 <ul class="nav nav-tabs">
                                    
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#About">About Me</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#listing">listiing</a>
                                    </li> -->
                                    </ul>
                                
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                    
                                    <div id="About" class="container tab-pane fade active show"><br>
                                    
                               <div class="container">
							        <div class="row">
										<div class="col-lg-3 col-md-3 col-sm-6 col-6">
										Name:
										</div>
										<div class="col-lg-9 col-md-9 col-sm-6 col-6">
										  {$agentDetails.agent_name}
										</div>
                                    
                                    </div>
									 <div class="row">
										<div class="col-lg-3 col-md-3 col-sm-6 col-6">
										Contact :
										</div>
										<div class="col-lg-9 col-md-9 col-sm-6 col-6">
										  {$agentDetails.contact_number}
										</div>
                                    
                                    </div>
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-6 col-6">
										Email:
										</div>
										<div class="col-lg-9 col-md-9 col-sm-6 col-6">
										 {$agentDetails.user_name}
										</div>
                                    
                                    </div>
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-6 col-6">
										District:
										</div>
										<div class="col-lg-9 col-md-9 col-sm-6 col-6">
										 {$agentDetails.district}
										</div>
                                    
                                    </div>
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-6 col-6">
										Panchayath:
										</div>
										<div class="col-lg-9 col-md-9 col-sm-6 col-6">
										  {$agentDetails.panchayat}
										</div>
                                    
                                    </div>
							</div>
                                    </div>
                                    <div id="listing" class="container tab-pane fade"><br>
                                         <!-- <ul class="ul-view-agent">
                                              <li><a><i class="fa fas fa-solid fa-phone mr-2"></i><span>{if $agentDetails.contact_number} {$agentDetails.contact_number} {else} Contact Number not updated yet {/if}</span></a></li>
                                              <li><a> <i class="fa fas fa-solid fa-envelope mr-2"></i></i><span>{if $agentDetails.user_name} {$agentDetails.user_name} {else} E not updated yet {/if}</span></a></li>
                                              <li><a><i class="fa fas fa-solid fa-location-pin mr-2"></i><span id="agent-li">quis nostrud exercitation<br> ullamco laboris nisi<br> ut aliquip ex</span></a></li>
                                          </ul> -->
										  <p>Lorem text</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
						
                   </div>
                    
                  </div>
                
            </div>
               
          </div>
    </div>
</section>
<!---->
<div class="mt-3"></div>

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
