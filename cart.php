<?php
include_once "header.php";
include_once "processing.php";
include_once "vruzka.php";
if(isset($_POST['update'])){
    $ID = $_POST['cart_product_id'];
    $quantity = $_POST['quantity'];
    if(update_cart($ID,$quantity)) {
        header("Location: cart.php");
    }
}
if(isset($_POST['delete'])){
    $ID = $_POST['delete_product_id'];
    if(delete_cart_item($ID)){
        header("Location: cart.php");
    }
}
?>

<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(images/cart.jpg)"></div>
    </div>
</div>

<!-- Cart Info -->

<div class="cart_info">
    <div class="container p-0">
        
        <div class="row">
            <div class="col">
                <!-- Column Titles -->
                <div class="cart_info_columns clearfix">
                    <div class="cart_info_col cart_info_col_product">Product</div>
                    <div class="cart_info_col cart_info_col_price">Price</div>
                    <div class="cart_info_col cart_info_col_quantity">Quantity</div>
                    <div class="cart_info_col cart_info_col_total">Total</div>
                </div>
            </div>
        </div>
                <!--PHP loop to display added items to cart-->
                <?php
                $cart_array = get_cart_details();
                $grand_total = null;

                if(!empty($cart_array)){
                    foreach($cart_array as $cart_product){
                        $grand_total += $cart_product['Total'];

                ?>
        <form method="post" action="cart.php">
            <div class="container">
                <div class="row cart_items_row">
                    <div class="col">
                        <!-- Cart Item -->
                        <div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start pb-0">
                        <!-- Name -->
                        
                            <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_item_image">
                                    <div><img src="images/<?php echo $cart_product['prod_img']?>" alt="item image"></div>
                                </div>
                                <div class="cart_item_name_container">
                                    <div class="cart_item_name">
                                        <a href="products.php?id=<?php echo $cart_product['ID']?>"><?php echo $cart_product['prod_name']?></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Price -->
                            <div class="cart_item_price">&pound; <?php echo $cart_product['price']?></div>
                            <!-- Quantity -->
                            <div class="cart_item_quantity">
                                <div class="product_quantity clearfix">
                                    <span>Qty</span>
                                    <input id="quantity_input" type="number" name="quantity" min="1" max="10" value="<?php echo $cart_product['quantity']?>">
                                </div>
                            </div>
                            <!-- Total -->
                            <div class="cart_item_total"> &pound; <?php echo $cart_product['Total']?></div>
                        </div>
                    </div>
                </div>

                <!--cart UPDATE and REMOVE ITEM buttons-->

                <div class="row row_cart_buttons cart_buttons_border">
                    <div class="col-lg-8">
                        <div class="cart_buttons d-flex flex-row justify-content-start">
                            <div class="cart_buttons_right">
                                <!--Remove item button-->
                                <div>
                                <input type="hidden" name="delete_product_id" value="<?php echo $cart_product['ID']?>">
                                <input type="submit"  class="button button_light btn_delete input_link" name="delete" value="Remove Item"> 
                                </div>
                                <!--Remove Item button END-->
                            </div>
                        </div>
                    </div>            
                    <div class="col-lg-4">
                        <div class="cart_buttons d-flex flex-row justify-content-start">
                            <div class="cart_buttons_right">        
                                
                                <!-- Update quantity button    -->
                                <div>
                                <input type="hidden" name="cart_product_id" value="<?php echo $cart_product['ID']?>">
                                <input type="submit" class="button button_light update_cart_button input_link" value="Update quantity" name="update">
                                </div>
                                <!--Update quantity button END -->
                            </div>
                        </div>
                    </div>
                </div>                
            </div>    
        </form>
        <?php } } ?> <!-- End of the foreach loop-->
        
        <div class="row row_cart_buttons pt-2">
            <div class="col">
                <div class="cart_buttons d-flex flex-lg-row flex-column align-items-center justify-content-start ml-3">
                    <div class="button button_light continue_button"><a href="categories.php">Continue shopping</a></div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 offset-lg-2">
			<div class="cart_total mt-3">
                <div class="section_title">Cart total</div>
                <div class="cart_total_container">
                    <ul>
                        <?php if(!empty($grand_total)){?>
                        <li class="d-flex flex-row align-items-center justify-content-start">
                            <div class="cart_total_title">Total</div>
                            <div class="cart_total_value ml-auto"> &pound; <?php echo $grand_total?> </div>
                        </li>
                        <?php }?>
                    </ul>
                </div>
				<div class="button button_light checkout_button"><a href="#">Proceed to checkout</a></div>
			</div>
		</div>

    </div>
</div><!--Cart info container end-->

<?php
include_once "footer.php";
?>