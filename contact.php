<?php
include_once "header.php";
include_once "vruzka.php";
include_once "processing.php";


?>
<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(images/banner_phone_sized.jpg)"></div>
    </div>
</div>
   
<!-- Contact -->
	
	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-8 contact_col">
					<div class="get_in_touch">
						<div class="section_title">Get in Touch</div>
						<div class="section_subtitle">Say hello</div>
						<div class="contact_form_container">
							<form action="" id="contact_form" class="contact_form" onsubmit="return validateForm();" method="post">
								<div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<label for="contact_name">First Name*</label>
										<input type="text" id="contact_name" name="contact_name" class="contact_input" required="required">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Last Name -->
										<label for="contact_last_name">Last Name*</label>
										<input type="text" id="contact_last_name" name="contact_last_name" class="contact_input" required="required">
									</div>
                                </div>
                                <div>
									<!-- Email -->
									<label for="contact_company">E-mail*<span class= "error" id="error_email"></span></label>
									<input type="email" id="contact_email" name="contact_email" class="contact_input" required="required" onkeypress="clearErrorMsg('error_email');">
								</div>
								<div>
									<!-- Subject -->
									<label for="contact_company">Subject*</label>
									<input type="text" id="contact_subject" name="contact_subject" class="contact_input" required="required">
								</div>
								<div>
									<label for="contact_textarea">Message*</label>
									<textarea id="contact_textarea" name="contact_text" class="contact_input contact_textarea" required="required"></textarea>
								</div>
								<input type="submit" value="Send Message" name="submit" class="button button_light contact_button">
							</form>
						</div>
					</div>
				</div>

				<!-- Contact Info -->
				<div class="col-lg-3 offset-xl-1 contact_col">
					<div class="contact_info">
						<div class="contact_info_section">
							<div class="contact_info_title">Marketing</div>
							<ul>
								<li>Phone: <span>+44 123 4567 891</span></li>
								<li>Email: <span>swu@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Shippiing & Returns</div>
							<ul>
								<li>Phone: <span>+44 123 4567 892</span></li>
								<li>Email: <span>swu@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Information</div>
							<ul>
								<li>Phone: <span>+44 123 4567 893</span></li>
								<li>Email: <span>swu@gmail.com</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="jumbotron jumbotron-fluid mt-4 mb-0">
  					<div class="container">
    					<h2 class="display-4">Frequently asked questions </h2>
    					<p class="lead">Here are some of the questions our customers ask us. If the information you are looking for is not here, do not hesitate to get in touch with us.</p>
  					</div>
				</div>

				<div class="container acc_container">
					<div id="accordion">
						<div class="card card_accordion">
							<div class="card-header card-header_style" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Q: How do I send a message?
									</button>
								</h5>
							</div>

							<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body acc_card_body_style">
								A: Complete the form with all the fields marked with the "*" symbol and press "send message" button.
								</div>
							</div>
						</div>
						<div class="card card_accordion">
							<div class="card-header card-header_style" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Q: How to add an item to the cart?
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body acc_card_body_style">
									A: Just press the "Add to cart" button next to the item image. Once you have clicked on the button, you will see a message under the button that the item has been added to your cart.
								</div>
							</div>
						</div>
						<div class="card card_accordion">
							<div class="card-header card-header_style" id="headingThree">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Q: How to delete item from the cart?
									</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body acc_card_body_style">
									A: To delete an item from the cart, simply press "remove item" button.
								</div>
							</div>
						</div>
						<div class="card card_accordion">
							<div class="card-header card-header_style" id="headingFour">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Q: How to adjust the quantity of a product in the cart?
									</button>
								</h5>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
								<div class="card-body acc_card_body_style">
									A: To adjust the quantity: 
								<ul>
										<li>Type in the quantity you want in the box and press "update cart" button</li>
										Or: <br>
										<li>Using the arrows next to the quantity number, increase or decrease the quantity as needed and press the "update cart" button</li>
										Or: <br>
										<li>Click on the item name, which will take you to the item summary page and click on the "add to cart" button</li>
								</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
include_once "footer.php";
?>