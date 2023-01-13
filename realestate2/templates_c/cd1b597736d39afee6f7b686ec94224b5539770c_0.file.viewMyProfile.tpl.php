<?php
/* Smarty version 3.1.36, created on 2022-12-20 09:22:38
  from '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/viewMyProfile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63a17edeb39992_39204051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd1b597736d39afee6f7b686ec94224b5539770c' => 
    array (
      0 => '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/viewMyProfile.tpl',
      1 => 1670307790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a17edeb39992_39204051 (Smarty_Internal_Template $_smarty_tpl) {
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
    background-color: #abafb342 ;
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
  .col-img-property
{
 margin-top:30px;
}
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
					<div class="card_1">
					     <div class="row">
						     <div class="col-lg-6 col-md-6 col-sm-6 col-6">
							      <h6><!--  No.of Dealing :<span class="ml-2">3000 --></span>
								   <br>
								  <?php if ($_smarty_tpl->tpl_vars['myBalance']->value) {?>	Balance Amount : <?php echo $_smarty_tpl->tpl_vars['myBalance']->value;?>
	<?php }?>
								  </h6>
							 </div>
							 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
							       <h6> <img src="img/coin.png" width="20px" height="20px"><span class="ml-2"><?php if ($_smarty_tpl->tpl_vars['points']->value) {?> <?php echo $_smarty_tpl->tpl_vars['points']->value;?>
 <?php }?></span><br> <a href="viewMyPoints.php">View Point History</a></h6>
							 </div>
						      
						 </div>
					</div>
                        <div class="card-body ">
						
						
						
                            <form action="" method="post" enctype="multipart/form-data">
									<input type="hidden" name="act" value="updateMyProfile">
									
									<div class="mt-4"></div>
									
									
									<div class="mt-4"></div>
									<div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div id="img-property"> 
											<?php if ($_smarty_tpl->tpl_vars['recordDetails']->value['agent_photo_name']) {?>
											<img src="cards/<?php echo $_smarty_tpl->tpl_vars['userKey']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['recordDetails']->value['record_key'];?>
/<?php echo $_smarty_tpl->tpl_vars['recordDetails']->value['agent_photo_key'];?>
/<?php echo $_smarty_tpl->tpl_vars['recordDetails']->value['agent_photo_name'];?>
" class="img-fluid">
										    <?php } else { ?>
											<img src="img/agent.png" class="img-fluid">
											<?php }?>
										   </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 col-img-property">
                                           <div id="img-property"> 
											<?php if ($_smarty_tpl->tpl_vars['recordDetails']->value['agent_aadhar_name']) {?>
											<img src="cards/<?php echo $_smarty_tpl->tpl_vars['userKey']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['recordDetails']->value['record_key'];?>
/<?php echo $_smarty_tpl->tpl_vars['recordDetails']->value['agent_aadhar_key'];?>
/<?php echo $_smarty_tpl->tpl_vars['recordDetails']->value['agent_aadhar_name'];?>
" class="img-fluid">
										    <?php } else { ?>
											<img src="img/aadhar.png" class="img-fluid">
											<?php }?>
										   </div>
                                        </div>
                                    </div>
									
                                    <div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label  float-left"> Name</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="agentname" value="<?php echo $_smarty_tpl->tpl_vars['agentDetails']->value['agent_name'];?>
" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label  float-left">Email id</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="username" <?php if ($_smarty_tpl->tpl_vars['agentDetails']->value['user_name']) {?> value="<?php echo $_smarty_tpl->tpl_vars['agentDetails']->value['user_name'];?>
" <?php } else { ?>  placeholder="Email ID" <?php }?> class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="mt-4"></div>
                                   
                                   
                                    <div class="mt-4"></div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label  float-left">Contact number</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="agentphone" <?php if ($_smarty_tpl->tpl_vars['agentDetails']->value['contact_number']) {?> value="<?php echo $_smarty_tpl->tpl_vars['agentDetails']->value['contact_number'];?>
" <?php } else { ?>  placeholder="Contact Number" <?php }?> class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="mt-4"></div>
                                    
									<div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label  float-left">District</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="agentphone" <?php if ($_smarty_tpl->tpl_vars['agentDetails']->value['district']) {?> value="<?php echo $_smarty_tpl->tpl_vars['agentDetails']->value['district'];?>
" <?php } else { ?>  placeholder="Not Updated Yet" <?php }?> class="form-control" disabled>
                                        </div>
                                    </div>
									 <div class="mt-4"></div>
                                   <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="form-label  float-left">Panchayath</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="agentphone" <?php if ($_smarty_tpl->tpl_vars['agentDetails']->value['panchayat']) {?> value="<?php echo $_smarty_tpl->tpl_vars['agentDetails']->value['panchayat'];?>
" <?php } else { ?>  placeholder="Not Updated Yet" <?php }?> class="form-control" disabled>
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
                         <p>All rights reserved <a href="#">A2ZAlphabet Solution PVT.LTD</a></p>
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
