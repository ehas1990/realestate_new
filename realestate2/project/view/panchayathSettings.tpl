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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
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
.card {
    background-color: #abafb342 !important;
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 508px;
	height:auto !important;
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
   
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 260px !important;
	height:auto !important;
}
}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
{
    .card {

    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 320px !important;
	height:auto !important;
}
}
@media only screen 
  and (min-device-width:480px) 
  and (max-device-width:620px)
{
    .card {
 
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 480px !important;
	height:auto !important;
}
}
@media only screen 
  and (min-device-width:620px) 
  and (max-device-width:820px)
  {
  .card {
 
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 480px !important;
	height:auto !important;
}
  }
  @media only screen 
  and (min-device-width:820px) 
  and (max-device-width:1200px)
  {
  .card {
 
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 480px !important;
	height:auto !important;
}
  }
  </style>
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
					
					<li class="nav-item">
					<a class="nav-link" href="logout.php">LOGOUT</a>	
					</li>
					{else}	
					<li class="nav-item">
						<a class="nav-link" href="login.php">LOGIN</a>	
					</li>
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
                        <div class="card-body ">
						
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
                            <form action="" method="post">
									<input type="hidden" name="act" value="addPanchayath">
									<div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label  float-left">Panchayath Name</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="panchayathname" value="" class="form-control">
                                        </div>
                                    </div>
									
                                   <div class="mt-4"></div>
								   {if $districts}
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12 col-12">
												<label class="form-label float-left">Agent District</label>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12 col-12">
												
												 <select class="form-control" name="district">
														 <option value="x">Please Select District</option>
														 {foreach from=$districts item=d}
															<option value="{$d.district_key}">{$d.district_name}</option>
														 {/foreach}
												 </select>
												
											</div>
										</div>
                                    <div class="mt-4"></div>
                                    {else}
											Please Add Districts from Admin Panel first..
									{/if}
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="float_right">
                                                <input type="submit" name="submit" value="submit" class="btn btn-danger btn-sm sm-btn">
                                            </div>
                                           
                                        </div>
                                    </div>
                            </form>
                        </div>
						
						<div class="card-body ">
						{if $districtPanchayaths}	
							<table class="table table-hover table-borderless table-responsive" id="table-id">
								<thead>
									<tr>
										 <th class="text-center">Panchayath</th>
										<th class="text-center">Edit</th>
										<th class="text-center">Action</th>
										
									</tr>
								</thead>
								
								<tbody>
								
								{foreach from=$districtPanchayaths item=panchayath}
								
									<tr>
									
										<td class="text-center">{$panchayath.panchayath_name} - [ {$panchayath.district} ]</a></td>
										<td class="text-center"><a href="editPanchayath.php?key={$panchayath.panchayath_key}">Edit </a></td>
										{if $panchayath.panchayath_popular==0}
											<td class="text-center"><a href="markPopularPanchayath.php?key={$panchayath.panchayath_key}">Mark as Popular </a></td>
										{else}
											<td class="text-center"><a href="markPopularPanchayath.php?key={$panchayath.panchayath_key}" style="color:red;">Mark as Normal </a></td>
										{/if}
									</tr>
								
								{/foreach}					 
								</tbody>
							
							</table>
							{else}
								<div class="emptyBox">
									There is no Panchayaths added yet.
								</div>
							{/if}
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
					        <li class="link"><a href="index.php">Home</a></li>
                            <li class="link"><a href="#">About Us</a></li>
                            <li class="link"><a href="contactus.php">Contact Us</a></li>
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