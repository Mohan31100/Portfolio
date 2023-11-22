<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    
    $recipient = "s.g.rammohan3110@gmail.com";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($recipient, $subject, $message, $headers)) {
        echo "Message sent successfully";
    } else {
        echo "Error sending message";
    }
}
?>
