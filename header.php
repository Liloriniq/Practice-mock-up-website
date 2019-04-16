<?php
ob_start();
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Marina Parusheva">
<!-- Disable cache for development purposes -->
    <meta http-equiv = "Cache-Control" content = "no-cache, no-store, must-revalidate"/>
    <meta http-equiv = "Pragma" content = "no-cache" />
    <meta http-equiv = "Expires" content = "0" />
<!-- Bootstrap CDN CSS file-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- Custom CSS file-->	
	<link rel="stylesheet" href="css/mystyle.css">
	<title>South West Utilities Ltd.</title>
</head>
<body> 
<div class="super_container">
	<!-- header-->	
	<header>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex align-items-end justify-content-between link">
						<div class="logo"><img src="images/SWU_logo.jpeg" alt="logo"></div>
						<nav class="main_nav float-right">
							<ul class="nav nav-pills flex-column flex-sm-row">
								<li class="nav-item">
									<a class="nav-link" href="index.php">Home</a></li>
								<li class="nav-item dropdown hassubs">
									<a class="nav-link dropdown-toggle link" data-toggle="dropdown" href="categories.php" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
									<div class="dropdown-menu">
										<ul>
											<li><a class="dropdown-item" href="categories.php">Flat Screens</a></li>
											<li><a class="dropdown-item" href="#">Smart Phones</a></li>
											<li><a class="dropdown-item" href="#">Digital Cameras</a></li>
										</ul>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.php">Contact</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="cart.php">Cart<span>(<?php 
											include ('vruzka.php');
											$sql = "SELECT SUM(quantity) AS total_item FROM cart";
											$result = mysqli_query($conn, $sql);
											$row = mysqli_fetch_assoc($result);
									
											if($row['total_item']!= NULL){
											echo $row['total_item'];
											} else {
											echo "0";
											}
										?>)</span></a>
								</li>
							</ul>
							
						</div>
						</nav>
						
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--End of header-->