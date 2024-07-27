<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'Parax Contact Form'; 
    $to = 'example@gmail.com'; 
    $subject = $_POST['subject']; 
    
    $body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";

    // Send email
    if (mail($to, $subject, $body, $from)) {
        header("Location: thank-you.html"); // Redirect after successful submission
        exit();
    } else {
        echo "Error sending email. Please try again later."; // Display error message if email sending fails
    }
}
?>
