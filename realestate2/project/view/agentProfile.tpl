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
    background-color: #abafb342 !important;
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 508px;
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
    .card {
    background: linear-gradient(152deg, #000000, #24232300);
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 260px !important;
}
}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
{
    .card {
    background: linear-gradient(152deg, #000000, #24232300);
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 320px !important;
}
}
@media only screen 
  and (min-device-width:480px) 
  and (max-device-width:620px)
{
    .card {
    background: linear-gradient(152deg, #000000, #24232300);
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 480px !important;
}
}
@media only screen 
  and (min-device-width:620px) 
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
					
					
					<a class="nav-link" href="logout.php">LOGOUT</a>	
					
					{else}	
						<a class="nav-link" href="login.php">LOGIN</a>	
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
						     <div class="col-lg-6 col-md-6 col-sm-6 col-6">
							      <h6> No.of Dealing :<span class="ml-2">3000</span></h6>
							 </div>
							 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
							       <h6> <img src="img/coin.png" width="20px" height="20px"><span class="ml-2">{if $points} {$points} {/if}</span></h6>
							 </div>
						      
						 </div>
					</div>
					
					
                        <div class="card-body ">
                            <form action="" method="post">
									<input type="hidden" name="act" value="updateAgent">
									<input type="hidden" name="key" value="{$agentDetails.agent_key}">
									
									<div class="mt-4"></div>
									<div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div id="img-property"> 
											{if $recordDetails}
												{if $recordDetails.agent_photo_name}
													<img src="cards/{$agentDetails.user_key}/{$recordDetails.record_key}/{$recordDetails.agent_photo_key}/{$recordDetails.agent_photo_name}" class="img-fluid">
												{else}
													<img src="img/agent.png" class="img-fluid"><br>
													<div style="font-size:13px;color:red;"> Please update Photo </div>
												{/if}
											{else}
												<img src="img/agent.png" class="img-fluid"><br>
												<div style="font-size:13px;color:red;"> Please update Photo </div>
											{/if}
											</div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                           <div id="img-property">  
											{if $recordDetails}
												{if $recordDetails.agent_aadhar_name}
													<img src="cards/{$agentDetails.user_key}/{$recordDetails.record_key}/{$recordDetails.agent_aadhar_key}/{$recordDetails.agent_aadhar_name}" class="img-fluid">
												{else}
													<img src="img/aadhar.png" class="img-fluid"> <br>
													<div style="font-size:13px;color:red;"> Please update Aadhar </div>
												{/if}
											{else}
												<img src="img/aadhar.png" class="img-fluid"> <br>
												<div style="font-size:13px;color:red;"> Please update Aadhar </div>
											{/if}
										   </div>
                                        </div>
                                    </div>
									<div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label  float-left">Agent Name</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="agentname" value="{$agentDetails.agent_name}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label  float-left">Email id</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="username" {if $agentDetails.user_name} value="{$agentDetails.user_name}" {else}  placeholder="Email ID" {/if} class="form-control" >
                                        </div>
                                    </div>
                                   
                                    <div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label  float-left">Contact number</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="agentphone" {if $agentDetails.contact_number} value="{$agentDetails.contact_number}" {else}  placeholder="Contact Number" {/if} class="form-control">
                                        </div>
                                    </div>
                                    <div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label float-left">Agent District</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
											<input type="text" name="agentdistrict" {if $agentDetails.district} value="{$agentDetails.district}" {else}  placeholder="Not updated yet" {/if} class="form-control">
                                         </div>
                                    </div>
                                    <div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label float-left">Agent Panchayath</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
											<input type="text" name="agentPanchayath" {if $agentDetails.panchayat} value="{$agentDetails.panchayat}" {else}  placeholder="Not updated yet" {/if} class="form-control">
                                        
                                        </div>
                                    </div>
                                    
                                  <div class="mt-4"></div>
                                    
                            </form>
                        </div>
                    </div>
                
            </div>
               
          </div>
    </div>
</section>
<!-- property -->
<section>
    <div class="container">
		<table class="table table-hover table-borderless table-responsive" id="table-id">
                            <thead>
                                <tr>
                                     <th class="text-center ">Client Name</th>
                                     <th class="text-center"> District</th>
                                     <th class="text-center">Panchayath</th>
                                    <th class="text-center">Property title</th>
                                    <th class="text-center">Property photo</th>
                                    <th class="text-center">Status</th>
									<th class="text-center">Edit</th>
									<th class="text-center">Delete</th>
                                </tr>
                            </thead>
							{if $properties}
                            <tbody>
							{foreach from=$properties item=property}
                                <tr>
                                
                                    <th class="text-center font-weight-light">{if $property.Client_Name}{$property.Client_Name} {else} Not updated yet {/if}<br> {if $property.Client_Number } [ {$property.Client_Number} ] {else} Not updated yet {/if}</th>
                                     <th class="text-center font-weight-light"> {$property.district}</th>
                                     <th class="text-center font-weight-light">{$property.panchayath}</th>
                                    <th class="text-center font-weight-light"><a href="propertyDetails.php?key={$property.property_key}">{$property.property_name}</a></th>
                                    <td class="text-center">      
                                           <a href="propertyDetails.php?key={$property.property_key}"> 
											<img src="uploads/{$property.property_key}/{$property.property_image}/{$property.image_name}" class="img-myproperty" />
                                            </a>
     
                                    </td>
                                    <td class="text-center">
                                        <ul class="nav justify-content-center">
                                                <li class="nav-item ">
												{if $property.property_status=='1'}
                                                    <a class="nav-link text-success btn" href="deActivatePropertyByAdmin.php?key={$property.property_key}&u={$agentKey}">De Activate</a>
												{else}
													<a class="nav-link text-danger btn" href="activatePropertyByAdmin.php?key={$property.property_key}&u={$agentKey}">Activate</a>
												{/if}
                                                </li>
                                               
                                        
                                        </ul>
                                        
                                    </td>
									<td class="text-center">
                                        <ul class="nav justify-content-center">
                                                <li class="nav-item ">
												
													<a class="nav-link text-danger btn" href="editPropertyByAdmin.php?key={$property.property_key}">Edit</a>
												
                                                </li>
                                               
                                        
                                        </ul>
                                        
                                    </td>
									<td class="text-center">
                                        <ul class="nav justify-content-center">
                                                <li class="nav-item ">
													{if $property.property_status=='1'}
													<a class="nav-link text-danger btn" href="deleteActivePropertyByAdmin.php?key={$property.property_key}&u={$agentKey}">Delete</a>
													{else}
													<a class="nav-link text-danger btn" href="deleteInActivePropertyByAdmin.php?key={$property.property_key}&u={$agentKey}">Delete</a>
													{/if}
                                                </li>
                                               
                                        
                                        </ul>
                                        
                                    </td>
                                </tr>
                            {/foreach}    
                             </tbody>
							 {else}
							 <div class="col-lg-12 col-md-12 col-sm-12 col-12">
								
									<div class="box text-center">
                               
										<h6 class=" bg-light bg_light">There is no Properties published Yet</h6>
									</div>
									
							   </div>
							 
							 {/if}
                    </table>
	</div>
<section>
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