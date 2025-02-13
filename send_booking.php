<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $guests = $_POST['guests'];
    $room_type = $_POST['room-type'];
    $message = $_POST['message'];

    $to = "islandgrandmaldives@gmail.com";
    $subject = "New Booking Request from $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Check-in: $checkin\n";
    $body .= "Check-out: $checkout\n";
    $body .= "Guests: $guests\n";
    $body .= "Room Type: $room_type\n";
    $body .= "Special Requests: $message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your booking request has been sent!";
    } else {
        echo "Error sending your booking request. Please try again.";
    }
}
?>
