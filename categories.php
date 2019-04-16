<?php
include_once "header.php";
include_once "vruzka.php";
include_once "processing.php";

$allProducts = get_products_data();

	// echo "<pre>";
	// print_r($allProducts);
	// echo "</pre>";
?>
<!--  Categories Home Page -->

<div class="home">
	<div class="home_container">
		<div class="home_background" style="background-image:url(images/banner_flat_sized.jpg)"></div>
		<div class="home_content_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Flat Screens<span>.</span></div>
							<div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
	<?php foreach($allProducts as $product){ ?>	
		<div class="col">
			<div class="card card_style" style="width: 18rem;">
				<img src="images/<?php echo $product["prod_img"]?>" class="card-img-top" alt="flatscreen image">
				<div class="card-body">
				<h5 class="card-title"><?php echo $product["prod_name"]?></h5>
				<p class="card-text">£<?php echo $product["price"]?></p>
				<div class="button button_light"><a href="products.php?id=<?php echo $product["ID"]?>">View details</a></div>
				</div>
			</div>
		</div>
	<?php } ?>
	</div>
</div>

<?php
include_once "footer.php";
?>