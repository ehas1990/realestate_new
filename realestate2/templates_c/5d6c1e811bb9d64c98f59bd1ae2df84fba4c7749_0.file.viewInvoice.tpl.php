<?php
/* Smarty version 3.1.36, created on 2023-01-13 04:34:25
  from '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/viewInvoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63c0df517e9a05_41877592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d6c1e811bb9d64c98f59bd1ae2df84fba4c7749' => 
    array (
      0 => '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/viewInvoice.tpl',
      1 => 1673584456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c0df517e9a05_41877592 (Smarty_Internal_Template $_smarty_tpl) {
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
  <?php echo '<script'; ?>
>
	function confirmBeforeDelete() {
	  confirm("Are you Sure to Delete This Invoice ?");
	}
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
                   <?php if ($_smarty_tpl->tpl_vars['user_logined']->value == true) {?>
					<li class="nav-item">
					  <a class="nav-link" href="updatemyprofile.php">Edit My Profile</a>
					</li>
				   	
					<li class="nav-item">
					  <a class="nav-link" href="viewMyProfile.php">View My Profile</a>
					</li>
					
					<a class="nav-link" href="logout.php">Logout</a>	
					
					<?php } else { ?>	
						<a class="nav-link" href="login.php">Login</a>	
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
						     <div class="col-lg-9 col-md-9 col-sm-9 col-9" style="color:#000000;font-weight:bold;">
							       Invoice Details  : <?php echo $_smarty_tpl->tpl_vars['invoiceDetails']->value['public_key'];?>

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
									<input type="hidden" name="act" value="markUsComplete">
									<input type="hidden" name="invoice_key" value="<?php echo $_smarty_tpl->tpl_vars['invoiceDetails']->value['invoice_key'];?>
">
									
									<div class="mt-4"></div>
									
									
									
									<?php if ($_smarty_tpl->tpl_vars['invoiceDetails']->value['agent_name']) {?>
									<div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6  class="text-left"><small>Name:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small  > <?php echo $_smarty_tpl->tpl_vars['invoiceDetails']->value['agent_name'];?>
</small></h6>
											</div>
								    </div>
									<?php }?>
									<div class="mt-2"></div>
								   <?php if ($_smarty_tpl->tpl_vars['invoiceDetails']->value['contact_number']) {?>	
                                   <div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6  class="text-left"><small>Contact No:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small><?php echo $_smarty_tpl->tpl_vars['invoiceDetails']->value['contact_number'];?>
</small></h6>
											</div>
								    </div>
									<?php }?>
									<div class="mt-2"></div>
									<?php if ($_smarty_tpl->tpl_vars['invoiceDetails']->value['district_name']) {?>
                                     <div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>District :</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small><?php echo $_smarty_tpl->tpl_vars['invoiceDetails']->value['district_name'];?>
</small></h6>
											</div>
								    </div>
									<?php }?>
									<div class="mt-2"></div>
                                     <?php if ($_smarty_tpl->tpl_vars['invoiceDetails']->value['panchayath_name']) {?>
									 <div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>Panchayath:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small><?php echo $_smarty_tpl->tpl_vars['invoiceDetails']->value['panchayath_name'];?>
</small></h6>
											</div>
								    </div>
									<?php }?>
									<div class="mt-5"></div>
									<?php if ($_smarty_tpl->tpl_vars['invoiceDetails']->value['public_key']) {?>
								    <div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>Invoice Number:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small><?php echo $_smarty_tpl->tpl_vars['invoiceDetails']->value['public_key'];?>
</small></h6>
											</div>
								    </div>
									<?php }?>
									<div class="mt-2"></div>
									<?php if ($_smarty_tpl->tpl_vars['invoiceDetails']->value['amount']) {?>
								    <div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>Pending Amount:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small><?php echo $_smarty_tpl->tpl_vars['invoiceDetails']->value['amount'];?>
</small></h6>
											</div>
								    </div>
									<?php }?>
									<div class="mt-2"></div>
									<?php if ($_smarty_tpl->tpl_vars['invoiceDetails']->value['created_on']) {?>
								    <div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>Created On:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small><?php echo $_smarty_tpl->tpl_vars['invoiceDetails']->value['created_on'];?>
</small></h6>
											</div>
								    </div>
									<?php }?>
									<div class="mt-2"></div>
									<?php if ($_smarty_tpl->tpl_vars['invoiceDetails']->value['expired_on']) {?>
									<div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>Expired On:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small>1-12-22</small></h6>
											</div>
								    </div>
									<?php }?>
									<div class="mt-2"></div>
									<?php if ($_smarty_tpl->tpl_vars['invoiceDetails']->value['description']) {?>
									<div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>Description:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small><?php echo $_smarty_tpl->tpl_vars['invoiceDetails']->value['description'];?>
</small></h6>
											</div>
								    </div>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['invoiceDetails']->value['amount']) {?>
									<div class="row">
                                  
											<div class="col-lg-5 col-md-5 col-sm-5 col-5">
													<h6 class="text-left"><small>Amount:</small></h6>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-7 col-7">
												   <h6 class="text-left"><small><?php echo $_smarty_tpl->tpl_vars['invoiceDetails']->value['amount'];?>
</small></h6>
											</div>
								    </div>
									<?php }?>
									
									<div class="row">
											
											
											
											<div class="col-lg-12 col-md-12 col-sm-12 col-12">
													<h6 class="text-left"><small></small></h6>
													<input type="submit" value="Mark as Paid">
											</div>
											
								    </div>
									<div class="mt-2"></div>
									<div class="row">
											
											
											
											<div class="col-lg-12 col-md-12 col-sm-12 col-12">
													<h6 class="text-left"><small></small></h6>

													<a href="deleteinvoice.php?key=<?php echo $_smarty_tpl->tpl_vars['invoiceDetails']->value['invoice_key'];?>
" style="border:1px solid #000000;padding:1px;color:red;font-size:10px;" onclick="confirmBeforeDelete()">DELETE THIS INVOICE</a>
											</div>
											
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