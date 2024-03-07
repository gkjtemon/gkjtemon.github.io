<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Set up the email
    $to = "Gkjtemonweb@gmail.com"; // Change this to your email address
    $subject = "New message from Web $name";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    // Send the email
    if (mail($to, $subject, $body)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        // Error sending email
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    // If not a POST request, redirect back to the form
    header("Location: index.html"); // Change this to your HTML contact form page
    exit();
}
?>
