<?php
include_once "header.php";
include_once "vruzka.php";
include_once "processing.php";

if (isset($_GET["id"])) {
	$ID = $_GET["id"];
	$product = get_single_product($ID);
}

if (isset($_POST['btn_cart'])){
	$ID = $_POST['ID'];
	if (add_to_cart($ID)) {
		$msg = "success";
	} else {
		$msg = "error_db";
	}
	header("Location: products.php?action=$msg&id=$ID");
}
?>

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
<?php if (!empty($product)) { ?>
	<div class="product_details">
		<div class="container">
			<div class="row details_row">
				
				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large align-middle"><img src="images/<?php echo $product['prod_img']?>"></div>
					</div>
				</div> <!--End of image -->

				<!-- Product Content -->
				<div class="col-lg-6 product_details_style">
					<div class="details_content align-middle">
						<div class="details_name"><?php echo $product['prod_name']?></div>
						<div class="details_price">£<?php echo $product['price']?></div>
						<div class="description_title_container">
						<div class="details_description"><?php echo $product['description']?></div>
					</div>
					
				</div> <!-- End of content -->
					<!-- Add to cart button -->
						<form method="post">
							<input type="hidden" name="ID" value="<?php echo $product['ID']?>">
							<input type="submit" class="button button_light margin input_link" name="btn_cart" value="Add to cart">
								<!-- <a href="">Add to cart</a> -->
								<?php
								if (isset($_GET['action']) && isset($_GET['id'])){
									$action = $_GET['action'];
									$ID = $_GET['id'];
									if($action == "success" && $ID == $product['ID']){
										echo "<div class='confirm-add'>Item added to cart</div>";
									}else if ($action == "error_db" && $ID == $product['ID']) {
										echo "<div calss='confirm-error'> There is a problem adding to the cart! </div>";
									}
								}
								?>
							
						</form>
			</div>
		</div>
	</div>
<?php } ?>
	

<?php
include_once "footer.php";
?>