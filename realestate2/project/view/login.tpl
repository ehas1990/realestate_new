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
  #nav-tab
  {
  margin-left:20px;
  }
    .nav-tabs {
	border-bottom: 0px solid #dee2e6 !important;
}
 .card {
    background: linear-gradient(152deg, #000000, #24232300);
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
    color: #ffffff;
    font-family: Montserrat;
}
#section1
{
background-image: url('./img/70.jpg');
    
    background-size: cover;
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
    width:263px !important;
}

	#section1 {
	background-image: url('./img/70.jpg');
	background-size: 500% !important ;
	background-repeat: no-repeat;
	
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
    width:263px !important;
}
	#section1 {
	background-image: url('./img/70.jpg');
	background-size:500% !important;
	background-repeat: no-repeat;
	
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
    width:263px !important;
}
	#section1 {
	background-image: url('./img/70.jpg');
	background-size:500% !important;
	background-repeat: no-repeat;
	
}
}
@media only screen 
  and (min-device-width:620px) 
  and (max-device-width:720px)
  {
   .card {
    background: linear-gradient(152deg, #000000, #24232300);
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width:460px !important;
}
	#section1 {
	background-image: url('./img/70.jpg');
	background-size:500% !important;
	background-repeat: no-repeat;
	background-position-x: -471px;
}
}
@media only screen 
  and (min-device-width:720px) 
  and (max-device-width:820px)
  {
     .card {
    background: linear-gradient(152deg, #000000, #24232300);
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width:460px !important;
}
	#section1 {
	background-image: url('./img/70.jpg');
	background-size:500% !important;
	background-repeat: no-repeat;
	background-position-x:-706px;
}
}
@media only screen 
  and (min-device-width:820px) 
  and (max-device-width:1200px)
  {
       .card {
    background: linear-gradient(152deg, #000000, #24232300);
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width:460px !important;
}
	#section1 {
	background-image: url('./img/70.jpg');
	background-size:500% !important;
	background-repeat: no-repeat;
	background-position-x:-706px;
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
<body id="section1">

<!--  -->
<section >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="  text-align: -webkit-center"> 
                    <div id="card-gradient">
                        <div id="cardbody">
                           <!-- <img src="img/agent2.jpg"  id="card-body"> -->
                           <h3></h3>
                        </div>
                    </div>
            </div>
        </div>
        <div class="mt-4"></div>
          <div class="row" id="row">
          
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              
                    <div class="card">
                        <div class="card-body">
						{if $displayMessage==1}
							{if $message}	
								{if $color=="green"}
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
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs justify-content-center">
                                  <li class="nav-item text-white">
                                    <a class="nav-link active btn " id="nav-tab" data-toggle="tab" href="#login">Login</a>
                                  </li>
                                  <li class="nav-item text-white">
                                    <a class="nav-link btn" id="nav-tab" data-toggle="tab" href="#signup">SignUp</a>
                                  </li>
                                  
                                </ul>
                              
                                <!-- Tab panes -->
                                <div class="tab-content">
                                  <div id="login" class="container tab-pane  active"><br>
										 
                                         <form action="" method="post">
												<input type="hidden" name="act" value="Login">
                                                 <div class="row">
														
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                             <input type="text" name="username" placeholder="e-Mail" class="form-control">
                                                        </div>
                                                        <div class="mt-5"></div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <input type="password" name="password" placeholder="Password" class="form-control">
                                                       </div>
													  
                                                       <div class="mt-5"></div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
														   
                                                            <div class="text-center">
                                                                <input type="submit" value="Submit"  class="btn btn-danger">
                                                            </div>
                                                           
                                                       </div>
													  
															
													  
													  
                                                 </div>
                                         </form>
                                  </div>
                                  <div id="signup" class="container tab-pane fade"><br>
                                    <form action="" method="post">
										<input type="hidden" name="act" value="SignUp">
                                        <div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                             <input type="text" name="name" placeholder="Your Name"  class="form-control">
                                                </div>
												<div class="mt-5"></div>
                                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <input type="text" name="username" placeholder="e-Mail" class="form-control">
                                               </div>
                                               <div class="mt-5"></div>
                                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                   <input type="password" name="password" placeholder="password" class="form-control">
                                              </div>
											   <div class="mt-5"></div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <input type="password" name="repassword" placeholder="Retype Password" class="form-control">
                                                       </div>
                                              <div class="mt-5"></div>
                                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                   <input type="text" name="phone" placeholder="Contact Number" class="form-control">
                                              </div>
											  <div class="mt-5"></div>
											   <div class="col-lg-12 col-md-12 col-sm-12 col-12">
													
														
														<select name="plan" class="form-control ms-2">
														{if $plans}
															
															{foreach from=$plans item=p}
																<option value="{$p.plan_key}">{$p.plan}</option>
															{/foreach}
														{else}
															<option value="x">Empty Plan List</option>
														{/if}	
														</select>   
													
												</div>
												
												<div class="mt-5"></div>
												
											        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
													
														
														<select name="district" class="form-control district ms-2"  id="district">
														{if $districts}
															<option value="x">Select District</option>
															{foreach from=$districts item=district}
																<!-- <option value="{$district.district_key}">{$district.district_name}</option> -->
																<option value="{$district.district_key}">{$district.district_name}</option>
																
															{/foreach}
														{else}
															<option value="x">Empty District List</option>
														{/if}	
														</select>   
												
												    </div>
											    
												<div class="mt-5"></div>
												
															
															<div class="col-lg-12 col-md-12 col-sm-12 col-12">
																<select name="panchayath" class="form-control" id="show_panchayath">
																	<option value="X">Select Panchayath</option>
																</select>
												
											  <div class="mt-5"></div>
                                              
                                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                   <div class="text_right">
                                                       <input type="submit" value="Submit"  class="btn btn-danger">
                                                   </div>
                                                  
                                              </div>
											  
                                        </div>
                                </form>
                                  </div>
                                
                                </div>
                              
                        </div>
                    </div>
                
            </div>
               
          </div>
    </div>
</section>
<!--  -->
<div class="mt-3"></div>
<!-- property -->
       
<!-- footer -->
<div class="mt-3"></div>


<!-- end Property -->
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.esm.js"></script>
<script src="js/bootstrap.esm.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
