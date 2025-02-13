<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $checkin = htmlspecialchars($_POST["checkin"]);
    $checkout = htmlspecialchars($_POST["checkout"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "islandgrandmaldives@gmail.com"; 
    $subject = "New Booking Request from $name";
    
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Check-in Date: $checkin\n";
    $email_message .= "Check-out Date: $checkout\n";
    $email_message .= "Additional Requests: $message\n";

    $headers = "From: $email";

    if (mail($to, $subject, $email_message, $headers)) {
        echo "<script>alert('Booking request sent successfully!'); window.location.href='booking.html';</script>";
    } else {
        echo "<script>alert('Failed to send booking request. Please try again.'); window.location.href='booking.html';</script>";
    }
}
?>
