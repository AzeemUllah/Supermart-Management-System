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
</head>

<body>
<?php
session_start();

?>

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
			
			<li class="bold active"><a href="categoryList.php" class="waves-effect waves-cyan"><i class="mdi-action-list"></i>Category</a>
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
			
			   
			
			
			
			<div id="card-stats" class="seaction">
              <h4 class="header"></h4>
              <p></p>
              <div class="row">
			  
<?php  
					$username = $_SESSION["username"];
					$password = $_SESSION["password"];
					// Create connection
					$conn = new mysqli("localhost", $username, $password, "supermart");
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
					 
					$sql = "SELECT *
					FROM product_category;";
					
					
					$result = $conn->query($sql);
					
					
					$conn->close();
					
					$numbers = array("green", "purple", "blue-grey", "deep-purple", "pink", "blue", "teal", "lime", "orange", "deep-orange");
					$i=0;
					if ($result->num_rows > 0) {
						while($row = mysqli_fetch_array($result)){
							
							$conn = new mysqli("localhost", $username, $password, "supermart");
								// Check connection
								if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
								}
							
							$sql2="SELECT * FROM product where PRODUCT_CATEGORY_ID=" . $row['PRODUCT_CATEGORY_ID'];

							if ($result2=mysqli_query($conn,$sql2))
							  {
							  $rowcount=mysqli_num_rows($result2);

							  mysqli_free_result($result2);
							  }
					
							
							$randomNumber = mt_rand(0,99);
							//$count = $conn->query($sql);
							
							echo '<div class="col s12 m6 l3">
                                 <a href="products.php?product_category_id=' . $row['PRODUCT_CATEGORY_ID'] . '">
								<div class="card">
                                    <div class="card-content ' . $numbers[$i] . ' white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> '. $row['PRODUCT_CATEGORY_NAME'] .'</p>
                                        <h4 class="card-stats-number">'.$rowcount.'</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i>'. $randomNumber . '%<span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action center-align ' . $numbers[$i] . ' darken-2">
                                       <a class = "btn-warning-confirm" onclick="conformDelete('.$row['PRODUCT_CATEGORY_ID'].')">Delete</a>
									   
									   
									   
									   
									   
                                    </div>
                                </div>
								</a>
                            </div>';
							$i++;
							if ($i>9)
								$i=0;
						}
								
						//<a href="api-categoryDelete.php?product_category_id=' . $row['PRODUCT_CATEGORY_ID'] . '">Delete</a>
					} else {
						echo "0 results";
					}

					
?>
                            
			
			
			 </div>
  

			  <br>
			  
			  <div class="divider"></div>
			  
			  
			<div id="jsLoader">
			</div>
			  
			  
			  
			  
			  
			  
			  
			  
			  <p class="caption">Add New Category</p>
			  
			<div class="row">
				
				<div class="col s12 m6 l3">
                                <div class="card">
								<a onclick='addNewCategoryForm()'>
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i>New Category</p>
                                        <h4 class="card-stats-number">Add</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i><span class="green-text text-lighten-5"></span>
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </a>
								</div>
                 </div>


</div>


  </div>
            <!--card stats end-->
  
			<div id="formHolder">
			</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<br>
			
			
			<div class="divider"></div>
			<p class="caption">Statastics of Product Sale W.R.T Categories:</p>
			<div id="chartist-chart-2" class="section">
              <div class="row">
                <div class="col s12 m8 l9">
                  <div class="sample-chart-wrapper">
                    <div class="ct-chart ct-golden-section" id="statsCategory"></div>
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
	
    <script type="text/javascript" src="js/plugins/sweetalert/sweetalert.min.js"></script>   
	
	
    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartist-js/chartist-script.js"></script>
	
	<script>
	function addNewCategoryForm() {              
 var html = " <div class='row' id='toBeRemoved'><div class='col s12 m4 l3'></div>"
              +"<div class='col s12 m8 l9'>"
               +" <div class='progress'>"
                  +"<div class='indeterminate'></div>"
                +"</div>"
              +"</div>"
            +"</div>";
document.getElementById("jsLoader").innerHTML = html;
  setTimeout(function(){ 

       $('#toBeRemoved').remove();
		
			var form= "<form class='col s12' action= 'api-addCategory.php' method='POST'>"
			
+"			<div id='basic-form' class='section'>"
            +"  <div class='row'>"
			
			
			+"<div class='col s12 m12 l6'>"
        +"        <div class='card-panel'>"
      +"            <h4 class='header2'>Add Category:</h4>"
    +"              <div class='row'>"
  +"                  <div class='col s12'>"
+"					  <div class='row'>"
						
					  +"<div class='row'>"
                    +"    <div class='input-field col s12'>"
                  +"        <i class='mdi-action-account-circle prefix'></i>"
                +"          <input name='categoryName' type='text' class='validate'>"
              +"            <label for='lbl_parentName'>Name</label>"
            +"            </div>"
          +"            </div>"
					  
        +"              <div class='input-field col s12'>"
      +"                    <i class='mdi-action-question-answer prefix'></i>"
    +"                      <textarea name='categoryDescription' class='materialize-textarea validate' length='120'></textarea>"
  +"                        <label for='message'>Description</label>"
+"                      </div>"
                        +"<div class='row'>"
                   +"       <div class='input-field col s12'>"
                   +"         <button class='btn cyan waves-effect waves-light right' style = 'height: 60px;' type='submit' name='action'>Add"
                     +"         <i class='mdi-content-send right'></i>"
                       +"     </button>"
                         +" </div>"
                       +" </div>"
					  
					  
                      
					  
					  
				  
        +"            </div>"
      +"            </div>"
    +"            </div>"
  +"            </div>"
+"			</div>"
             +"   </div>"
             +" </div>";

	   document.getElementById("formHolder").innerHTML = form;
	   
	   
	   
    }, 3000);  


}
        


        
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
				window.location.href = "api-categoryDelete.php?product_category_id=" + $id;
			});
	
	
}



	</script>
	
	
	
	
	<script>
	var chart = new Chartist.Line('#statsCategory', {
  labels: 
  
  <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "supermart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
$sql = "SELECT distinct PRODUCT_CATEGORY_NAME FROM product_category";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$counter = 0;
	echo "[";
	while($row = mysqli_fetch_array($result))
	{
		$numResults = $result->num_rows;
		$counter = $counter+1;
		if($counter != $numResults)
			echo '"' . $row['PRODUCT_CATEGORY_NAME'] . '",';
		else
			echo '"' . $row['PRODUCT_CATEGORY_NAME'] . '"]';
		
	}
	
}
	else {
    echo "0 results";
}

$conn->close();
?>
  
  
  
  
  
  
  
  
  ,
  series: [
  
  <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "supermart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
$sql = "SELECT C.PRODUCT_CATEGORY_ID ,C.PRODUCT_CATEGORY_NAME,count(P.PRODUCT_ID) AS 'count' from PRODUCT P ,PRODUCT_CATEGORY C WHERE P.PRODUCT_CATEGORY_ID=C.PRODUCT_CATEGORY_ID GROUP BY C.PRODUCT_CATEGORY_ID,C.PRODUCT_CATEGORY_NAME";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "[";
	while($row = mysqli_fetch_array($result))
	{
		echo $row['count'] . ", ";
	}
	echo "]";
}
	else {
    echo "0 results";
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

	</script>
	
</body>

</html>