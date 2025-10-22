<?php
  $to = "book@ixplore.africa"; // replace with your email address
  $subject = "Booking Inquiry";

  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $adults = $_POST['adults'];
  $children = $_POST['children'];
  $destination = $_POST['destination'];
  $check_in = $_POST['check_in'];
  $check_out = $_POST['check_out'];
  $departure = $_POST['departure'];
  $flight = $_POST['flight'];
  $additional_info = $_POST['additional_info'];

  $message = "
    Name: $name $surname
    Email: $email
    Phone: $phone
    Number of Adults: $adults
    Number of Children: $children
    Destination: $destination
    Check-in: $check_in
    Check-out: $check_out
    Departure: $departure
    Flight Required: $flight
    Additional Info: $additional_info
  ";

  $headers = "From: $email";

  mail($to, $subject, $message, $headers);

  header("Location: index.html"); // redirect to your index page after submission
?>