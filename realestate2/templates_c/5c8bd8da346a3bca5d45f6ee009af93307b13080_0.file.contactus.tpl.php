<?php
/* Smarty version 3.1.36, created on 2023-01-13 04:14:27
  from '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/contactus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63c0daa3b05856_02752863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c8bd8da346a3bca5d45f6ee009af93307b13080' => 
    array (
      0 => '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/contactus.tpl',
      1 => 1670311661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c0daa3b05856_02752863 (Smarty_Internal_Template $_smarty_tpl) {
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
  #submit{
  width:fit-content;
  }
  #nav_1_tab
  {
      margin-left: 10px;
  }
  #navlink
  {
    background-color: #dc3545;
    border-color: #dc3545;
	width:135px;
  }
 .sm-btn{

    width: 100px;
  
    text-align: center;
    font-weight: 800;
    padding: 5px 0px;
    color: white;
    font-size: 12px;
    display: inline-block;
    text-decoration: none;

 }
.card
  {
  height:fit-content;
  } 
   .card:hover
   {

 box-shadow: 0px 1px 6px 1px #222121;
transition: cubic-bezier 02.s;
transition: ease-out;

   }
      @media only screen 
  and (min-device-width: 210px) 
  and (max-device-width:320px)
{
#col-contact
{
margin-top:10px;
}
#card-contact
{
 padding: 15px 15px 15px 15px;
    background:#e9eaeb !important;
height:fit-content !important;
}
#col-btn
{
margin-top:20px;
}
#col-phone{
margin-top:20px;
}
#col-sale
{
margin-top:20px;
}
#nav_1_tab {
    margin-left: 0px;
}
#navlink {
    width: 177px !important;
   
}
.nav-tabs li {
   
    margin-top: 5px;
}
#tab-search
{
margin-left:-39px !important;
}
}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
{
#col-contact
{
margin-top:10px;
}
#card-contact
{
 padding: 15px 15px 15px 15px;
    background:#e9eaeb !important;
height:fit-content !important;
}
#col-btn
{
margin-top:20px;
}
#col-phone{
margin-top:20px;
}
#col-sale
{
margin-top:20px;
}
#tab-search
{
margin-left: 18px !important;
}

#nav_1_tab {
    margin-left: 0px !important;
}
#navlink {
   
    width: 218px !important;
}
.nav-tabs li {
   
    margin-top: 10px;
}
}
@media only screen 
  and (min-device-width:480px) 
  and (max-device-width:620px)
{
#col-contact
{
margin-top:10px;
}
#card-contact
{
 padding: 15px 15px 15px 15px;
    background:#e9eaeb !important;
height:fit-content !important;
}
#col-btn
{
margin-top:20px;
}
#col-phone{
margin-top:20px;
}
#col-sale
{
margin-top:20px;
}
#tab-search
{
margin-left: 18px !important;
}
.nav-tabs li {
   
    margin-top: 5px;
}
.nav-tabs li {
	width: 29% !important;
}
.card
{
height:auto !important;
}
#navlink {
    
    font-size: 10px !important;
}
}
@media only screen 
  and (min-device-width:620px) 
  and (max-device-width:720px)
  {
  #col-contact
{
margin-top:10px;
}
 #card-contact
{
 padding: 15px 15px 15px 15px;
    background:#e9eaeb !important;
height:fit-content !important;
}
#col-btn
{
margin-top:20px;
}
#col-phone{
margin-top:20px;
}
#col-sale
{
margin-top:20px;
}
  .nav-tabs li {
   
    margin-top: 5px;
}
.nav-tabs li {
	width: 43% !important;
}
.card
{
height:auto !important;
}
  }
   @media only screen 
  and (min-device-width:720px) 
  and (max-device-width:820px)
  {
  #card-contact
  {
  height:330px !important;
   background:#e9eaeb !important;
   }
   }
     @media only screen 
  and (min-device-width:820px) 
  and (max-device-width:1200px)
  {
  #card-contact
  {
  height:330px !important;
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
<!---->
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
               
              </ul>
            </div>
            <!--  -->
            
                    <a class="navbar-brand " href="index.php"><img src="img/logo.png" class="logo-img" alt="LOGO"></a>
            
            
            <!--  -->
            <div class="collapse navbar-collapse justify-content" id="collapsibleNavbar">
                <ul class="navbar-nav">
                   <li class="nav-item">
                  <a class="nav-link" href="contactus.php">CONTACT</a>
                </li>
				 <li class="nav-item">
                  <a class="nav-link" href="login.php">LOGIN</a>
                </li>
               <!--  <li class="nav-item">
                   <?php if ($_smarty_tpl->tpl_vars['user_logined']->value == true) {?>
					
					<a class="nav-link" href="logout.php"><i class="fa fa-user"></i><span class="ml-2">Logout</span></a>	
					
					<?php } else { ?>	
						<a class="nav-link" href="login.php"><i class="fa fa-user"></i><span class="ml-2">Logoin</span></a>	
					<?php }?>
                </li> -->
                 
                 
                </ul>
              </div>
          </nav>
      
    
    </header>
<!--  -->
<!--  -->
<section id="section">
        <div class="container">
               <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <!--  -->
                            <div class="contact_header">
                                <h1 class="text-center">Contact</h1>
                            </div>
                            <!--  -->
                     </div>
               </div>
        </div>

</section>
<!--  -->
<div class="mt-3"></div>
<!-- contact details -->
<section>
    <div class="container">
           <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card" id="card-contact">
                             <div class="card-body">
                                   <form action="#" method="post">
                                        <!--  -->
                                        <div class="row">
                                             <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                 <input type="text" name="name" placeholder="Name" class="form-control">
                                             </div>
                                             <div class="col-lg-6 col-md-6 col-sm-12 col-12" id="col-phone">
                                                 <input type="text" name="name" placeholder="Phone" class="form-control">
                                             </div>
                                        </div>
                                        <!--  -->
                                        <div class="mt-4"></div>
                                         <!--  -->
                                         <div class="row">
                                             <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                 <input type="text" name="email" placeholder="Email" class="form-control">
                                             </div>
                                             <div class="col-lg-6 col-md-6 col-sm-12 col-12" id="col-sale">
                                                  <select class="form-control">
                                                    <option value="Forproperty" disabled="disabled">For Property</option>
                                                     <option>For Sales</option>
                                                     <option>For Rents</option>
                                                  </select>
                                             </div>
                                        </div>
                                        <!--  -->
                                        <div class="mt-4"></div>
                                        <!--  -->
                                        <div class="row">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                 <textarea cols="68" class="form-control"></textarea>
                                             </div>
                                        
                                       </div>
                                    <!--  -->
                                    <div class="mt-4"></div>
                                    <!--  -->
                                    <div class="row">
                                     <div class="col-lg-12 col-md-12 col-sm-12 col-12" id="col-btn">
                                         <div class="text-end">
                                             <input type="button" name="submit" value="submit" class="btn btn-sm sm-btn btn-danger float-end">
                                         </div>
                                         
                                     </div>
                                
                               </div>
                            <!--  -->
                                   </form>
                             </div>
                        </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12" id="col-contact">
                    <div class="card" id="card-contact">
                         <div class="card-body">
                               <div class="cardflex text-dark"><i class="fa fa-home"></i><span class="ml-3">A2Z Alphabet Solutionz PVT.LTD,<br>4<sup>th</sup> Floor, Amstor House,Technopark<br> Trivandrum,Kerala 695581</span></div>
                               <div class="mt-3"></div>
                               <div class="cardflex  text-dark"><i class="fa fa-phone"></i><span class="ml-3">+91 9635647281</span></div>
                               <div class="mt-3"></div>
                               <div class="cardflex  text-dark"><i class="fa fa-envelope"></i><span class="ml-3">info@realestate.com</span></div>
                         </div>
                    </div>
            </div>
           </div>
    </div>
</section>
<!-- site map -->
<div class="mt-3"></div>
<!--  -->

<!---->
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
