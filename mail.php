<?php
  include('DB_config.php');
// Function to send an email with a confirmation link
  $email = $_POST['email'];
  $subject = "Email Confirmation";
  $confirm_code = uniqid();
  $message = "Please click the following link to confirm your email: ";
  $message .= "$confirm_code";
  $headers = 'From: AITON_Board<eunhok98@gmail.com>\r\n';

  // Send the email
  mail($email, $subject, $message, $headers);

  $insert_code = "INSERT INTO confirmation_code(code, email) VALUES ('$confirm_code', '$email')";
  mysqli_query($conn, $insert_code);

  
