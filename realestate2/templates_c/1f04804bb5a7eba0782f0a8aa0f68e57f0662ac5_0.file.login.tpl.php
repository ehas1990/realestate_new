<?php
/* Smarty version 3.1.36, created on 2022-12-20 09:11:59
  from '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63a17c5f71a1f9_65063593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f04804bb5a7eba0782f0a8aa0f68e57f0662ac5' => 
    array (
      0 => '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/login.tpl',
      1 => 1670309780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a17c5f71a1f9_65063593 (Smarty_Internal_Template $_smarty_tpl) {
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

  <!--  -->
  <style>
  #nav-tab
  {
  margin-left:20px;
  }
    .nav-tabs {
	border-bottom: 0px solid #dee2e6 !important;
}
 .card {
    background: linear-gradient(152deg, #000000, #24232300);
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
    color: #ffffff;
    font-family: Montserrat;
}
#section1
{
background-image: url('./img/70.jpg');
    
    background-size: cover;
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
    background: linear-gradient(152deg, #000000, #24232300);
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width:263px !important;
}

	#section1 {
	background-image: url('./img/70.jpg');
	background-size: 500% !important ;
	background-repeat: no-repeat;
	
}

}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
{
 .card {
    background: linear-gradient(152deg, #000000, #24232300);
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width:263px !important;
}
	#section1 {
	background-image: url('./img/70.jpg');
	background-size:500% !important;
	background-repeat: no-repeat;
	
}
}
@media only screen 
  and (min-device-width:480px) 
  and (max-device-width:620px)
{
 .card {
    background: linear-gradient(152deg, #000000, #24232300);
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width:263px !important;
}
	#section1 {
	background-image: url('./img/70.jpg');
	background-size:500% !important;
	background-repeat: no-repeat;
	
}
}
@media only screen 
  and (min-device-width:620px) 
  and (max-device-width:720px)
  {
   .card {
    background: linear-gradient(152deg, #000000, #24232300);
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width:460px !important;
}
	#section1 {
	background-image: url('./img/70.jpg');
	background-size:500% !important;
	background-repeat: no-repeat;
	background-position-x: -471px;
}
}
@media only screen 
  and (min-device-width:720px) 
  and (max-device-width:820px)
  {
     .card {
    background: linear-gradient(152deg, #000000, #24232300);
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width:460px !important;
}
	#section1 {
	background-image: url('./img/70.jpg');
	background-size:500% !important;
	background-repeat: no-repeat;
	background-position-x:-706px;
}
}
@media only screen 
  and (min-device-width:820px) 
  and (max-device-width:1200px)
  {
       .card {
    background: linear-gradient(152deg, #000000, #24232300);
    border-radius: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    width:460px !important;
}
	#section1 {
	background-image: url('./img/70.jpg');
	background-size:500% !important;
	background-repeat: no-repeat;
	background-position-x:-706px;
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
<body id="section1">

<!--  -->
<section >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="  text-align: -webkit-center"> 
                    <div id="card-gradient">
                        <div id="cardbody">
                           <!-- <img src="img/agent2.jpg"  id="card-body"> -->
                           <h3></h3>
                        </div>
                    </div>
            </div>
        </div>
        <div class="mt-4"></div>
          <div class="row" id="row">
          
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              
                    <div class="card">
                        <div class="card-body">
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
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs justify-content-center">
                                  <li class="nav-item text-white">
                                    <a class="nav-link active btn " id="nav-tab" data-toggle="tab" href="#login">Login</a>
                                  </li>
                                  <li class="nav-item text-white">
                                    <a class="nav-link btn" id="nav-tab" data-toggle="tab" href="#signup">SignUp</a>
                                  </li>
                                  
                                </ul>
                              
                                <!-- Tab panes -->
                                <div class="tab-content">
                                  <div id="login" class="container tab-pane  active"><br>
										 
                                         <form action="" method="post">
												<input type="hidden" name="act" value="Login">
                                                 <div class="row">
														
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                             <input type="text" name="username" placeholder="e-Mail" class="form-control">
                                                        </div>
                                                        <div class="mt-5"></div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <input type="password" name="password" placeholder="Password" class="form-control">
                                                       </div>
													  
                                                       <div class="mt-5"></div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
														   
                                                            <div class="text-center">
                                                                <input type="submit" value="Submit"  class="btn btn-danger">
                                                            </div>
                                                           
                                                       </div>
													  
															
													  
													  
                                                 </div>
                                         </form>
                                  </div>
                                  <div id="signup" class="container tab-pane fade"><br>
                                    <form action="" method="post">
										<input type="hidden" name="act" value="SignUp">
                                        <div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                             <input type="text" name="name" placeholder="Your Name"  class="form-control">
                                                </div>
												<div class="mt-5"></div>
                                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <input type="text" name="username" placeholder="e-Mail" class="form-control">
                                               </div>
                                               <div class="mt-5"></div>
                                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                   <input type="password" name="password" placeholder="password" class="form-control">
                                              </div>
											   <div class="mt-5"></div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <input type="password" name="repassword" placeholder="Retype Password" class="form-control">
                                                       </div>
                                              <div class="mt-5"></div>
                                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                   <input type="text" name="phone" placeholder="Contact Number" class="form-control">
                                              </div>
											  <div class="mt-5"></div>
											   <div class="col-lg-12 col-md-12 col-sm-12 col-12">
													
														
														<select name="plan" class="form-control ms-2">
														<?php if ($_smarty_tpl->tpl_vars['plans']->value) {?>
															
															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['plan_key'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['plan'];?>
</option>
															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
														<?php } else { ?>
															<option value="x">Empty Plan List</option>
														<?php }?>	
														</select>   
													
												</div>
												
												<div class="mt-5"></div>
												
											        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
													
														
														<select name="district" class="form-control district ms-2"  id="district">
														<?php if ($_smarty_tpl->tpl_vars['districts']->value) {?>
															<option value="x">Select District</option>
															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['districts']->value, 'district');
$_smarty_tpl->tpl_vars['district']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['district']->value) {
$_smarty_tpl->tpl_vars['district']->do_else = false;
?>
																<!-- <option value="<?php echo $_smarty_tpl->tpl_vars['district']->value['district_key'];?>
"><?php echo $_smarty_tpl->tpl_vars['district']->value['district_name'];?>
</option> -->
																<option value="<?php echo $_smarty_tpl->tpl_vars['district']->value['district_key'];?>
"><?php echo $_smarty_tpl->tpl_vars['district']->value['district_name'];?>
</option>
																
															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
														<?php } else { ?>
															<option value="x">Empty District List</option>
														<?php }?>	
														</select>   
												
												    </div>
											    
												<div class="mt-5"></div>
												
															
															<div class="col-lg-12 col-md-12 col-sm-12 col-12">
																<select name="panchayath" class="form-control" id="show_panchayath">
																	<option value="X">Select Panchayath</option>
																</select>
												
											  <div class="mt-5"></div>
                                              
                                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                   <div class="text_right">
                                                       <input type="submit" value="Submit"  class="btn btn-danger">
                                                   </div>
                                                  
                                              </div>
											  
                                        </div>
                                </form>
                                  </div>
                                
                                </div>
                              
                        </div>
                    </div>
                
            </div>
               
          </div>
    </div>
</section>
<!--  -->
<div class="mt-3"></div>
<!-- property -->
       
<!-- footer -->
<div class="mt-3"></div>


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
