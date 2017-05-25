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
            
			
			<li class="bold active"><a href="salesRecipt.php" class="waves-effect waves-cyan"><i class="mdi-action-receipt"></i>Sales Recipt</a>
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
          

		<?php
		
		if (isset($_GET["salesOrderId"])) {
			$count=1;
			$firstRow=0;
			$servername = "localhost";
			$username = $_SESSION["username"];
			$password = $_SESSION["password"];
			$dbname = "supermart";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			$conn2 = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			$sql="SELECT * FROM sales_order so, sales_order_details sod, customer c, product p
where so.CUSTOMER_ID = c.CUSTOMER_ID and so.SALES_ORDER_ID = sod.SALES_ORDER_ID and p.PRODUCT_ID=sod.PRODUCT_ID and sod.SALES_ORDER_ID=".$_GET['salesOrderId'].";";

$sql2="SELECT * FROM sales_order so, sales_order_details sod, customer c, product p
where so.CUSTOMER_ID = c.CUSTOMER_ID and so.SALES_ORDER_ID = sod.SALES_ORDER_ID and p.PRODUCT_ID=sod.PRODUCT_ID and sod.SALES_ORDER_ID=".$_GET['salesOrderId'].";";


			$result = $conn->query($sql);
			$result2 = $conn->query($sql2);

			if ($result->num_rows > 0) {
				$countTotalRows=0;
				$countCurrent=0;
				
				while($row2 = mysqli_fetch_array($result2))
				{
					$countTotalRows++;
				}
			
			
			
			
			

				while($row = mysqli_fetch_array($result))
				{
					
					$countCurrent++;
					
					
					if($firstRow==0){
					echo "<div id='invoice'>
            <div class='invoice-header'>
              <div class='row section'>
                <div class='col s12 m6 l6'>
                  <img src='images/generic-logo.png' alt='company logo'>
                  <p>To,
                    <br/>
                    <span class='strong'>".$row['CUSTOMER_NAME']."</span>
                    <br/>
                    <span>".$row['CUSTOMER_ADDRESS']."</span>
                    <br/>
                    <span>".$row['CUSTOMER_CITY']."</span>
                    <br/>
                    <span>".$row['CUSTOMER_PHONE']."</span>
                  </p>
                </div>

                <div class='col s12 m6 l6'>
                  <div class='invoce-company-address right-align'>
                    <span class='invoice-icon'><i class='mdi-social-location-city cyan-text'></i></span>

                    <p><span class='strong'>Zem Corporation</span>
                      <br/>
                      <span>221B, Bakers Street</span>
                      <br/>
                      <span>Marylebone, London</span>
                      <br/>
                      <span>0900-78601</span>
                    </p>
                  </div>

                  <div class='invoce-company-contact right-align'>
                    <span class='invoice-icon'><i class='mdi-communication-quick-contacts-mail cyan-text'></i></span>
                    <p><span class='strong'>Carbonmade.azeemullah.com</span>
                      <br/>
                      <span>info@zemcorp.com</span>
                      <br/>
                      <span>admin@zemcorp.com</span>
                    </p>
                  </div>

                </div>
              </div>
            </div>

            <div class='invoice-lable'>
              <div class='row'>
                <div class='col s12 m3 l3 cyan'>
                  <h4 class='white-text invoice-text'>INVOICE</h4>
                </div>
				
                <div class='col s12 m9 l9 invoice-brief cyan white-text'>
                  <div class='row'>
                    <div class='col s12 m3 l3'>
                      <p class='strong'>Total Due</p>
                      <h4 class='header'>$ 3,600.00</h4>
                    </div>
                    <div class='col s12 m3 l3'>
                      <p class='strong'>Invoice No</p>
                      <h4 class='header'>".$_GET['salesOrderId']."</h4>
                    </div>
                    <div class='col s12 m3 l3'>
                      <p class='strong'>Due Date</p>
                      <h4 class='header'>".$row['TOTAL']."</h4>
                    </div>
                  </div>
                </div>
				
				
              </div>
            </div>

            <div class='invoice-table'>
              <div class='row'>
                <div class='col s12 m12 l12'>
                  <table class='striped'>
                    <thead>
                      <tr>
                        <th data-field='no'>No</th>
                        <th data-field='item'>Item</th>
                        <th data-field='uprice'>Unit Price</th>
                        <th data-field='price'>Unit</th>
                        <th data-field='price'>Total</th>
                      </tr>
                    </thead>
                    <tbody>
					<tr>
                        <td>".$count++."</td>
                        <td>".$row['PRODUCT_NAME']."</td>
                        <td>".$row['UNIT_PRICE']." PKR</td>
                        <td>".$row['QUANTITY_OF_SOLD_UNITS']."</td>
                        <td>".$row['UNIT_PRICE']*$row['QUANTITY_OF_SOLD_UNITS']." PKR</td>
                      </tr>
					";
					$firstRow=1;
					}
					else{
						echo "
					  <tr>
                        <td>".$count++."</td>
                        <td>".$row['PRODUCT_NAME']."</td>
                        <td>".$row['UNIT_PRICE']." PKR</td>
                        <td>".$row['QUANTITY_OF_SOLD_UNITS']."</td>
                        <td>".$row['UNIT_PRICE']*$row['QUANTITY_OF_SOLD_UNITS']." PKR</td>
                      </tr>";
					}
					
					if($countCurrent==$countTotalRows){
						echo "
                      <tr>
                        <td colspan='3'></td>
                        <td>Sub Total:</td>
                        <td>".$row['TOTAL']." PKR</td>
                      </tr>
                      <tr>
                        <td colspan='3'></td>
                        <td>Service Tax</td>
                        <td>5.00%</td>
                      </tr>
					  <tr>
                        <td colspan='3'></td>
                        <td class='cyan white-text'>Grand Total</td>
                        <td class='cyan strong white-text'>". (round($row['TOTAL']+($row['TOTAL']*0.05)))."</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
              </div>
            </div>
            
            <div class='invoice-footer'>
              <div class='row'>
                <div class='col s12 m6 l6'>
                  <p class='strong'>Payment Method</p>
                  <p>CASH (PKR)</p>
                  <p class='strong'>Terms & Condition</p>
                  <ul>
                    <li>You know, being a BU Student isn't always the healthiest thing in the world.</li>
                    <li>We work too much for one credit hour course project and yet far too little for three credit hours ones.</li>
                  </ul>
                </div>
                <div class='col s12 m6 l6 center-align'>
                  <p>Approved By</p>
                  <img src='images/azeem1.png' alt='signature'>
                  <p class='header'>Azeem Ullah</p>
                  <p>CEO & Founder</p>
                </div>
              </div>
            </div>
            
          </div>";
					}
					
					
				}
				
					
			}


			$conn->close();

			
			
			
		}
		else
		{
			
			echo "<p class='caption'>Sales List</p>
					<div class='divider'></div>";
		
			echo "<div class='section'>";
			
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
			$sql="select * from sales_order;";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo "
					<div class='divider'></div>
            <div id='hoverable-table'>
              <h4 class='header'>List of All Sales</h4>
              <div class='row'>
                <div class='col s12 m4 l3'>
                  <p>Following are the List of all sales record so far: </p>
                </div>
                <div class='col s12 m8 l9'>
                  <table class='hoverable'>
                      <thead>
                      <tr>
                        <th data-field='id'>Sales Order ID</th>
                        <th data-field='name'>Date of Sales</th>
                        
						<th data-field='price'>Total</th>
                      </tr>
                    </thead>
                    <tbody>
					";
				while($row = mysqli_fetch_array($result))
				{
					echo "
                      <tr>
                        <td>".$row['SALES_ORDER_ID']."</td>
                        <td>".$row['DATE_OF_SALES']."</td>
                        
						<td>".$row['TOTAL']."</td>
						<td><a href='salesRecipt.php?salesOrderId=".$row['SALES_ORDER_ID']."' class='btn-floating waves-effect waves-light light-blue'><i class='mdi-action-info activator'></i></a><td>
                      </tr>";
				} 
                    
					echo "</tbody>
					</table>
                </div>
              </div>
            </div>";

			
			
			
			
			
			
			
				
			}
			
			echo "</div>";
		}
			
			
			
			
			
			
			
		?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
            
          
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
    
</body>

</html>