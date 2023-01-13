<?php
/* Smarty version 3.1.36, created on 2022-12-20 09:25:09
  from '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/paymentHistory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63a17f7565d374_99136779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '723597705b690f7f4eb23b9260dc924e690cfa90' => 
    array (
      0 => '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/paymentHistory.tpl',
      1 => 1670309636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a17f7565d374_99136779 (Smarty_Internal_Template $_smarty_tpl) {
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
  .table thead th {
	vertical-align: baseline !important;
	border-bottom: 2px solid #dee2e6;
	font-weight: 500;
}
  .table {
	color: #212529;
	font-size: 12px;
	display: revert;
    width: 100%;
   overflow-x: auto;
}
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
    width: 254px !important;
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
    width: 347px !important;
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
<section id="section">
    <div class="container">
        
           
          
  
</section>
<!--  -->
<section>
    <div class="container">
        <div class="row" id="row">
          
          
            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                 <div class="card">
                        <div class="card-body ">	
						<?php if ($_smarty_tpl->tpl_vars['paymentHistory']->value) {?>
                        <table class="table table-hover table-borderless table-responsive">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Before </th>
                                    <th>After</th>
									<th>Valid To</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paymentHistory']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['added_on'];?>
</td>
                                      <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['amount'];?>
</td>
                                      <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['before_total'];?>
</td>
                                      <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['after_total'];?>
</td>
									  <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['payment_to'];?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
                            </tbody>
                        </table>
						<?php } else { ?>
						There is no payment History
						<?php }?>
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
