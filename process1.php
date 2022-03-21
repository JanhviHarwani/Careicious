<?php

    $toemail = 'pranavs1820@gmail.com';
    $email = 'parthns1820@gmail.com';
    $message = "Here is my list to shop: \n";

    $cartItems = json_decode($_POST['cartItems'], true);
    $temp = "";
    foreach($cartItems as $items){
        foreach($items as $key => $value)
        {
            if($key == "name" || $key == "quantity")
            {
                // print_r($key );
                // print_r(" ".$value );
                $temp = " ";
                $temp .= $value;
                // $message = append_string($message,$temp);
            $message .= $temp;

            }

        }
        $message .= "\n";
    
    }
// print_r($message);
if(mail($toemail, 'Subject', $message, 'From: ' . $email)) {
	echo 'Your email was sent successfully.';
} else {
	echo 'There was a problem sending your email.';
}
?>