<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $to = "info@nirmaneducation.com";
  $subject = "New Contact Form Message from $name";
  $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

  mail($to, $subject, $body);
  echo "<script>alert('Thank you! Your message has been sent successfully.'); window.location.href='contact.php';</script>";
}
?>
