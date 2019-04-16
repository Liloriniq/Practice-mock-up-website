<?php 
include_once "vruzka.php";


//Reading from POST variable and sending form to DB
if (!empty($_POST["submit"])) {
	$name = filter_user($_POST["contact_name"]);
	$lname = filter_user($_POST["contact_last_name"]);
	$email = filter_user($_POST["contact_email"]);
	$subject = filter_user($_POST["contact_subject"]);
	$message = filter_user($_POST["contact_text"], "text");

	if(insert_into_db($name, $lname, $email, $subject, $message)) {
		$success_message = "success";
	} else {
		$success_message = "error_db";
	}
	header("Location:contact.php?msg=$success_message");

}
//Sanitising function for user input

function filter_user($data, $type="") {
	$data = trim($data);
	$data = strip_tags($data);
	$data = htmlspecialchars($data);
	if($type == "text") {
		$data = addslashes($data);
	}elseif ($type == "") {
		$data = stripslashes($data);
	}
	return $data;
}

//Function to insert the form data in the DB

function insert_into_db($name, $lname, $email, $subject, $message) {
	global $conn;
	$sql = "INSERT INTO enquiries (contact_name, contact_last_name, contact_email, contact_subject, contact_text) values ('$name','$lname','$email','$subject','$message')";
	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) >0) {
		return true;
	} else {
		return false;
	}
}

# function to fetch all data from products table in project2 db
function get_products_data() {
	global $conn;
	$sql = "SELECT * FROM products";
	$result = mysqli_query($conn,$sql);

	$allProducts = array();

	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)) {
			array_push($allProducts,$row);
		}
	}
	return $allProducts;
}

#function to get single product from products table in project2 db 

function get_single_product($ID){
	global $conn;
	
	$sql = "SELECT * FROM products WHERE ID ='$ID'";
	$result = mysqli_query($conn,$sql);
	$product = mysqli_fetch_assoc($result);
	
	return $product;
	
	
}

// function for adding items to cart
function add_to_cart($ID) {
	global $conn;
	$sql = "SELECT * FROM cart WHERE ID = '$ID' ";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) >=1 ){
		$sql = "UPDATE cart SET quantity = quantity + 1 WHERE ID = '$ID'";
		mysqli_query($conn, $sql);
		if(mysqli_affected_rows($conn)>0){
			return true;
		} else {
			return false;
		}

	} else {
		$sql = "INSERT INTO cart(ID, quantity) VALUES ('$ID',1)";
		mysqli_query($conn, $sql);
		if(mysqli_affected_rows($conn)>0){
			return true;
		} else {
			return false;
		}
	}
}

//Function to get the cart details

function get_cart_details() {
	global $conn;
	$sql = "SELECT  products.prod_name,
					products.price,
					products.prod_img,
					cart.ID,
					cart.quantity,
					(products.price * cart.quantity) as Total
			FROM cart, products
			WHERE products.ID = cart.ID";
	$result = mysqli_query($conn, $sql);

	$cart_array = [];

	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			array_push($cart_array, $row);
		}
		return $cart_array;
	}
}
//Function to update the cart quantity
function update_cart($ID,$quantity) {
	global $conn;
	$sql = "UPDATE cart SET quantity = '$quantity' WHERE ID = '$ID'";
	mysqli_query($conn, $sql);

	return true;
}
//Function to delete item from cart
function delete_cart_item($ID) {
	global $conn;
	$sql = "DELETE FROM cart WHERE ID = '$ID'";
	mysqli_query($conn, $sql);
	if(mysqli_affected_rows($conn) > 0) {
		return true;
	} else {
		return false;
	}
}



?>