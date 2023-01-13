<?php
/* Smarty version 3.1.36, created on 2023-01-13 04:15:56
  from '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63c0dafca91f80_98409420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7b602028e6144b7aae7ffca30904cf415fbc420' => 
    array (
      0 => '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/index.tpl',
      1 => 1673583348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c0dafca91f80_98409420 (Smarty_Internal_Template $_smarty_tpl) {
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
                  <a class="nav-link" href="login.php">LOGIN</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="pay.php">PAY</a>
                </li>
				   <li class="nav-item">
                  <a class="nav-link" href="contactus.php">CONTACT</a>
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
<section id="section">
        <div class="container">
               <div class="row">
			   
			   
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <!--  -->
							<div id="form-search1">
                            <div id="form-search">
							<div class="message">
							<?php if ($_smarty_tpl->tpl_vars['displayMessage']->value == 1) {?>
							<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>	
								<?php if ($_smarty_tpl->tpl_vars['color']->value == "gree") {?>
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
							</div>
			                <!-- <ul class="nav nav-tabs justify-content-center" id="tab-search">
                                        <li class="nav-item">
                                        <a class="nav-link active btn btn-sm sm-btn btn-lg-sm text-white " id="navlink" data-toggle="tab" href="#propertysearch">property search</a>
                                        </li>
                                        <li class="nav-item"  id="nav_1_tab">
                                        <a class="nav-link btn text-white sm-btn btn-sm btn-lg-sm" id="navlink" data-toggle="tab"  href="#AgentSearch">Agent Search</a>
                                        </li>
                                        
                                    </ul>-->
                                    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="propertysearch" class="container tab-pane active">
                                            <div class="mt-4"></div>
                                            <form action="" method="post">
												<input type="hidden" name="act" value="search">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                       <select class="form-control formsearch" name="property_for">
                                                          <option selected="true" disabled="disabled" value="x">Property For</option>
                                                         <option value="1">For Sale</option>
                                                         <option value="2">For Rent</option>
                                                     </select>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                          <select class="form-control formsearch" id="district" name="district">
																<?php if ($_smarty_tpl->tpl_vars['districts']->value) {?>
																 <option value="x">Select District</option>
																 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['districts']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
																	<option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['district_key'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['district_name'];?>
</option>
																 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																<?php } else { ?>
																 Add districts from admin panel
																<?php }?>
                                                     
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <select name="panchayath" class="form-control formsearch" id="show_panchayath">
												            <option value="x">Select Panchayath</option>
											            </select>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12" id="formsearch_btn">
                                                    
                                                    
                                                       <input type="submit" name="submit" value="search" class="btn btn-danger  formsearch" id="submit">
                                                    </div>
                                                </div>  
                                            </form>
                                        </div>
                                        <div id="AgentSearch" class="container tab-pane fade">
                                            <div class="mt-4"></div>
                                            <form action="" method="post">
                                                <div class="row">
                                                   
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                        <select class="form-control formsearch" id="district" name="district">
																<?php if ($_smarty_tpl->tpl_vars['districts']->value) {?>
																 <option value="x">Select District</option>
																 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['districts']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
																	<option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['district_key'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['district_name'];?>
</option>
																 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																<?php } else { ?>
																 Add districts from admin panel
																<?php }?>
                                                     
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                            <select name="panchayath" class="form-control formsearch" id="show_panchayath">
												                   <option value="x">Select Panchayath</option>
											                </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12" id="formsearch_btn">
                                                    
                                                         <input type="submit" name="submit" value="search" class="btn btn-danger btn-sm sm-btn formsearch">
                                                    </div>
                                                </div>  
                                            </form>
                                        </div>
                                        </div>
                               
                           
                                  
                            <!--  -->
							</div>
                     </div>
               </div>
        </div>

</section>
<!--  -->
<div class="mt-3"></div>
<!-- property -->
<!--<section>
  <div class="container">
     <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="text-center">
                    <a href="#" class="btn btn-light"><img src="icon/row.svg" width="30px"></a>
                     <a href="#" class="btn btn-light"><img src="icon/grid.svg" width="30px"></a>
                </div>
          </div>
  
     </div>
   </div>
<section>-->
<div class="mt-3"></div>
<section>

   <div class="container">
     
            <div class="row">
			  <div class="mt-3"></div>
            <?php if ($_smarty_tpl->tpl_vars['properties']->value) {?>  
			
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['properties']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
				  <div class="mt-3"></div>
                    <!--  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" id="col-sm-row">  
               <div class="mt-3"></div>				
                    <div class="card">
                         <div id="img-property">       
                        <a href="propertyDetails.php?key=<?php echo $_smarty_tpl->tpl_vars['p']->value['property_key'];?>
" >						 
                            <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['p']->value['property_key'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['property_image'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['image_name'];?>
" class="img-fluid" id="fluid_img">
						</a>
                        </div>
                        <div class="adds card-img-overlay">
						<?php if ($_smarty_tpl->tpl_vars['p']->value['property_for'] == 1) {?>
                            <h6>For Sales</h6>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['p']->value['property_for'] == 2) {?>
                            <h6>For Rent</h6>
						<?php }?>
                        </div>
                        <div class="rate">
                            <h5 id="rate-h5"class="text-center mt-2"><?php echo $_smarty_tpl->tpl_vars['p']->value['property_price'];?>
</h5>
                        </div>
                     
                        <div class="carddetails">
                            <h6 class="text-center"><?php echo $_smarty_tpl->tpl_vars['p']->value['property_name'];?>
</h6>
							<div class="text-center"><img src="icon/location.png" width="20px" height="20px"></div>
                            <div class="cardloc mt-2">
                                <h6><?php echo $_smarty_tpl->tpl_vars['p']->value['district'];?>

								[<?php echo $_smarty_tpl->tpl_vars['p']->value['panchayath'];?>
]</h6>
                            </div>
                           
                        </div>
                       
                        <ul id="card-details">
                              <li><a><img src="icon/build_area.png" width="20px" height="20px"><span class="ml-2">10000-ft2</span></a></li>
							  <li><a><img src="icon/bedroom.png" width="20px" height="20px"><span class="ml-2"><?php echo $_smarty_tpl->tpl_vars['p']->value['property_bedroom'];?>
</span></a></li>
                              <li><a><img src="icon/bathtub.png" width="20px" height="20px"><span class="ml-2"><?php echo $_smarty_tpl->tpl_vars['p']->value['property_bathroom'];?>
</span></a></li>
							  <li><a><img src="icon/icons-floor.png" width="20px" height="20px"><span class="ml-2">3</span></a></li>
							  <li><a><img src="icon/icons-park.png" width="20px" height="20px"><span class="ml-2">3</span></a></li>
                        </ul>
						
						<div class="mt-2"></div>
						   <div class="btn-viewmore">
								<a href="propertyDetails.php?key=<?php echo $_smarty_tpl->tpl_vars['p']->value['property_key'];?>
" class="btn btn-danger btn-lg-sm btn-sm sm-btn ">View More</a>
							</div>
						
                       <div class="mt-2"></div>
                    </div>  
                </div>
				
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
			   
			   <div class="emptyBox">
					<center>There is no properties listed in this platform yet..</center>
			   </div>
			   
			<?php }?>
                <!--  -->
             
                <!--  -->
               
                <!--  -->
            </div>
             <!--  -->
             <div class="mt-3"></div>
             
    </div>
	   <div class="mt-3"></div>
</section>            
<!-- footer -->
<div class="mt-3"></div>
<footer>
    
      <div class="container">
      
            <div class="row">  
                   <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt-3">
                    <h6>Popular District</h6>
					
					<?php if ($_smarty_tpl->tpl_vars['districts']->value) {?>
                         <ul class=" nav navbar-nav">
						 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['districts']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                         	<?php if ($_smarty_tpl->tpl_vars['d']->value['popular'] == 1) {?>
							<li class="nav-item"><a href="listPropertiesByDistrict.php?k=<?php echo $_smarty_tpl->tpl_vars['d']->value['district_key'];?>
" class="nav-link"><?php echo $_smarty_tpl->tpl_vars['d']->value['district_name'];?>
</a></li>
                          	<?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					<?php } else { ?>
						There is no popular Districts Added Yet
					<?php }?>
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
