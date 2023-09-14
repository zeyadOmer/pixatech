<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["your-name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $comments = $_POST["comments"];
    
    // Recipient email address
    $to = "zeyadbomer@gmail.com";
    
    // Subject of the email
    $subject = "Contact Form Submission";
    
    // Compose the email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Comments: $comments\n";
    
    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your submission. We will contact you shortly.";
    } else {
        echo "Oops! gg Something went wrong and we couldn't send your message.";
    }
}
?>