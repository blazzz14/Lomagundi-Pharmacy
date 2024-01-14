<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["bb-name"];
    $phone = $_POST["bb-phone"];
    $email = $_POST["user-email"];
    $branch = $_POST["bb-branch"];
    $message = $_POST["bb-message"];

    // Construct the email message
    $subject = "New Contact Form Submission";
    $body = "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Branch: $branch\n";
    $body .= "Message: $message\n";

    // Your email address to receive submissions
    $to = "your_email@example.com";

    // Additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "Error sending the form. Please try again later.";
    }
} else {
    // Redirect users if they try to access the script directly
    header("Location: index.html");
    exit();
}
?>
