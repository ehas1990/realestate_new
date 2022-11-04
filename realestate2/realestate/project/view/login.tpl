<!DOCTYPE html>
<html lang="en">
<head>
  <title>Real Estate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet"  href="css/bootstrap-grid.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
  <link rel=" styleheet" href="css/bootstrap-reboot.css" type="text/css">
  <link rel=" stylesheet" href="css/bootstrap-reboot.min.css" type="text/css">
  <link rel=" stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--  -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel=" stylesheet" href="css/style.css" type="text/css">

  <!--  -->
  <style>
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
#section
{
background-image: url('./img/70.jpg');
    height: 644px;
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
    border-radius:17px !important;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    box-shadow: #0000008c -1px 3px 6px 0px !important;
   
}
  </style>
</head>
<body id="section">

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
                        
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs justify-content-center">
                                  <li class="nav-item">
                                    <a class="nav-link active btn " data-toggle="tab" href="#login">Login</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link btn " data-toggle="tab" href="#signup">SignUp</a>
                                  </li>
                                  
                                </ul>
                              
                                <!-- Tab panes -->
                                <div class="tab-content">
                                  <div id="login" class="container tab-pane active"><br>
										 
                                         <form action="" method="post">
												<input type="hidden" name="act" value="Login">
                                                 <div class="row">
														
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                             <input type="text" name="username" placeholder="e-Mail" class="form-control">
                                                        </div>
                                                        <div class="mt-5"></div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <input type="password" name="password" placeholder="password" class="form-control">
                                                       </div>
                                                       <div class="mt-5"></div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
														   
                                                            <div class="text-right">
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
                                                             <input type="text" name="name" placeholder="Your Name" class="form-control">
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
                                                   <input type="text" name="phone" placeholder="Contact Number" class="form-control">
                                              </div>
                                              <div class="mt-5"></div>
                                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                   <div class="text-right">
                                                       <input type="submit" value="Submit"  class="btn btn-danger">
                                                   </div>
                                                  
                                              </div>
											  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
														
													<div class="text-center text-white"> MESSAGE : </div>
															 
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
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.esm.js"></script>
<script src="js/bootstrap.esm.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
