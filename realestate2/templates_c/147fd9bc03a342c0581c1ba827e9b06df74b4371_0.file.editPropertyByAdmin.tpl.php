<?php
/* Smarty version 3.1.36, created on 2022-12-22 06:10:06
  from '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/editPropertyByAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63a3f4bec839a5_75846061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '147fd9bc03a342c0581c1ba827e9b06df74b4371' => 
    array (
      0 => '/home/u121402034/domains/a2zserver.in/public_html/REAL_ESTATE/project/view/editPropertyByAdmin.tpl',
      1 => 1671689401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a3f4bec839a5_75846061 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!DOCTYPE html>
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
 #section_bg {

background: #eee !important;
}
.form-card{
padding: 20px 40px 20px 40px;
}
  .text_right
  {
  float:right;
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
.h6-text
{
font-size:24px;
}
@media only screen 
  and (min-device-width: 210px) 
  and (max-device-width:320px)
{
 .form-card {
	padding: 20px 20px 20px 20px !important;
}
.h6-text {
	font-size: 19px;
}
.contact_header h1 {
	color: #ffffff;
	font-family: Montserrat;
	font-size: 32px;
}
#select_form_control {
	width: 50%;
	margin-left: 94px;
}
}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
{
 .form-card {
	padding: 20px 20px 20px 20px !important;
}
.h6-text {
	font-size: 19px;
}
.contact_header h1 {
	color: #ffffff;
	font-family: Montserrat;
	font-size: 32px;
}
#select_form_control {
	width: 30%;
	margin-left: 95px;
}
#select_formcontrol {
	width: 30%;
	margin-left: 41px;
}
#select_form-control {
	width: 30%;
	margin-left: 46px;
}
}
@media only screen 
  and (min-device-width:480px) 
  and (max-device-width:620px)
{
 .form-card {
	padding: 20px 20px 20px 20px !important;
}
.card {
  height: 1658px !important;
}
#facilities {
	display: flex;
	width: 500px;
	margin-top: 30px;
}
.h6-text {
	font-size: 19px;
}
.contact_header h1 {
	color: #ffffff;
	font-family: Montserrat;
	font-size: 32px;
}
#select_form_control {
	width: 30%;
	margin-left: 94px;
}
#select_formcontrol {
	width: 30%;
	margin-left: 41px;
}
#select_form-control {
	width: 30%;
	margin-left: 46px;
}
}
@media only screen 
  and (min-device-width:620px) 
  and (max-device-width:720px)
  {
  .form-card {
	padding: 20px 20px 20px 20px !important;
}
     #facilities {
	display: flex;
	width: 500px;
	margin-top: 30px;
}
.h6-text {
	font-size: 19px;
}
.contact_header h1 {
	color: #ffffff;
	font-family: Montserrat;
	font-size: 32px;
}
#select_form_control {
	width: 40%;
	margin-left: 94px;
}
#select_formcontrol {
	width: 40%;
	margin-left: 41px;
}
#select_form-control {
	width: 40%;
	margin-left: 46px;
}
  }
  @media only screen 
  and (min-device-width:720px) 
  and (max-device-width:820px)
  {
  .form-card {
	padding: 20px 20px 20px 20px !important;
}
      #facilities {
	display: flex;
	width: 500px;
	margin-top: 30px;
}
.h6-text {
	font-size: 19px;
}
.contact_header h1 {
	color: #ffffff;
	font-family: Montserrat;
	font-size: 32px;
}
#select_form_control {
	width: 40%;
	margin-left: 72px;
}
#select_formcontrol {
	width: 40%;
	margin-left:19px;
}
#select_form-control {
	width: 40%;
	margin-left: 22px;
}
  }
  @media only screen 
  and (min-device-width:820px) 
  and (max-device-width:1200px)
  {
        #facilities {
	display: flex;
	width: 500px;
	margin-top: 30px;
}
.h6-text {
	font-size: 19px;
}
.contact_header h1 {
	color: #ffffff;
	font-family: Montserrat;
	font-size: 45px;
}
#select_form_control {
	width: 40%;
	margin-left: 72px;
}
#select_formcontrol {
	width: 40%;
	margin-left: 18px;
}
#select_form-control {
	width: 40%;
	margin-left: 22px;
}
  }
  
  </style>
  <!--  -->
  
    
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
<body id="section_bg">
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
               <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <!--  -->
                            <div class="contact_header">
                                <h1 class="text-center">Property Form</h1>
                            </div>
                            <!--  -->
                     </div>
               </div>
        </div>

</section>
<!--  -->
<div class="mt-3"></div>
<!-- contact details -->

<!-- site map -->

<section id="section_bg">
    <div class="mt-5"></div>
        <div class="container">
               
           <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="box" style="background-color:#eeeeee;height: 75px;padding-top: 18px;">
                               
                <?php if ($_smarty_tpl->tpl_vars['name']->value) {?>  

				<h6 class="text-center">	Welcome <b><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</b><br>
				
				
				<h6>
					
				<?php }?>
                </div>
		    </div>
		   </div>
                    
        </div>
        </div>
    <div class="mt-5"></div>    
</section>

<section id="section_bg">
    <div class="container">
	
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
	
	
         <div class="row">
		
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="form-card card">
                            <form action="" method="post" enctype="multipart/form-data">
							<input type="hidden" name="act" value="addPost"/>
							<input type="hidden" name="property_key" value="<?php echo $_smarty_tpl->tpl_vars['details']->value['property_key'];?>
"/>
							
							<div class="row">
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                      <h6 class="h6-text">Client Details</h6>
                                 </div>
                                 
                              </div>
                                <div class="row">
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <label class="form-label">Client Name</label>
                                     </div>
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="clientname" value="<?php echo $_smarty_tpl->tpl_vars['details']->value['Client_Name'];?>
" class="form-control">
											 
                                     </div>
                                </div>
								<div class="mt-4"></div>
								<div class="row">
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <label class="form-label">Contact Number</label>
                                     </div>
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="clientnumber" value="<?php echo $_smarty_tpl->tpl_vars['details']->value['Client_Number'];?>
" class="form-control">
											 
                                     </div>
                                </div>
                                <div class="mt-4"></div>
							
							
                             <div class="row">
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                      <h6 class="h6-text">Property Details</h6>
                                 </div>
                                 
                              </div>
                                <div class="row">
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <label class="form-label">Property Name</label>
                                     </div>
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input type="text" name="propertyname" value="<?php echo $_smarty_tpl->tpl_vars['details']->value['property_name'];?>
" class="form-control">
											 
                                     </div>
                                </div>
                                <div class="mt-4"></div>
								
								  <div class="row">
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <label class="form-label">Property For</label>
                                     </div>
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                         <span>  <input type="radio" name="propertyfor"  value="1" <?php if ($_smarty_tpl->tpl_vars['details']->value['property_for'] == 1) {?> checked <?php }?>> For Sale</span>
										 <span class="ml-3">    <input type="radio"  name="propertyfor" value="2" <?php if ($_smarty_tpl->tpl_vars['details']->value['property_for'] == 2) {?> checked <?php }?>> For Rent </span>
											 
                                     </div>
                                </div>
                                <div class="mt-4"></div>
                                <div class="row">
                                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                             <label class="form-label">Upload Photos 1 &nbsp;* &nbsp;(Please select atleast 1 image)</label>
                                       </div>
                                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                             <input type="file" name="mainphoto" placeholder="Upload1" class="form-control">
                                       </div>
                                 </div>
                                 <div class="mt-4"></div>
                                 <div class="row">
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <label class="form-label">Upload Photos 2</label>
                                     </div>
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <input type="file" name="photo2" placeholder="Upload2" class="form-control">
                                     </div>
                                </div>
                                <div class="mt-4"></div>
                               <div class="row">
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <label class="form-label">Upload Photos 3</label>
                                     </div>
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <input type="file" name="photo3" placeholder="Upload3" class="form-control">
                                     </div>
                               </div>
                               <div class="mt-4"></div>
                               <div class="row">
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <label class="form-label">Upload Photos 4</label>
                                     </div>
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <input type="file" name="photo4" placeholder="Upload4" class="form-control">
                                     </div>
                               </div>
                               <div class="mt-4"></div>
                               <div class="row">
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <label class="form-label">Property Price</label>
                                     </div>
                                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                           <input type="text" name="propertyprice" value="<?php echo $_smarty_tpl->tpl_vars['details']->value['property_price'];?>
" class="form-control">
                                     </div>
                             </div>
                             <div class="mt-4"></div>
                          <div class="row">
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                     <label class="form-label">Property Area</label>
                               </div>
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                     <input type="text" name="propertyarea" value="<?php echo $_smarty_tpl->tpl_vars['details']->value['property_area'];?>
" class="form-control">
                               </div>
                          </div>
                          <div class="mt-4"></div>
                         <!--  <div class="row">
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                     <label class="form-label">Property District</label>
                               </div>
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                   
									<?php if ($_smarty_tpl->tpl_vars['districts']->value) {?>
									 
									 <select name="district" class="form-control ms-2" id="district">
										<option value="x">Please Select District</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['districts']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
											<option value=<?php echo $_smarty_tpl->tpl_vars['d']->value['district_key'];?>
><?php echo $_smarty_tpl->tpl_vars['d']->value['district_name'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                   
                                     </select>
									 
									 <?php } else { ?>
										Please Add Districts from Admin Panel
									 <?php }?>
									 
									 
                               </div>
                          </div> -->
                          
                     <!--  <div class="mt-4"></div>
                         
                         
                          <div class="row">
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                     <label class="form-label">Property panchayath </label>
                               </div>
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                     
									 
									 <select name="panchayath" class="form-control" id="show_panchayath">
												<option value="X">Select Panchayath</option>
									</select>
									 
                               </div>
                          </div> -->
                          <div class="mt-4"></div>
                          <div class="row">
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="h6-text">Property Facilities</h6>
                           </div>
                          
                          </div>
                          <div class="mt-4"></div>
                          <div class="row">
                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="mt-2"></div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div id="facilities">
                                                <label class="form-label">BedRooms</label>
                                                <select name="bedrooms" class="form-control ms-2" id="select_form-control">
                                                    <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_bedroom'] == 1) {?> selected <?php }?>>1</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_bedroom'] == 2) {?> selected <?php }?>>2</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_bedroom'] == 3) {?> selected <?php }?>>3</option>
													<option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_bedroom'] == 4) {?> selected <?php }?>>4</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_bedroom'] == 5) {?> selected <?php }?>>5</option>
                                                    
                                                </select>   
                                            </div>
                                    </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div id="facilities">
                                                    <label class="form-label">Bathrooms</label>
                                                    <select name="bathrooms" class="form-control ms-2" id="select_form-control">
                                                        <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_bathroom'] == 1) {?> selected <?php }?>>1</option>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_bathroom'] == 2) {?> selected <?php }?>>2</option>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_bathroom'] == 3) {?> selected <?php }?>>3</option>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_bathroom'] == 4) {?> selected <?php }?>>4</option>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_bathroom'] == 5) {?> selected <?php }?>>5</option>
                                                        
                                                    </select>   
                                                </div>
                                        </div>
                                    </div>
                                    <div class="mt-2"></div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div id="facilities">

                                                    <label class="form-label">Floor</label>
                                                    
                                                        <select name="floor" class="form-control ms-2" id="select_form_control">
                                                                <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_floor'] == 1) {?> selected <?php }?>>1</option>
                                                                <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_floor'] == 2) {?> selected <?php }?>>2</option>
                                                                <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_floor'] == 3) {?> selected <?php }?>>3</option>
                                                                <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_floor'] == 4) {?> selected <?php }?>>4</option>
                                                                <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_floor'] == 5) {?> selected <?php }?>>5</option>
                                                        </select>
                                                    
                                                        
                                                </div> 
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div id="facilities">
                                                <label class="form-label">Car parking</label>
                                                <select name="parking" class="form-control ms-2" id="select_formcontrol">
                                                    <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_parking'] == 1) {?> selected <?php }?>>1</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_parking'] == 2) {?> selected <?php }?>>2</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_parking'] == 3) {?> selected <?php }?>>3</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_parking'] == 4) {?> selected <?php }?>>4</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['details']->value['property_parking'] == 5) {?> selected <?php }?>>5</option>
                                                    
                                                </select>   
                                            </div>
                                    </div>
                                    </div>

                               </div>
                          </div>
                          <div class="mt-4"></div>
                          <div class="row">
                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                 <h6 class="h6-text">Property Description</h6>
                               </div>
                               <div class="mt-2"></div>
                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                   <textarea name="description" cols="100px" class="form-control" maxlength="350"><?php echo $_smarty_tpl->tpl_vars['details']->value['property_description'];?>
</textarea>
								   
                               </div>
                          </div> 
						   <div class="mt-4"></div>
						  <div class="row">
                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                 <h6 class="h6-text">Location Map 1</h6>
                               </div>
                               <div class="mt-2"></div>
                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!--    <textarea name="map" cols="100px" class="form-control" maxlength="350"></textarea> -->
								  <input type="text" class="form-control" placeholder="Google Map Iframe Code" name="map">
                               </div>
                          </div>
                          
                          <div class="mt-4"></div>
                          <div class="row">
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                             <div class="row">
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                  <div class="mt-2"></div>
                                     
                                     
                                    <div class="mt-2"></div>
                                    
                                   <div class="mt-2"></div>
                                  
                                
 
                               </div>
                               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div id="faclities-btn" class="text_right">
                                          
										  <input type="submit" value="Submit Post"  class="btn btn-danger btn-sm sm-btn">
                                    </div>
                               </div>
                              </div>
                           </div>
                          </div>
                            </form>
                      </div>
               </div>
			   
         </div>
    </div>
</section>
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
