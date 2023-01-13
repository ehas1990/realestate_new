<?php
/* Smarty version 3.1.36, created on 2023-01-13 04:42:23
  from '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/plans.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63c0e12fab7910_63641288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '085dd2d875f0d04b263f041694b8b88cc7c42079' => 
    array (
      0 => '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/plans.tpl',
      1 => 1670307725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c0e12fab7910_63641288 (Smarty_Internal_Template $_smarty_tpl) {
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
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel=" stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/media.css" type="text/css">
  <!--  -->
  <style>
  .postback1
  {
  text-align:center;
  }
.card-title
{
background: #002f34;
height: 50px;
color: #fff;
}
 #postback1
 {
 color:#fff;
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
                  
					
					<li class="nav-item">
					<a class="nav-link" href="logout.php">LOGOUT</a>	
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="login.php">LOGIN</a>	
					</li>
				
                  </li>
                 
                 
                </ul>
              </div>
          </nav>
      
    
    </header>
<section id="section">
    <div class="container">
        
           
          
  
</section>
<!--  -->
<section class="bg-light">
<div class="mt-5"></div>
 <form action="" method="POST">
   <input type="hidden" name="act" value="pricing">
   <div class="container">
         <div class="row">
		
			<?php if ($_smarty_tpl->tpl_vars['plans']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
			 <div class="col-lg-4 col-md-4 col-sm-12 col-12">
			     <div class="card">
				      <div class="card-title text-center"><h4 class="mt-2"><?php echo $_smarty_tpl->tpl_vars['p']->value['plan'];?>
</h4></div>
					  <div class="card-body"><h4 class="mt-2 text-center"> <?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
<span class="ml-2">INR</span></h4></div>
					  <div class="postback1"><button type="submit" class="btn btn-sm sm-btn bg-secondary" id="postback1" name="cmd" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['plan_key'];?>
" >Choose Plan</button></div>
					  <div class="mt-3"></div>
				 </div>
				 	 <div class="mt-2"></div>
			 </div>
		
			 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?> 
		</div>
   </div>
   	</form>
</section>
<!--  -->

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
