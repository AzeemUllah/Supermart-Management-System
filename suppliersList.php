<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Supermart Management System</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="css/materializecss-icon.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/animate-css/animate.css" type="text/css" rel="stylesheet" media="screen,projection">
  
  <link href="js/plugins/morris-chart/morris.css" type="text/css" rel="stylesheet" media="screen,projection">
  	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>

<body>
<?php
session_start();
?>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
					
					
					
					<!-- Baner Logo Here -->
					<li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="images/" alt="logo"></a> <span class="logo-text">Suppermart</span></h1></li>
                    </ul>
					
					
					
					
					
					
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Supermart"/>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                                              
					</ul>
                    
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/profile-pic.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
						<li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                        </li>
                        <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo " " . $_SESSION["username"];?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
            </li>
			
			
			<li class="bold"><a href="dashboard.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>Dashboard</a>
            </li>
			
			<li class="bold"><a href="categoryList.php" class="waves-effect waves-cyan"><i class="mdi-action-list"></i>Category</a>
            </li>
			<li class="bold"><a href="products.php" class="waves-effect waves-cyan"><i class="mdi-image-crop-16-9"></i>Product List</a>
            </li>
            
			
			<li class="bold"><a href="customersList.php" class="waves-effect waves-cyan"><i class="mdi-social-people"></i>Customer's List</a>
            </li>
            
			
			<li class="bold"><a href="salesRecipt.php" class="waves-effect waves-cyan"><i class="mdi-action-receipt"></i>Sales Recipt</a>
            </li>
			
			
			<li class="bold active"><a href="suppliersList.php" class="waves-effect waves-cyan"><i class="mdi-image-nature-people"></i>Supplier</a>
            </li>
			
			
            
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">
        
        
        <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">List of all Suppliers</p>
            <div class="divider"></div>
			
			
			
			<div id="jsLoader">
			</div>
			
			<div id="formHolder">
			</div>
			
			                    <div id="card-widgets">
                        <div class="row">
			
			
			
			
                            <?php
			
			
					
			$servername = "localhost";

					$username = $_SESSION["username"];
					$password = $_SESSION["password"];
$dbname = "supermart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="select * from supplier";



$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = mysqli_fetch_array($result))
	{
		echo "<div class='col s12 m6 l4'>
                                <div id='profile-card' class='card'>
                                    <div class='card-image waves-effect waves-block waves-light'>
                                        <img class='activator' src='images/user-bg.jpg' alt='user background'>
                                    </div>
                                    <div class='card-content'>
                                        <img src='".$row['imageUrl']."' alt='' class='circle responsive-img activator card-profile-image'>
                                        <a class='btn-floating activator btn-move-up waves-effect waves-light darken-2 right'>
                                            <i class='mdi-action-account-circle'></i>
                                        </a>

                                        <span class='card-title activator grey-text text-darken-4'> ".$row['SUPPLIER_NAME']."</span>
                                        <p><i class='mdi-action-perm-identity cyan-text text-darken-2'></i> ".$row['SUPPLIER_TYPE']."</p>
                                        <p><i class='mdi-action-perm-phone-msg cyan-text text-darken-2'></i> ".$row['SUPPLIER_PHONE']."</p>
                                        <p><i class='mdi-communication-email cyan-text text-darken-2'></i> ".$row['SUPPLIER_EMAIL']."</p>

                                    </div>
                                    <div class='card-reveal'>
                                        <span class='card-title grey-text text-darken-4'> ".$row['SUPPLIER_NAME']."<i class='mdi-navigation-close right'></i></span>
                                        <p>Here is some more information about ".$row['SUPPLIER_NAME'].".</p>
                                        <p><i class='mdi-action-perm-identity cyan-text text-darken-2'></i> ".$row['SUPPLIER_TYPE']."</p>
                                        <p><i class='mdi-action-perm-phone-msg cyan-text text-darken-2'></i> ".$row['SUPPLIER_PHONE']."</p>
                                        <p><i class='mdi-communication-email cyan-text text-darken-2'></i> ".$row['SUPPLIER_EMAIL']."</p>
                                        
                                        <p><i class='mdi-device-airplanemode-on cyan-text text-darken-2'></i> ".$row['SUPPLIER_CITY']."</p>
										
										<a class='btn-floating waves-effect waves-light green accent-4' onclick=editSupplier('".$row['SUPPLIER_ID']."','".$row['SUPPLIER_NAME']."','".$row['SUPPLIER_PHONE']."','".$row['SUPPLIER_ADDRESS']."','".$row['SUPPLIER_EMAIL']."','".$row['SUPPLIER_TYPE']."')><i class='mdi-editor-border-color'></i></a>
										<a class='btn-floating waves-effect waves-light red accent-2' onclick=conformDelete('".$row['SUPPLIER_ID']."')><i class='mdi-action-delete'></i></a>
										<a class='btn-floating waves-effect waves-light light-blue' href='supplierDetails.php?supplier_id=".$row['SUPPLIER_ID']."'><i class='mdi-action-info activator'></i></a>
									</div>
                                </div>
                            </div>";
}

}
else
	echo "No vendor in the list!";
$conn->close();

			
			
				
				
				
				
				?>
				
			
			
			
			
			
			
			
			</div>
			</div>
			
			
			
			
			<!--Pie & Doughnut Charts-->
            <div id="chartjs-pie-chart" class="section">
              <h4 class="header">Total Pending vs Total Invested: </h4>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>Red Section represents amount of money which is pending over all the vendors where as Blue section shows total amount invested so far in Buissness.</p>
                </div>
                <div class="col s12 m8 l9">
                  <div class="row">
                    <div class="col s12 m6 l6">
                      
                      <div class="sample-chart-wrapper">
                        <canvas id="pie-chart-sample" ></canvas>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			
			
			
			
            
          </div>
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      
    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2016 <a class="grey-text text-lighten-4" href="azeemullah.carbonmade.com" target="_blank">Azeem Ullah</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="">Azeem Ullah</a></span>
        </div>
    </div>
  </footer>
  <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
	
	<!-- morris -->
    <script type="text/javascript" src="js/plugins/raphael/raphael-min.js"></script>
    <script type="text/javascript" src="js/plugins/morris-chart/morris.min.js"></script>
    

    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    
	
	<script type="text/javascript" src="js/plugins/sweetalert/sweetalert.min.js"></script>   
    
	<script>
	function conformDelete($id) {

			swal({
        		title: "Are you sure?",
        		text: "You will not be able to recover this category!",
        		type: "warning",
        		showCancelButton: true,
        		confirmButtonColor: '#DD6B55',
        		confirmButtonText: 'Yes, delete it!',
        		closeOnConfirm: false
        	},
        	function(){
        		swal("Deleted!", "Your selected supplier has been deleted!", "success");
				window.location.href = "api-supplierDelete.php?suppplier_id=" + $id;
			});
	
	
}



function editSupplier($id,$name,$phone,$address,$email,$type) {              
 var html = " <div class='row' id='toBeRemoved'><div class='col s12 m4 l3'></div>"
              +"<div class='col s12 m8 l9'>"
               +" <div class='progress'>"
                  +"<div class='indeterminate'></div>"
                +"</div>"
              +"</div>"
            +"</div>";
document.getElementById("jsLoader").innerHTML = html;
$('#card-widgets').addClass('animated fadeOutRight');
  setTimeout(function(){ 
		
		$('#toBeRemoved').remove();
	
		var form= "<form class='col s12' action= 'api-updateSuppplier.php' method='POST'> <div id='basic-form' class='section animated fadeInLeft'> <div class='row'> <div class='col s12 m12 l6'> <div class='card-panel'> <h4 class='header2'>Edit Customer:</h4> <div class='row'> <div class='col s12'> <div class='row'> <div class='row'> <div class='input-field col s12'> <i class='mdi-action-loyalty prefix'></i> <input name='custName' type='text' class='validate' value='"+$name+"'> <label for='prodNamelbl'>Name</label> </div> </div> <div class='row'> <div class='input-field col s12'> <i class='mdi-action-settings-phone prefix'></i> <input name='custPhone' type='text' class='validate' value='"+$phone+"'> <label for='prodQuantitylbl'>Phone</label> </div> </div> <div class='row'> <div class='input-field col s12'> <i class='mdi-action-home prefix'></i> <input name='custAddress' type='text' class='validate' value='"+$address+"'> <label for='unitPricelbl'>Address</label> </div> </div> <div class='row'> <div class='input-field col s12'> <i class='mdi-communication-email prefix'></i> <input name='custEmail' type='text' class='validate' value='"+$email+"'> <label for='expiryDatelbl'>Email:</label> </div> </div> <div class='row'> <div class='input-field col s12'> <i class='mdi-action-class prefix'></i> <input name='custType' type='text' class='validate' value='"+$type+"'> <label for='imageURLlbl'>Type</label> </div> </div> <div class='row'> <div class='input-field col s12'> <button class='btn cyan waves-effect waves-light right' style = 'height: 60px;' type='submit' name='action'>Update <i class='mdi-content-send right'></i> </button> </div> </div> <input name='id' type='hidden' class='validate' value='"+$id+"'> </div> </div> </div> </div> </div> </div> </div> </form>";

	   document.getElementById("formHolder").innerHTML = form;
	   
	   
	   
    }, 3000);  


}




var PieDoughnutChartSampleData = [
    <?php
	$purchase_total = 0;
	$purchase_due = 0;
			$servername = "localhost";

					$username = $_SESSION["username"];
					$password = $_SESSION["password"];
$dbname = "supermart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
$sql="SELECT *, (PURCHASE_TOTAL-PURCHASE_PAID) AS PURCHASE_DUE FROM purchase_order";



$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = mysqli_fetch_array($result))
	{
		$purchase_total += $row['PURCHASE_TOTAL'];
		$purchase_due += $row['PURCHASE_DUE'];
	}
	
	echo "
		{
        value: ".$purchase_due.",
        color:'#F7464A',
        highlight: '#FF5A5E',
        label: 'Due Amount PKR'
    },
    {
        value: ".$purchase_total.",
        color: '#46BFBD',
        highlight: '#5AD3D1',
        label: 'Total Invested PKR'
    }
	
	";
}

$conn->close();

			
			

?>
]

window.PieChartSample = new Chart(document.getElementById("pie-chart-sample").getContext("2d")).Pie(PieDoughnutChartSampleData,{
   responsive:true
  });
  
	</script>
	
</body>

</html>