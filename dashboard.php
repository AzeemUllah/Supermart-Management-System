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
			
			
			
			<li class="bold active"><a href="dashboard.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>Dashboard</a>
            </li>
            
			<li class="bold"><a href="categoryList.php" class="waves-effect waves-cyan"><i class="mdi-action-list"></i>Category</a>
            </li>
			<li class="bold"><a href="products.php" class="waves-effect waves-cyan"><i class="mdi-image-crop-16-9"></i>Product List</a>
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

            <p class="caption">List of all Products</p>
            <div class="divider"></div>
			
			
			<div class="row">
                            <div class="col s12 m8 l8">
                                <div class="card">
                                    <div class="card-move-up waves-block waves-light" >
                                        <div id="chartist-chart-2" class="section">
										  
											  <div class="sample-chart-wrapper">
												<div class="ct-chart ct-golden-section" id="salesReport"></div>
											</div>
										</div>   										
                                    </div>
                                    <div class="card-content" >
                                        <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                                    </div>

                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Revenue by Month <i class="mdi-navigation-close right"></i></span>
                                        <table class="responsive-table centered">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Year</th>
                                                    <th data-field="month">Month</th>
                                                    <th data-field="item-sold">Total Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>


<?php
					$servername = "localhost";

					$username = $_SESSION["username"];
					$password = $_SESSION["password"];
$dbname = "supermart";
$monthNames = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql="SELECT YEAR(DATE_OF_SALES) as SalesYear,
         MONTH(DATE_OF_SALES) as SalesMonth,
         SUM(TOTAL) AS TotalSales
    FROM sales_order
GROUP BY YEAR(DATE_OF_SALES), MONTH(DATE_OF_SALES)
ORDER BY YEAR(DATE_OF_SALES), MONTH(DATE_OF_SALES)";



$result = $conn->query($sql);


if ($result->num_rows > 0) {
	
                                             
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$row['SalesYear']."</td>
			<td>".$monthNames[$row['SalesMonth']-1]."</td>
			<td>".$row['TotalSales']." PKR</td>";
		echo "</tr>";   
	}
                                              
	
}

$conn->close();


	
	
	
	
	
	?>											





											  
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    </div>
            </div>
			
			
			<div id="work-collections">
                        <div class="row">
                    
			
            <div class="col s12 m12 l6">
                                <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-editor-vertical-align-top circle light-blue darken-2"></i>
                                        <span class="collection-header">Top Sold Products: </span>
                                        <p>People's Favorites</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
									
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


$sql="SELECT p.PRODUCT_NAME, SUM(sod.QUANTITY_OF_SOLD_UNITS) AS TotalQuantity, pc.PRODUCT_CATEGORY_NAME, p.UNIT_PRICE
FROM sales_order_details sod, product p, product_category pc
where p.PRODUCT_ID = sod.PRODUCT_ID and pc.PRODUCT_CATEGORY_ID = p.PRODUCT_CATEGORY_ID
GROUP BY sod.PRODUCT_ID
ORDER BY SUM(sod.QUANTITY_OF_SOLD_UNITS) ASC
LIMIT 5";



$result = $conn->query($sql);
$colors=array("cyan", "grey darken-3", "teal", "green", "pink accent-2");
$counter=0;
if ($result->num_rows > 0) {
	
                                             
	while($row = mysqli_fetch_array($result))
	{
		echo "<li class='collection-item'>
                                        <div class='row'>
                                            <div class='col s6'>
                                                <p class='collections-title'><strong>".$row['PRODUCT_NAME']."</strong></p>
                                                <p class='collections-content'>Amount Sold: ".$row['TotalQuantity']."</p>
                                            </div>
                                            <div class='col s3'>
                                                <span class='task-cat ".$colors[$counter]."'>".$row['PRODUCT_CATEGORY_NAME']."</span>
                                            </div>
                                            <div class='col s3'>
                                                <div id='productTotalTurnaround'>Revenue: <strong>".$row['UNIT_PRICE']* $row['TotalQuantity']."</strong></div>
                                            </div>
                                        </div>
                                    </li>";
									
		$counter++;
	}
                                              
	
}

$conn->close();


	
	
	
	
	
	?>											

                                    
									
									
									
									
									
									
									
									
									
                                </ul>
                            </div>
							
							
							
							
							
							
							
            <div class="col s12 m12 l6">
                                <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-editor-vertical-align-bottom circle light-blue darken-2"></i>
                                        <span class="collection-header">Least Sold Products: </span>
                                        <p>Products to be Removed</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
									
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


$sql="SELECT p.PRODUCT_NAME, SUM(sod.QUANTITY_OF_SOLD_UNITS) AS TotalQuantity, pc.PRODUCT_CATEGORY_NAME, p.UNIT_PRICE
FROM sales_order_details sod, product p, product_category pc
where p.PRODUCT_ID = sod.PRODUCT_ID and pc.PRODUCT_CATEGORY_ID = p.PRODUCT_CATEGORY_ID
GROUP BY sod.PRODUCT_ID
ORDER BY SUM(sod.QUANTITY_OF_SOLD_UNITS) DESC
LIMIT 5";



$result = $conn->query($sql);
$colors=array("cyan", "grey darken-3", "teal", "green", "pink accent-2");
$counter=4;
if ($result->num_rows > 0) {
	
                                             
	while($row = mysqli_fetch_array($result))
	{
		echo "<li class='collection-item'>
                                        <div class='row'>
                                            <div class='col s6'>
                                                <p class='collections-title'><strong>".$row['PRODUCT_NAME']."</strong></p>
                                                <p class='collections-content'>Amount Sold: ".$row['TotalQuantity']."</p>
                                            </div>
                                            <div class='col s3'>
                                                <span class='task-cat ".$colors[$counter]."'>".$row['PRODUCT_CATEGORY_NAME']."</span>
                                            </div>
                                            <div class='col s3'>
                                                <div id='productTotalTurnaround'>Revenue: <strong>".$row['UNIT_PRICE']* $row['TotalQuantity']."</strong></div>
                                            </div>
                                        </div>
                                    </li>";
									
		$counter--;
	}
                                              
	
}

$conn->close();


	
	
	
	
	
	?>											

                                    
									
									
									
									
									
									
									
									
									
                                </ul>
                            </div>
							
							
							
							
							
							
							
                            </div>
                            </div>
							
							
							
							
							<div id="chartjs-radar-chart" class="section">
              <h4 class="header">Top Customers</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>This chart displays top customers along side with total PKR they have spent.</p>
                </div>
                <div class="col s12 m8 l9">
                  <div class="sample-chart-wrapper">
                    <canvas id="radar-chart-sample" height="120"></canvas>
                  </div>
                </div>
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
	
    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartist-js/chartist-script.js"></script>
	
	
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chartjs-sample-chart.js"></script>

<script>
	var chart = new Chartist.Line('#salesReport', {
  labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
  
  
  
  
  
  
  
  
  
  
  ,
  series: [
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

$year=array('2010','2011','2012','2013','2014','2015','2016','2017');

foreach ($year as $yearInQuery) {
   


$sql="SELECT YEAR(DATE_OF_SALES) as SalesYear,
         MONTH(DATE_OF_SALES) as SalesMonth,
         SUM(TOTAL) AS TotalSales
    FROM sales_order
where YEAR(DATE_OF_SALES) = ".$yearInQuery."
GROUP BY YEAR(DATE_OF_SALES), MONTH(DATE_OF_SALES)
ORDER BY YEAR(DATE_OF_SALES), MONTH(DATE_OF_SALES)";



$result = $conn->query($sql);


if ($result->num_rows > 0) {
	echo "[";
	while($row = mysqli_fetch_array($result))
	{
		
			echo $row['TotalSales'] . ", ";	
		
	}
	echo "],";
}
}

$conn->close();


	
	
	
	
	
	?>
  ]
}, {
  low: 0
});

// Let's put a sequence number aside so we can use it in the event callbacks
var seq = 0,
  delays = 80,
  durations = 500;

// Once the chart is fully created we reset the sequence
chart.on('created', function() {
  seq = 0;
});

// On each drawn element by Chartist we use the Chartist.Svg API to trigger SMIL animations
chart.on('draw', function(data) {
  seq++;

  if(data.type === 'line') {
    // If the drawn element is a line we do a simple opacity fade in. This could also be achieved using CSS3 animations.
    data.element.animate({
      opacity: {
        // The delay when we like to start the animation
        begin: seq * delays + 1000,
        // Duration of the animation
        dur: durations,
        // The value where the animation should start
        from: 0,
        // The value where it should end
        to: 1
      }
    });
  } else if(data.type === 'label' && data.axis === 'x') {
    data.element.animate({
      y: {
        begin: seq * delays,
        dur: durations,
        from: data.y + 100,
        to: data.y,
        // We can specify an easing function from Chartist.Svg.Easing
        easing: 'easeOutQuart'
      }
    });
  } else if(data.type === 'label' && data.axis === 'y') {
    data.element.animate({
      x: {
        begin: seq * delays,
        dur: durations,
        from: data.x - 100,
        to: data.x,
        easing: 'easeOutQuart'
      }
    });
  } else if(data.type === 'point') {
    data.element.animate({
      x1: {
        begin: seq * delays,
        dur: durations,
        from: data.x - 10,
        to: data.x,
        easing: 'easeOutQuart'
      },
      x2: {
        begin: seq * delays,
        dur: durations,
        from: data.x - 10,
        to: data.x,
        easing: 'easeOutQuart'
      },
      opacity: {
        begin: seq * delays,
        dur: durations,
        from: 0,
        to: 1,
        easing: 'easeOutQuart'
      }
    });
  } else if(data.type === 'grid') {
    // Using data.axis we get x or y which we can use to construct our animation definition objects
    var pos1Animation = {
      begin: seq * delays,
      dur: durations,
      from: data[data.axis.units.pos + '1'] - 30,
      to: data[data.axis.units.pos + '1'],
      easing: 'easeOutQuart'
    };

    var pos2Animation = {
      begin: seq * delays,
      dur: durations,
      from: data[data.axis.units.pos + '2'] - 100,
      to: data[data.axis.units.pos + '2'],
      easing: 'easeOutQuart'
    };

    var animations = {};
    animations[data.axis.units.pos + '1'] = pos1Animation;
    animations[data.axis.units.pos + '2'] = pos2Animation;
    animations['opacity'] = {
      begin: seq * delays,
      dur: durations,
      from: 0,
      to: 1,
      easing: 'easeOutQuart'
    };

    data.element.animate(animations);
  }
});

// For the sake of the example we update the chart every time it's created with a delay of 10 seconds
/*chart.on('created', function() {
  if(window.__exampleAnimateTimeout) {
    clearTimeout(window.__exampleAnimateTimeout);
    window.__exampleAnimateTimeout = null;
  }
  window.__exampleAnimateTimeout = setTimeout(chart.update.bind(chart), 12000);
});
*/


var RadarChartSampleData = {
	
	
	
	
    labels: [
	
	
		
<?php
					$servername = "localhost";

					$username = $_SESSION["username"];
					$password = $_SESSION["password"];
$dbname = "supermart";
$monthNames = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql="SELECT CUSTOMER_NAME,SUM(TOTAL) as total FROM SALES_ORDER,customer WHERE DATE_OF_SALES BETWEEN DATE_SUB(now(), INTERVAL 3 MONTH) AND now() AND customer.CUSTOMER_ID = sales_order.CUSTOMER_ID GROUP BY sales_order.CUSTOMER_ID ORDER BY SUM(TOTAL) desc LIMIT 5;";



$result = $conn->query($sql);


if ($result->num_rows > 0) {
	
                                             
	while($row = mysqli_fetch_array($result))
	{ 
		echo "'" . $row['CUSTOMER_NAME']. "', ";
	}
}

$conn->close();


	
	
	
	
	
	?>						
	
	
	
	
	
	],
    datasets: [
        {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [
			
			
			
			
			
			
			<?php
					$servername = "localhost";

					$username = $_SESSION["username"];
					$password = $_SESSION["password"];
$dbname = "supermart";
$monthNames = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql="SELECT CUSTOMER_NAME,SUM(TOTAL) as total FROM SALES_ORDER,customer WHERE DATE_OF_SALES BETWEEN DATE_SUB(now(), INTERVAL 3 MONTH) AND now() AND customer.CUSTOMER_ID = sales_order.CUSTOMER_ID GROUP BY sales_order.CUSTOMER_ID ORDER BY SUM(TOTAL) desc LIMIT 5;";



$result = $conn->query($sql);


if ($result->num_rows > 0) {
	
                                             
	while($row = mysqli_fetch_array($result))
	{ 
		echo $row['total'] . ", ";
	}
	
}

$conn->close();


	
	
	
	
	
	?>						
	
	
	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			]
        }
    ]
};

					




window.RadarChartSample = new Chart(document.getElementById("radar-chart-sample").getContext("2d")).Radar(RadarChartSampleData,{
   responsive:true
  });
  
  
  
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