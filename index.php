<?php
include_once "header.php";
?>
<!--Slider Banner-->

<div class="container">
	<div class="row">
		<div class="col">
  			<div id="carousel" class="carousel slide" data-ride="carousel">
    				<ol class="carousel-indicators">
      					<li data-target="#carousel" data-slide-to="0" class="active"></li>
      					<li data-target="#carousel" data-slide-to="1"></li>
      					<li data-target="#carousel" data-slide-to="2"></li>
    				</ol>
    			<div class="carousel-inner">
      				<div class="carousel-item active">
        			<img src="images/banner_slider_sized_1.jpg" class="d-block w-100" alt="...">
        				<div class="carousel-caption d-none d-md-block">
          				<h5>Flat Screens</h5>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
						  <div class="button button_light"><a href="categories.php">Shop Now</a></div>
						</div>
      				</div>
      				<div class="carousel-item">
        			<img src="images/banner_slider_phone_sized.jpg" class="d-block w-100" alt="...">
        				<div class="carousel-caption d-none d-md-block">
          				<h5>Smart Phones</h5>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						  <div class="button button_light"><a href="categories.php">Shop Now</a></div>
        				</div>
      				</div>
      				<div class="carousel-item">
        			<img src="images/banner_slider_camera_sized.jpg" class="d-block w-100" alt="...">
        				<div class="carousel-caption d-none d-md-block">
          				<h5>Digital Cameras</h5>
						  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
						  <div class="button button_light"><a href="categories.php">Shop Now</a></div>
       					</div>
      				</div>
    			</div>
    			<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
      			<span class="sr-only">Previous</span>
    			</a>
    			<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      			<span class="carousel-control-next-icon" aria-hidden="true"></span>
     			<span class="sr-only">Next</span>
    			</a>
  			</div>
		</div>
	</div>
</div>
<!--End of Slider Banner-->

<!--Ads-->
<div class="container ads justify-content-between">
	
	<div class="row h-100">
  <div class="col-md-6 ">
    <div class="card img-fluid max-width:100% text-center ads_small">
		<img src="images/avds_small.jpg">
		<div class="card-body card-block d-flex align-items-end justify-content-around card-img-overlay ads_content">
			<h3 class="card-text">Smart Phones</h3>
			<div class="button button_light"><a href="categories.php">Shop Now</a></div>
		</div>
    </div>
  </div>
  <div class="col-md-6 my-auto">
    <div class="card img-fluid max-width:100% text-center ads_large" >
		<img src="images/ads_camera_new.jpg">
		<div class="card-body card-block d-flex align-items-end justify-content-around card-img-overlay ads_content" >
			<h3 class="card-text">Digital Cameras</h3>
			<div class="button button_light"><a href="categories.php">Shop Now</a></div>
		</div>
    </div>
  
</div>
	</div>
</div>


<!--End of Ads-->

<!-- Icon Boxes -->
<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
						<div class="icon_box_title">Free Shipping Worldwide</div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
						<div class="icon_box_title">Free Returns</div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
						<div class="icon_box_title">24h Fast Support</div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
<?php
include_once "footer.php";
?>