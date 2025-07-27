<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ahmed.abdullah3582@gmail.com";
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo "Email sent successfully!";
    } else {
        http_response_code(500);
        echo "Email sending failed.";
    }
} else {
    http_response_code(403);
    echo "Access forbidden";
}
?>
