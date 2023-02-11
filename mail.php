<?php

// Function to send an email with a confirmation link
function send_confirmation_email($email, $confirmation_code) {
  $subject = "Email Confirmation";
  $message = "Please click the following link to confirm your email: ";
  $message .= "$confirmation_code";
  $headers = 'From: webmaster<AITON_Board@gmail.com>\r\n';
  // Send the email
  mail($email, $subject, $message, $headers);
  
  echo "<form name =confirm action=$url method='post'>";
  echo "<input type=hidden name='confirm_code' value=$confirmation_code>";
  echo "</form>";
}


// Function to update the user's status to "confirmed"
function update_user_status($email) {
  // Connect to the database
  $conn = mysqli_connect("localhost", "root", "hacker98!", "web");

  // Check if the connection was successful
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $update_query = "UPDATE user SET confirm = 1 WHERE email = '$email'";
  $result = mysqli_query($conn, $update_query) or die("Can't"); 

  mysqli_close($conn);
}




// Check if the email and confirmation code are provided
if (isset($_GET["email"]) && isset($_GET["code"])) {
  $email = $_GET["email"];
  $code = $_GET["code"];

  // Validate the email confirmation
  // Update the user's status if the email confirmation is valid
  if (validate_email_confirmation($email, $code)) {
    update_user_status($email);

    echo "Your email has been confirmed. You can now log in.";
  } else {
    echo "The email confirmation failed. Please try again.";
  }
} else {
  echo "Invalid request. Please try again.";
}

?>