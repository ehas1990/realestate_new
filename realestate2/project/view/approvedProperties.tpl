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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--  -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel=" stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/media.css" type="text/css">
  <!--  -->
  <style>
  .bg_light
{
padding:10px;
}
.bg_light:hover
{
    box-shadow: #00000080 2px 3px 0px 0px;
    transition: 0.3s ease-out;
  }

      .table-responsive {
    display: inline-table ;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}
#maxRows
{
    width: 190px;
}
.tb_search
{   
    width: 250px;
    float: right;
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
                   {if $user_logined==true}
					
					<li class="nav-item">
					<a class="nav-link" href="logout.php">LOGOUT</a>	
					</li>
					{else}	
					<li class="nav-item">
						<a class="nav-link" href="login.php">LOGIN</a>	
					</li>
					{/if}
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
<div class="mt-3"></div>
<!-- property -->
<section>
   <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-xl-6 col-md-6">
                        <div class="num_rows">
                             <div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
                                <select class  ="form-control" name="state" id="maxRows">
                                                                        
                                                                        
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="70">70</option>
                                    <option value="100">100</option>
                                    <option value="5000">Show ALL Rows</option>
                                </select>
                                                                      
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-xl-6 col-md-6">
                        <div class="tbsearch">
                            <div class="tb_search">
                                <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
                            </div>
                        </div>
                                                                
                    </div>
                </div>
           </div>
                    <div style="margin-top: 30px;"></div>
                        <table class="table table-hover table-borderless table-responsive" id="table-id">
                            <thead>
                                <tr>
                                     <th class="text-center ">Agent Name</th>
                                     <th class="text-center"> Place</th>
                                    
                                    <th class="text-center">Property title</th>
                                    <th class="text-center">Property photo</th>
                                    <th class="text-center">Status</th>
									<th class="text-center">Edit</th>
									<th class="text-center">Delete</th>
                                </tr>
                            </thead>
							{if $properties}
                            <tbody>
							{foreach from=$properties item=property}
                                <tr>
                                
                                    <td class="text-center font-weight-light">{$property.name}</td>
                                     <td class="text-center font-weight-light"> {$property.district}<br>[ {$property.panchayath} ]</td>
                                     
                                    <td class="text-center font-weight-light"><a href="propertyDetails.php?key={$property.property_key}">{$property.property_name}</a></td>
                                    <td class="text-center">      
                                            <a href="uploads/{$property.property_key}/{$property.property_image}/{$property.image_name}" data-source="img/chairs-640.jpg" class="with-caption image-link" title="The caption">
                                              <!--   <img src="img/chairs-640.jpg" class="img-myproperty" />   -->
											<img src="uploads/{$property.property_key}/{$property.property_image}/{$property.image_name}" class="img-myproperty" />
                                            </a>
     
                                    </td>
                                    <td class="text-center">
                                        <ul class="nav justify-content-center">
                                                <li class="nav-item ">
                                                    <a class="nav-link text-success btn" href="deActivateProperty.php?key={$property.property_key}">De Activate</a>
                                                </li>
                                               
                                        
                                        </ul>
                                        
                                    </td>
									<td class="text-center font-weight-light"><a href="editPropertyByAdmin.php?key={$property.property_key}" >Edit</a></td>
									<td class="text-center font-weight-light"><a href="deleteActivePropertyByAdmin.php?key={$property.property_key}&u={$property.userkey}&return=active" onclick="return confirm('Are you sure to Delete This Property ?')" style="color:red;">Delete</a></td>
									
									
								</tr>
                            {/foreach}    
                             </tbody>
							 {else}
							 	 <div class="col-lg-12 col-md-12 col-sm-12 col-12">
								
									<div class="box text-center">
                               
										<h6 class=" bg-light bg_light">There is no Approved Properties yet</h6>
									</div>
									
							   </div>
							
							 {/if}
                    </table>
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
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.esm.js"></script>
<script src="js/bootstrap.esm.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- js -->
{literal}
<script>
    getPagination('#table-id');
    $('#maxRows').trigger('change');
    function getPagination (table){
    
        $('#maxRows').on('change',function(){
          $('.pagination').html('');						// reset pagination div
          var trnum = 0 ;									// reset tr counter 
          var maxRows = parseInt($(this).val());			// get Max Rows from select option
          
          var totalRows = $(table+' tbody tr').length;		// numbers of rows 
         $(table+' tr:gt(0)').each(function(){			// each TR in  table and not the header
           trnum++;									// Start Counter 
           if (trnum > maxRows ){						// if tr number gt maxRows
             
             $(this).hide();							// fade it out 
           }if (trnum <= maxRows ){$(this).show();}// else fade in Important in case if it ..
         });											//  was fade out to fade it in 
         if (totalRows > maxRows){						// if tr total rows gt max rows option
           var pagenum = Math.ceil(totalRows/maxRows);	// ceil total(rows/maxrows) to get ..  
                                 //	numbers of pages 
           for (var i = 1; i <= pagenum ;){			// for each page append pagination li 
           $('.pagination').append('<li data-page="'+i+'">\
                        <span>'+ i++ +'<span class="sr-only">(current)</span></span>\
                      </li>').show();
           }											// end for i 
       
           
        } 												// end if row count > max rows
        $('.pagination li:first-child').addClass('active'); // add active class to the first li 
          
          
          //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
         showig_rows_count(maxRows, 1, totalRows);
          //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
    
          $('.pagination li').on('click',function(e){		// on click each page
          e.preventDefault();
          var pageNum = $(this).attr('data-page');	// get it's number
          var trIndex = 0 ;							// reset tr counter
          $('.pagination li').removeClass('active');	// remove active class from all li 
          $(this).addClass('active');					// add active class to the clicked 
          
          
          //SHOWING ROWS NUMBER OUT OF TOTAL
         showig_rows_count(maxRows, pageNum, totalRows);
          //SHOWING ROWS NUMBER OUT OF TOTAL
          
          
          
           $(table+' tr:gt(0)').each(function(){		// each tr in table not the header
             trIndex++;								// tr index counter 
             // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
             if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
               $(this).hide();		
             }else {$(this).show();} 				//else fade in 
           }); 										// end of for each tr in table
            });										// end of on click pagination list
      });
                        // end of on select change 
       
                  // END OF PAGINATION 
      
    }	
    
    
        
    
    // SI SETTING
    $(function(){
    // Just to append id number for each row  
    default_index();
            
    });
    
    //ROWS SHOWING FUNCTION
    function showig_rows_count(maxRows, pageNum, totalRows) {
     //Default rows showing
          var end_index = maxRows*pageNum;
          var start_index = ((maxRows*pageNum)- maxRows) + parseFloat(1);
          var string = 'Showing '+ start_index + ' to ' + end_index +' of ' + totalRows + ' entries';               
          $('.rows_count').html(string);
    }
    
    // CREATING INDEX
    function default_index() {
    $('table tr:eq(0)').prepend('<th> ID </th>')
    
            var id = 0;
    
            $('table tr:gt(0)').each(function(){	
              id++
              $(this).prepend('<td>'+id+'</td>');
            });
    }
    
    // All Table search script
    function FilterkeyWord_all_table() {
    
    // Count td if you want to search on all table instead of specific column
    
    var count = $('.table').children('tbody').children('tr:first-child').children('td').length; 
    
          // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("search_input_all");
    var input_value =     document.getElementById("search_input_all").value;
          filter = input.value.toLowerCase();
    if(input_value !=''){
          table = document.getElementById("table-id");
          tr = table.getElementsByTagName("tr");
    
          // Loop through all table rows, and hide those who don't match the search query
          for (i = 1; i < tr.length; i++) {
            
            var flag = 0;
             
            for(j = 0; j < count; j++){
              td = tr[i].getElementsByTagName("td")[j];
              if (td) {
               
                  var td_text = td.innerHTML;  
                  if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                  //var td_text = td.innerHTML;  
                  //td.innerHTML = 'shaban';
                    flag = 1;
                  } else {
                    //DO NOTHING
                  }
                }
              }
            if(flag==1){
                       tr[i].style.display = "";
            }else {
               tr[i].style.display = "none";
            }
          }
      }else {
        //RESET TABLE
        $('#maxRows').trigger('change');
      }
    }
    </script>
<!--  -->
<script>
    $('.without-caption').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});

$('.with-caption').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
			}
		},
		zoom: {
			enabled: true
		}
	});


</script>
<!-- js -->
{/literal}
</body>
</html>
