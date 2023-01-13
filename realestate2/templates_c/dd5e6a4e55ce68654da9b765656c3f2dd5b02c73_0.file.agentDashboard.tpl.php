<?php
/* Smarty version 3.1.36, created on 2023-01-13 04:22:21
  from '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/agentDashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63c0dc7d8c4849_40409804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd5e6a4e55ce68654da9b765656c3f2dd5b02c73' => 
    array (
      0 => '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/agentDashboard.tpl',
      1 => 1673583736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c0dc7d8c4849_40409804 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Mediatorkerala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
  <link rel=" styleheet" href="css/bootstrap-reboot.css" type="text/css">
  <link rel=" stylesheet" href="css/bootstrap-reboot.min.css" type="text/css">
  <link rel=" stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"><?php echo '</script'; ?>
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
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&amp;display=swap" rel="stylesheet">
  <link rel=" stylesheet" href="./css/style.css" type="text/css">
  <link rel="stylesheet" href="css/media.css" type="text/css">
  <style>
  #ml_3
  {
  margin-right:20px;
  }
  .welcome_box1 {
    background-color: #eeeeee;
    padding: 15px 0px;
    height: 43px;
}
  .textcenter {
	text-align: center;
	margin-bottom:5px;
}
    .btn-primary{
  background:#002f34 !important;
  border-color:#002f34 !important;
  }
 .welcome_box {
	background-color: #eeeeee;
	padding: 15px 0px;
	height: 134px;
}
  .textend
  {
  text-align:end;
  }
  .textcenter
  {
      text-align:center;
  }
  @media only screen 
  and (min-device-width: 210px) 
  and (max-device-width:320px)
{
#ml_3
  {
  margin-right:0px !important;
  }
    .p-3 {
	padding: 1rem !important;
	margin-top: -17px;
}
    .btn:not(:disabled):not(.disabled) {
	cursor: pointer;
	font-size: 12px !important;
}
.welcome_box {
	background-color: #eeeeee;
	padding: 15px 0px;
	height: 154px;
}
  .textend
  {
  text-align:center;
  }
  .textcenter
  {
      text-align:center;
  }
  .textcenter_1
  {
        text-align:center;
      
  }

}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
{
#ml_3
  {
  margin-right:0px !important;
  }
.welcome_box1 {
    background-color: #eeeeee;
    padding: 15px 0px;
    height: 43px;
}
    .p-3 {
	padding: 1rem !important;
	margin-top: -17px;
}
    .btn:not(:disabled):not(.disabled) {
	cursor: pointer;
	font-size: 12px !important;
}
.welcome_box {
	background-color: #eeeeee;
	padding: 15px 0px;
	height: 162px;
}
     .textend
  {
  text-align:center;
  }
  .textcenter
  {
      text-align:center;
  }
    .textcenter_1
  {
        text-align:center;
      
  }
}
@media only screen 
  and (min-device-width:480px) 
  and (max-device-width:620px)
{
#ml_3
  {
  margin-right:0px !important;
  }
    .btn:not(:disabled):not(.disabled) {
	cursor: pointer;
	font-size: 12px !important;
}
  .welcome_box {
	background-color: #eeeeee;
	padding: 15px 0px;
	height: 129px;
}
    .amount
    {
        margin-bottom: -36px;
margin-top: -29px;
    }
}
@media only screen 
  and (min-device-width:620px) 
  and (max-device-width:720px)
  {
  #ml_3
  {
  margin-right:0px !important;
  }
 .welcome_box {
	background-color: #eeeeee;
	padding: 15px 0px;
	height: 129px;
}
      .amount
    {
        margin-bottom: -36px;
margin-top: -29px;
    }
  }
@media only screen 
  and (min-device-width:720px) 
  and (max-device-width:820px)
  {
  #ml_3
  {
  margin-right:0px !important;
  }
.welcome_box {
	background-color: #eeeeee;
	padding: 15px 0px;
	height: 129px;
}
      .amount
    {
        margin-bottom: -36px;
margin-top: -29px;
    }

}
@media only screen 
  and (min-device-width:820px) 
  and (max-device-width:1200px)
  {
#ml_3
  {
  margin-right:0px !important;
  }
  .welcome_box {
	background-color: #eeeeee;
	padding: 25px 0px;
	width: 2;
	height:170px;
}



}

  </style>
  <!--  -->
</head>
<body>
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
               <li class="nav-item">
                  <a class="nav-link" href="pay.php">PAY</a>
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
					  <a class="nav-link" href="viewMyProfile.php">VIEW  MY PROFILE</a>
					</li>
					
					<a class="nav-link" href="logout.php">LOGOOUT</a>	
					
					<?php } else { ?>	
						<a class="nav-link" href="login.php">LOGIN</a>	
					<?php }?>
                  </li>
                 
                 
                </ul>
			   
            </div>
          </nav>
      
    
    </header>
    <section id="section">
        <div class="container">
               <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <!--  -->
                            <div>
                                <form action="" method="post">
								
								
                                </form>
                            </div>
                           
                                  
                            <!--  -->
                     </div>
               </div>
        </div>

</section>
<!--  -->


<section >
    <div class="mt-5"></div>
        <div class="container">
               
           <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="welcome_box">
                                              
                <?php if ($_smarty_tpl->tpl_vars['name']->value) {?>  
				
                  
				  
					<h6 class="text-center"> 
         					Welcome <b><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</b>	<h6> 
						
						
					</h6>
					
				
						<div class="row p-3">
					     <div class="col-lg-6 col-md-6 col-sm-12 col-12">
						        <h6 class="textcenter_1">[ Points : <?php echo $_smarty_tpl->tpl_vars['points']->value;?>
 ]</h6>		
						 </div>
						 <div class="col-lg-6 col-md-6 col-sm-12 col-12">
						     <h6 class="text-center"> 
									<a href="pay.php">Online Payment</a>
							</h6>
						 </div>
					
						   <div class="col-lg-12 col-md-12 col-sm-12 col-12">
						        <h6 class="textcenter">	<a href="premiumProfile.php" class="btn btn-sm btn-primary">Premium Profile Listing</a></h6>		
						 </div>
					</div>
                  
                
					
				<?php }?>
				<br>
			
				</div>
                </div>
		    </div>
		   </div>
		   <div class="mt-2"></div>
		   <?php if ($_smarty_tpl->tpl_vars['isInvoice']->value == 1) {?>
				<div class="container"> 
				
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="welcome_box1">
							<h6 class="text-center"> 
									<a href="myInvoices.php">Click to see Pending Invoices</a>
							</h6>
						 </div>
					</div>
				</div>
					
				</div>
			<?php }?>
    <div class="mt-5"></div>    
</section>

<section>
    <div class="mt-5"></div>
        <div class="container">
            <!--  <div class="row">
                 	 <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                   	        	<p class="textcenter">You are in <?php echo $_smarty_tpl->tpl_vars['position']->value;?>
 th position in premium profile listing &nbsp; | &nbsp;  Now <a href="publicprofile.php?key=<?php echo $_smarty_tpl->tpl_vars['topper']->value['agent_key'];?>
"><?php echo $_smarty_tpl->tpl_vars['topper']->value['agent_name'];?>
</a> is in the top position @ <?php echo $_smarty_tpl->tpl_vars['panchayat']->value;?>
&nbsp;[<?php echo $_smarty_tpl->tpl_vars['district']->value;?>
].
								<br> <a href="premiumProfileList.php">Premium Profile Rank List</a>
								</p>
						        		
						 </div>
             </div> -->
               <div class="row">
					
					 <?php if ($_smarty_tpl->tpl_vars['post_number']->value < $_smarty_tpl->tpl_vars['planLimit']->value) {?> 
                     <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                               
                                <h5><a href="postproperty.php"  class="btn btn-light btn-dashboard"><span>Post Property</span></a></h5>
                            </div>
                     </div>
					 <?php } else { ?>
					 
					<div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                            <span class="btn btn-light btn-dashboard">You reached your posting limit. <br>You can post only <?php echo $_smarty_tpl->tpl_vars['planLimit']->value;?>
 posts</span>
                           </div>
                    </div>
					 <?php }?>
                     <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center" id="ml_3">
                               <h5><a href="viewMyProperties.php"  class="btn btn-light btn-dashboard"><span>View My Properties</span></a></h5>
                           </div>
                    </div>
                    
                    
               </div>
			    <div class="mt-5"></div>   
				<div class="row">
				    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
					    <div class="text-center">
						      <a href="https://keralaregistration.gov.in/" target="_blank">Click here to download the document</a><br>
						</div>
					</div>
				</div>
        </div>
    <div class="mt-5"></div>    
	
</section>
<!--  -->
<div class="mt-3"></div>
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
