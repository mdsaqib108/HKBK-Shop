<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");


?>

<html>

	<head>

		<title>HKBKShop | HKBK's Online Shopping Site</title>
		<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
	
	
	<body>
	<!--Main Wrapper Starts here-->

				<div class="main_wrapper">  
						

							<!--Header Starts here-->
						<div class="header_wrapper">
						<a href ="index.php"><img id="logo" src="images/logo.gif" />
						</div>
							<!--Header ends here-->
						
						<!--Navigation Bar Starts here-->	
						<div class ="menubar">

						<ul id="menu">
								<li><a href="index.php">Home</a></li>
								<li><a href="all_products.php">All Products</a></li>
								<li><a href="customer/my_account.php">My Accounts</a></li>
								<li><a href="customer_register.php">Sign Up</a></li>
								<li><a href="cart.php">Shopping Cart</a></li>
								<li><a href="about.php">About</a></li>
							</ul>
							
							<div id="form">
								<form method="get" action="results.php"  enctype="multipart/form-data">
									<input type="text" name="user_query" placeholder="Search a Product" / >
									<input type="submit" name="search" value="Search" />
								</form>
							</div>
							
							
							</div>
						<!--Navigation Bar ends here-->

						<!--Content Wrapper Starts here-->
									<div class="content_wrapper">
										<div id="sidebar">
											
											<div id="sidebar_title">Categories</div>
							<ul id="cats">
								<?php getCats(); ?>
							
							
							<div id="sidebar_title">Brands</div>
							<ul id="cats">
								 <?php getBrands(); ?>
								 
							<ul>
										
										</div>
													<div id="content_area">
													
													<?php cart(); ?>
													
													
													<div id="shopping_cart">
													
													<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
													
													<?php
													if(isset($_SESSION['customer_email'])){
														echo "<b>Hello </b>" . $_SESSION['customer_email'] ;
													}
														else {
															echo "<b>Welcome Guest!</b>";
													}
													?>
													
													<b style="color:yellow"> Shopping Cart -</b> Total Items: <?php total_items() ;?> Total Price: <?php total_price(); ?> <a href="cart.php"
													style="color:yellow">Go to Cart</a>
													
													</span>
													
													</div>
										
														
														
														<?php
														if(!isset($_SESSION['customer_email'])){
															include("customer_login.php");
														}
														else {
															include("payment.php");
														}
														
														?>
														</div>
										
										</div>
						<!--Content Wrapper ends here-->
						
						
										<div id="footer">
										

										</div>
									</div>
						
	
	
	</body>

</html>
