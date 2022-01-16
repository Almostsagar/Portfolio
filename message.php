<?php
    // getting all the values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    if (!empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  // if user entered email is valid
            $receiver = "sagar19003@gmail.com"; // email receiver mail id
            $subject = "From: $name <$email>"; // subject of the email
            // merging all user values inside body variable.
            $body = "Name: $name \n Email: $email \n Phone: $phone \n Website: $website \n Message: $message \n ";
            $sender = "From: $email";
            // mail is inbuilt php function to send mail
            if (mail($receiver, $subject, $body, $sender)) {
                echo "Your message has been send successful ✔";
            } else {
                echo "Sorry, failed to send your message!";
            }
        } else {
            echo "Enter a Valid email address!";
        }
    } else { 
        echo "Email and Message field is required!";
    }

?>



















