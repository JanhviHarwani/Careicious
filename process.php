/* <?php 
$toemail = 'pranavs1820@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(mail($toemail, 'Subject', $message, 'From: ' . $email)) {
	echo 'Your email was sent successfully.';
} else {
	echo 'There was a problem sending your email.';
}
?> */

<script>
	 let cartItems = localStorage.getItem("cartList")
	 for (var i = 0; i < cartItems.length; i++) {
		let cart-name= cartItems[i].name
		 
	 }
</script>
<?php
		 echo("<script>
		 document.write(cart-name)
		 </script")
		 ?>