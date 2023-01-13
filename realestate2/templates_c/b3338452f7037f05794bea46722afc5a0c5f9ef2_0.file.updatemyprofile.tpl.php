<?php
/* Smarty version 3.1.36, created on 2022-12-20 09:22:40
  from '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/updatemyprofile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63a17ee09a3f45_40833990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3338452f7037f05794bea46722afc5a0c5f9ef2' => 
    array (
      0 => '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/updatemyprofile.tpl',
      1 => 1670307864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a17ee09a3f45_40833990 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
  <!-- <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"><?php echo '</script'; ?>
> -->
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  <!--  -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel=" stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/media.css" type="text/css">
  <!--  -->
  <style>
  .form-label {
	color: #333232;
	font-family: Montserrat;
	float: left;
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
    
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 254px !important;
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
    width: 288px !important;
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
	height:930px !important;
}
}
@media only screen 
  and (min-device-width:620px) 
  and (max-device-width:820px)
  {
  }
  </style>
  
  
  <?php echo '<script'; ?>
>
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
  <?php echo '</script'; ?>
>
  
  
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
                <li class="nav-item">
                  <a class="nav-link" href="contactus.php">CONTACT</a>
                </li>
              </ul>
            </div>
            <!--  -->
            
                    <a class="navbar-brand " href="index.php"><img src="img/logo.png" class="logo-img" alt="LOGO"></a>
            
            
            <!--  -->
            <div class="collapse navbar-collapse justify-content" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  
                  <li class="nav-item">
                   <?php if ($_smarty_tpl->tpl_vars['user_logined']->value == true) {?>
					<li class="nav-item">
					  <a class="nav-link" href="updatemyprofile.php">EDIT MY PROFILE</a>
					</li>
				   	
					<li class="nav-item">
					  <a class="nav-link" href="viewMyProfile.php">VIEW MY PROFILE</a>
					</li>
					
					<a class="nav-link" href="logout.php">LOGOUT</a>	
					
					<?php } else { ?>	
						<a class="nav-link" href="login.php">LOGIN</a>	
					<?php }?>
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
						
						<?php if ($_smarty_tpl->tpl_vars['displayMessage']->value == 1) {?>
						
							<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
						
								<?php if ($_smarty_tpl->tpl_vars['color']->value == "green") {?>
							
								<div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                 </button>
								</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['color']->value == "red") {?>
						
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                 </button>
								</div>
								<?php }?>
							<?php }?>
						<?php }?>
						
                            <form action="" method="post" enctype="multipart/form-data">
									<input type="hidden" name="act" value="updateMyProfile">
									
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label  float-left">Agent Name</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="agentname" value="<?php echo $_smarty_tpl->tpl_vars['agentDetails']->value['agent_name'];?>
" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label  float-left">Email id</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="username" <?php if ($_smarty_tpl->tpl_vars['agentDetails']->value['user_name']) {?> value="<?php echo $_smarty_tpl->tpl_vars['agentDetails']->value['user_name'];?>
" <?php } else { ?>  placeholder="Email ID" <?php }?> class="form-control">
                                        </div>
                                    </div>
                                    <div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label  float-left">Password</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="password" placeholder="Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label  float-left">Repeat Password</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="repeatpassword" placeholder="Repeat password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label  float-left">Contact number</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="agentphone" <?php if ($_smarty_tpl->tpl_vars['agentDetails']->value['contact_number']) {?> value="<?php echo $_smarty_tpl->tpl_vars['agentDetails']->value['contact_number'];?>
" <?php } else { ?>  placeholder="Contact Number" <?php }?> class="form-control">
                                        </div>
                                    </div>
                                    <div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label float-left">Agent District</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
											<?php if ($_smarty_tpl->tpl_vars['districts']->value) {?>
                                             <select class="form-control" name="district" id="district">
                                                     <option value="x">Please Select District</option>
													 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['districts']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
														<?php if ($_smarty_tpl->tpl_vars['d']->value['district_key'] == $_smarty_tpl->tpl_vars['agentDetails']->value['district_key']) {?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['district_key'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['d']->value['district_name'];?>
</option>
														<?php } else { ?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['district_key'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['district_name'];?>
</option>
														<?php }?>
													 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                             </select>
											<?php } else { ?>
												Please Add Districts from Admin Panel
											<?php }?>
                                        </div>
                                    </div>
                                    <div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label float-left">Agent Panchayath</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
											<select name="panchayath" class="form-control" id="show_panchayath">
												<?php if ($_smarty_tpl->tpl_vars['agentDetails']->value['panchayat_key']) {?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['agentDetails']->value['panchayat_key'];?>
"><?php echo $_smarty_tpl->tpl_vars['agentDetails']->value['panchayat'];?>
</option>
													
												<?php } else { ?>
													<option value="X">Select Panchayath</option>
												<?php }?>
											</select>
                                        </div>
                                    </div>
                                    
                                  <div class="mt-4"></div>
								  
								   <div class="mt-4"></div>
									<div class="row">
										   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												 <label class="form-label">Upload Photo</label>
										   </div>
										   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												 <input type="file" name="myphoto" placeholder="Your Photo" class="form-control">
										   </div>
									 </div>
								    
									
								   <div class="mt-4"></div>
									<div class="row">
										   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												 <label class="form-label">Upload Your Aadhar</label>
										   </div>
										   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												 <input type="file" name="aadhar" placeholder="Your Aadhar" class="form-control">
										   </div>
									 </div>
									<div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="float_right">
                                                <input type="submit" name="submit" value="submit" class="btn btn-danger btn-sm sm-btn">
                                            </div>
                                           
                                        </div>
                                    </div>
                            </form>
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
<?php echo '<script'; ?>
 src="js/bootstrap.bundle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.esm.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.esm.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
