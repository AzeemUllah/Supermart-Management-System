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
			<li class="bold active"><a href="products.php" class="waves-effect waves-cyan"><i class="mdi-image-crop-16-9"></i>Product List</a>
            </li>
            
			
			<li class="bold"><a href="customersList.php" class="waves-effect waves-cyan"><i class="mdi-social-people"></i>Customer's List</a>
            </li>
            
			
			<li class="bold"><a href="salesRecipt.php" class="waves-effect waves-cyan"><i class="mdi-action-receipt"></i>Sales Recipt</a>
            </li>
			
			
			<li class="bold"><a href="suppliersList.php" class="waves-effect waves-cyan"><i class="mdi-image-nature-people"></i>Supplier</a>
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

            <p class="caption" id = "pageHeading">List of all Products</p>
            <div class="divider"></div>
			
			
			
			<div id="jsLoader">
			</div>
			
			<div id="formHolder">
			</div>
			
			
			
			
			
			<div id="products" class="row">
			<div class='product-sizer'></div>
			
			
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

$sql="";

if (!isset($_GET["product_category_id"])) {
 
$sql = "SELECT *
FROM product
INNER JOIN product_category
ON product.PRODUCT_CATEGORY_ID=product_category.PRODUCT_CATEGORY_ID";
}
else if(isset($_GET["product_category_id"])){
	
$sql = "SELECT *
FROM product
INNER JOIN product_category
ON product.PRODUCT_CATEGORY_ID=product_category.PRODUCT_CATEGORY_ID 
AND
product.PRODUCT_CATEGORY_ID=" . $_GET["product_category_id"];
}
else{
$sql = "SELECT *
FROM product
INNER JOIN product_category
ON product.PRODUCT_CATEGORY_ID=product_category.PRODUCT_CATEGORY_ID;";
	
}



$result = $conn->query($sql);
$count=0;
if ($result->num_rows > 0) {
	while($row = mysqli_fetch_array($result))
	{
		
              echo  "
                <div class='product'>
                    <div class='card'>
                        <div class='card-image waves-effect waves-block waves-light'>
                            <a href='#' class='btn-floating btn-large btn-price waves-effect waves-light  pink accent-2'>". $row['UNIT_PRICE']." PKR</a>
                            

                            <a href='#'><img src='".$row['imageUrl']."' alt='product-img'>
                            </a>
                        </div>
                        <ul class='card-action-buttons'>
                            <li><a class='btn-floating waves-effect waves-light green accent-4' onclick=editProduct('".$row['PRODUCT_ID']."','".$row['PRODUCT_NAME']."','".$row['QUANTITY_OF_SUB_UNITS']."','".$row['UNIT_PRICE']."','".$row['EXPIRY_DATE']."','".$row['imageUrl']."')><i class='mdi-editor-border-color'></i></a>
                            </li>
                            <li><a class='btn-floating waves-effect waves-light red accent-2' onclick=conformDelete('".$row['PRODUCT_ID']."')><i class='mdi-action-delete'></i></a>
                            </li>
                            <li><a class='btn-floating waves-effect waves-light light-blue'><i class='mdi-action-info activator'></i></a>
                            </li>
                        </ul>
                        <div class='card-content'>

                            <div class='row'>
                                <div class='col s8'>
                                    <p class='card-title grey-text text-darken-4'><a href='#' class='grey-text text-darken-4'>".$row['PRODUCT_NAME']."</a>
                                    </p>
                                </div>
                                <div class='col s4 no-padding'>
                                    <a href=''></a><img src='images/amazon.jpg' alt='amazon' class='responsive-img'>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class='card-reveal'>
                            <span class='card-title grey-text text-darken-4'><i class='mdi-navigation-close right'></i>".$row['PRODUCT_NAME']."</span>
                            <p># of SubUnits: ".$row['QUANTITY_OF_SUB_UNITS']."<br>Unit Price: ".$row['UNIT_PRICE']."<br>Expiry Date: ".$row['EXPIRY_DATE']."<br>Category: ".$row['PRODUCT_CATEGORY_NAME']."</p>
                        </div>
                    </div>
                </div>";
				$count++;
			
	}
	echo "
	<script>
		document.getElementById('pageHeading').innerHTML='List of all Products (".$count." Products Selected)';
	</script>";
} else {
    echo "0 results";
}

$conn->close();

			
			
				
				
				
				
				?>
				
				
				
				
				
				
				
				
				
				
</div>
			
			
			
			
			
			
			
			
			
			
			
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			
			
			
			
			
			
			
			
			
            
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
    <!--prism
    <script type="text/javascript" src="js/prism/prism.js"></script>-->
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
	
	
	
    <!-- masonry -->
    <script src="js/plugins/masonry.pkgd.min.js"></script>
    <!-- imagesloaded -->
    <script src="js/plugins/imagesloaded.pkgd.min.js"></script>    
	
	<script type="text/javascript" src="js/plugins/sweetalert/sweetalert.min.js"></script>   
	
    <script type="text/javascript">
    /*
    * Masonry container for eCommerce page
    */
    var $containerProducts = $("#products");
    $containerProducts.imagesLoaded(function() {
      $containerProducts.masonry({
        itemSelector: ".product",
        columnWidth: ".product-sizer",
      });
    });
	
	
        
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
        		swal("Deleted!", "Your selected category has been deleted!", "success");
				window.location.href = "api-productDelete.php?product_id=" + $id;
			});
	
	
}


function editProduct($id,$name,$quantity,$unitPrice,$expiryDate,$imageUrl) {              
 var html = " <div class='row' id='toBeRemoved'><div class='col s12 m4 l3'></div>"
              +"<div class='col s12 m8 l9'>"
               +" <div class='progress'>"
                  +"<div class='indeterminate'></div>"
                +"</div>"
              +"</div>"
            +"</div>";
document.getElementById("jsLoader").innerHTML = html;
$('#products').addClass('animated fadeOutRight');
  setTimeout(function(){ 
		
		$('#toBeRemoved').remove();
	
		var form= "<form class='col s12' action= 'api-updateProduct.php' method='POST'> <div id='basic-form' class='section animated fadeInLeft'> <div class='row'> <div class='col s12 m12 l6'> <div class='card-panel'> <h4 class='header2'>Edit Product:</h4> <div class='row'> <div class='col s12'> <div class='row'> <div class='row'> <div class='input-field col s12'> <i class='mdi-action-loyalty prefix'></i> <input name='prodName' type='text' class='validate' value='"+$name+"'> <label for='prodNamelbl'>Name</label> </div> </div> <div class='row'> <div class='input-field col s12'> <i class='mdi-editor-format-list-numbered prefix'></i> <input name='prodQuantity' type='text' class='validate' value='"+$quantity+"'> <label for='prodQuantitylbl'>Quantity of SubUnits</label> </div> </div> <div class='row'> <div class='input-field col s12'> <i class='mdi-editor-attach-money prefix'></i> <input name='unitPrice' type='text' class='validate' value='"+$unitPrice+"'> <label for='unitPricelbl'>Unit Price</label> </div> </div> <div class='row'> <div class='input-field col s12'> <i class='mdi-content-report prefix'></i> <input name='expiryDate' type='text' class='validate' value='"+$expiryDate+"'> <label for='expiryDatelbl'>Expiry Date:</label> </div> </div> <div class='row'> <div class='input-field col s12'> <i class='mdi-action-picture-in-picture prefix'></i> <input name='imageURL' type='text' class='validate' value='"+$imageUrl+"'> <label for='imageURLlbl'>Image URL</label> </div> </div> <div class='row'> <div class='input-field col s12'> <button class='btn cyan waves-effect waves-light right' style = 'height: 60px;' type='submit' name='action'>Update <i class='mdi-content-send right'></i> </button> </div> </div> <input name='id' type='hidden' class='validate' value='"+$id+"'> </div> </div> </div> </div> </div> </div> </div> </form>";

	   document.getElementById("formHolder").innerHTML = form;
	   
	   
	   
    }, 3000);  


}
    
	</script>
	
	
    </script>

    
</body>

</html>