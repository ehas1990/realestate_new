<?php
/* Smarty version 3.1.36, created on 2023-01-12 15:26:51
  from '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/admindashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63c026bb589cf9_01592258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04908da17d267b1c621167c24468ecae6da69b1c' => 
    array (
      0 => '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/admindashboard.tpl',
      1 => 1673537207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c026bb589cf9_01592258 (Smarty_Internal_Template $_smarty_tpl) {
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
 <!--  <?php echo '<script'; ?>
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
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&amp;display=swap" rel="stylesheet">
  <link rel=" stylesheet" href="./css/style.css" type="text/css">
  <link rel="stylesheet" href="css/media.css" type="text/css">
  <!--  -->
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
                   <?php if ($_smarty_tpl->tpl_vars['user_logined']->value == true) {?>
					
					<li class="nav-item">
					<a class="nav-link" href="logout.php">LOGOUT</a>	
					</li>
					<?php } else { ?>	
					<li class="nav-item">
						<a class="nav-link" href="login.php">LOGIN</a>	
					</li>
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
                                    <!-- <div class="row">
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                                             <input type="text" name="district" placeholder="District" class="form-control">
                                        </div>
                                       
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                                           
                                            <input type="button" name="submit" value="Submit" class="btn btn-danger btn-lg formsearch">
                                        </div>
                                    </div>  -->
                                </form>
                            </div>
                           
                                  
                            <!--  -->
                     </div>
               </div>
        </div>

</section>
<!--  -->
<section>
    <div class="mt-5"></div>
        <div class="container">
               <div class="row">
				
					 <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                               
                                <h5><a href="listNewAgents.php"  class="btn btn-light btn-dashboard"><span>New Agents Waiting List</span></a></h5>
                            </div>
                     </div>
					 <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                               
                                <h5><a href="addAgent.php"  class="btn btn-light btn-dashboard"><span>Create Agent Account</span></a></h5>
                            </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                               
                                <h5><a href="listAgents.php"  class="btn btn-light btn-dashboard"><span>List All Agents</span></a></h5>
                            </div>
                     </div>
					 
					 <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                               
                                <h5><a href="createExecutive.php"  class="btn btn-light btn-dashboard"><span>Create Panchayath Executive Account</span></a></h5>
                            </div>
                     </div>
					 
					 <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                               
                                <h5><a href="listExecutives.php"  class="btn btn-light btn-dashboard"><span>List All Panchayath Executives</span></a></h5>
                            </div>
                     </div>
					 
					  <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                               
                                <h5><a href="createDistrictExecutive.php"  class="btn btn-light btn-dashboard"><span>Create District Executive Account</span></a></h5>
                            </div>
                     </div>
					 
					   <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                               
                                <h5><a href="listDistrictExecutives.php"  class="btn btn-light btn-dashboard"><span>List All District Executives</span></a></h5>
                            </div>
                     </div>
					 
                     <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                               <h5><a href="pendingProperties.php"  class="btn btn-light btn-dashboard">Pending Properties</a></h5>
                           </div>
                    </div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                               <h5><a href="approvedProperties.php"  class="btn btn-light btn-dashboard">Approved Properties</a></h5>
                           </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="box text-center">
                              
                                <h5><a href="districtSettings.php"  class="btn btn-light btn-dashboard">District Settings</a></h5> 
                           </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                         <div>
                            <div class="box text-center">
                                <h5><a href="panchayathSettings.php"  class="btn btn-light btn-dashboard">Panchayath Settings</a></h5> 
                             
                          </div>
                         </div>
                           
                    </div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-12">
                         <div>
                            <div class="box text-center">
                                <h5><a href="unpaidInvoices.php"  class="btn btn-light btn-dashboard">Unpaid Invoices</a></h5> 
                             
                          </div>
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
