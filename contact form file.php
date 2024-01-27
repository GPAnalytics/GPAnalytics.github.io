<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "goce.panovski@gmail.com"; 
    $subject = "New Contact Form Submission";

    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Message:\n$message";

    // Use additional headers if needed, such as 'From', 'Reply-To', etc.
    $headers = "From: $email";

    // Send email
    mail($to, $subject, $email_body, $headers);
}
?>





 