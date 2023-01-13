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
.card_1 {
	background: #abafb342;
	/* padding: 5px 5px 0px 0px; */
	/* margin-top: -1px; */
	border-top-right-radius: 10px;
	border-top-left-radius: 11px;
	width: 100%;
	padding-top: 15px;
	padding-bottom: 15px;
}
.card {
    background-color: #ffffff ;
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 600px;
}
#row
{
    text-align: -webkit-center;
    text-align: -moz-center;
}
.form-label
{
    color: #333232;
    font-family: Montserrat;
}

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

    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    box-shadow: #0000008c -1px 3px 6px 0px !important;
   
}
@media only screen 
  and (min-device-width: 210px) 
  and (max-device-width:320px)
{
#col-mt
{
margin-top:0.5rem!important;
}
    .card {
    
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 260px !important;
}
.col-img-property
{
 margin-top:30px;
}

}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
{
#col-mt
{
margin-top:0.5rem!important;
}
    .card {
  
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 320px !important;
}
.col-img-property
{
 margin-top:30px;
}
}
@media only screen 
  and (min-device-width:480px) 
  and (max-device-width:620px)
{
#col-mt
{
margin-top:0.5rem!important;
}
    .card {
    
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 480px !important;
}
.col-img-property
{
 margin-top:30px;
}
}
@media only screen 
  and (min-device-width:620px) 
  and (max-device-width:820px)
  {
  #col-mt
{
margin-top:0.5rem!important;
}
  .col-img-property
{
 margin-top:30px;
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
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
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
					  <a class="nav-link" href="updatemyprofile.php">Edit My Profile</a>
					</li>
				   	
					<li class="nav-item">
					  <a class="nav-link" href="viewMyProfile.php">View My Profile</a>
					</li>
					
					<a class="nav-link" href="logout.php">Logout</a>	
					
					{else}	
						<a class="nav-link" href="login.php">Login</a>	
					{/if}
                  </li>
                 
                 
                </ul>
              </div>
          </nav>
      
    
    </header>
<!--  -->
<section id="section">
    <div class="container">
        
           
          
  
</section>
<!--  -->
<section>
    <div class="container">
        <div class="row" id="row">
          
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              
			  
                    <div class="card">
					<div class="card_1">
					     <div class="row">
						     <div class="col-lg-9 col-md-9 col-sm-9 col-9" style="color:#000000;font-weight:bold;">
							       Invoice Details  : {$invoiceDetails.0.public_key}
							 </div>
							 <div class="col-lg-3 col-md-3 col-sm-3 col-3">
							       <img src="img/handicon.png">
							 </div>
						      
						 </div>
					</div>
                        <div class="cardbody ">
						
						<div class="container">
						<div class"row">
						<div class="col-12 col-lg-12 col-md-12 col-sm-12">
					
                            <form action="" method="post" enctype="multipart/form-data">
									<input type="hidden" name="act" value="updateMyProfile">
									
									<div class="mt-4"></div>
									
									
									
									{if $invoiceDetails.0.agent_name}
									<div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6  class="text-left"><small>Name:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small  > {$invoiceDetails.0.agent_name}</small></h6>
											</div>
								    </div>
									{/if}
									<div class="mt-2"></div>
								   {if $invoiceDetails.0.contact_number}	
                                   <div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6  class="text-left"><small>Contact No:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small>{$invoiceDetails.0.contact_number}</small></h6>
											</div>
								    </div>
									{/if}
									<div class="mt-2"></div>
									{if $invoiceDetails.0.district_name}
                                     <div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>District :</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small>{$invoiceDetails.0.district_name}</small></h6>
											</div>
								    </div>
									{/if}
									<div class="mt-2"></div>
                                     {if $invoiceDetails.0.panchayath_name}
									 <div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>Panchayath:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small>{$invoiceDetails.0.panchayath_name}</small></h6>
											</div>
								    </div>
									{/if}
									<div class="mt-5"></div>
									{if $invoiceDetails.0.public_key}
								    <div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>Invoice Number:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small>{$invoiceDetails.0.public_key}</small></h6>
											</div>
								    </div>
									{/if}
									<div class="mt-2"></div>
									{if $invoiceDetails.0.amount}
								    <div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>Pending Amount:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small>{$invoiceDetails.0.amount}</small></h6>
											</div>
								    </div>
									{/if}
									<div class="mt-2"></div>
									{if $invoiceDetails.0.created_on}
								    <div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>Created On:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small>{$invoiceDetails.0.created_on}</small></h6>
											</div>
								    </div>
									{/if}
									<div class="mt-2"></div>
									{if $invoiceDetails.0.expired_on}
									<div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>Expired On:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small>1-12-22</small></h6>
											</div>
								    </div>
									{/if}
									<div class="mt-2"></div>
									{if $invoiceDetails.0.description}
									<div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>Description:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small>{$invoiceDetails.0.description}</small></h6>
											</div>
								    </div>
									{/if}
									
												 
												 <div class="row">
												 <form action="" method="POST">
													<input type="hidden" name="act" value="payInvoice">
													<input type="hidden" name="key" value="invoiceKey">
													
													 <div class="col-lg-4 col-sm-12 col-md-4 col-12">
													   <td> Payment:</td>
													 </div>
													 <div class="col-lg-4 col-sm-12 col-md-4 col-12" id="col-mt">
													 <input type="text" class="form-control form-control-sm" name="amount" value="{$invoiceDetails.0.amount}">
													 </div>
													 <div class="col-lg-4 col-sm-12 col-md-4 col-12" id="col-mt">
													 <!-- <button class="btn btn-sm sm-btn btn-secondary">Mark as Paid</button> -->
													 </div>
												</form>	 
												 </div>
                                     
                                    </div>
									
                                  
                                  <div class="mt-4"></div>
								  
                            </form>
							</div>
							</div>
							<div>
                        </div>
                    </div>
                
            </div>
               
          </div>
    </div>
</section>
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
