<?php
if(isset($_POST['name'])){
    $con = mysqli_connect('brpzdjbit1eqghi7tdps-mysql.services.clever-cloud.com', 'ui1eikk4efljfisi', 'hC8kk9LHlHuc6NoePbWK','brpzdjbit1eqghi7tdps');
    // getting all the values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    
    if (!empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  // if user entered email is valid
            $recipient = "sagar19003@gmail.com"; // email receiver mail id
            $subject = "From: $name <$email>"; // subject of the email
            // merging all user values inside body variable.
            $body = "Name: $name \n Email: $email \n Phone: $phone \n Website: $website \n Message: $message \n ";
            $headers = "From: $email";
            $sql = "INSERT INTO `tbl_contact` (`id`, `fldName`, `fldEmail`, `fldPhone`,`fldSite`, `fldMessage`) VALUES ('0', '$name', '$email', '$phone','$website' ,'$message')";
            // $rs = mysqli_query($con, $sql);
            
            // mail is inbuilt php function to send mail
        
            // insert in database 
            $rs = mysqli_query($con, $sql);
            // if (mail($recipient, $subject, $body, $headers) || mysqli_query($con, $sql)) {
            if (mysqli_query($con, $sql)) {
                echo "Your message has been sent successfully";
            } 
            else{
                echo "Sorry, failed to send your message!";
             }
    //     } else {
    //         echo "Enter a Valid email address!";
    //     }
    // } else {
    //     echo "Email and Message field is required!";
    }
}
}
// mysql_close($conn);
?>




