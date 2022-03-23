<?php


    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $toemail = 'pranavs1820@gmail.com';

    $subject = "You got an order from ";
    $subject .= $name;

    $message = "Hey, this is ";
    $message .= $name;
    $message .= "\nMy contact number is : ";
    $message .= $phone;
    $message .= "\nHere is my list to shop: \n";
    


    $cartItems = json_decode($_POST['cartItems'], true);
    $temp = "";
    foreach($cartItems as $items){
        foreach($items as $key => $value)
        {
            if($key == "name" || $key == "quantity")
            {
                $temp = " ";
                $temp .= $value;
            $message .= $temp;

            }

        }
        $message .= "\n";
    
    }
if(mail($toemail, $subject, $message, 'From: ' . $email)) {
	echo 'Your email was sent successfully.';
} else {
	echo 'There was a problem sending your email.';
}
?>