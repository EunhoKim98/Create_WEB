<?php
  include('../mail.php');
  include('../DB_config.php');


  $first_name = $_POST['FirstName'];
  $last_name = $_POST['LastName'];
  $email = $_POST['Email'];
  $password = $_POST['Password'];
  $confirm_password = $_POST['Confirm_Password'];
  $nickname = $_POST['Nickname'];
  $address = $_POST['Address'];
  
  $insert_query = "INSERT INTO user(email, pw, nick_name, first_name, last_name, address, confirm) 
  VALUE ('$email', '$password', '$nickname', '$first_name','$last_name', '$address', 0)";
  $result = mysqli_query($conn, $insert_query);
  echo "<script>alert('A verification code has been sent to the email. Please check.')</script>";


  $confirm_code = uniqid();  
  send_confirmation_email($email, $confirm_code);
  $insert_code = "INSERT INTO confirmation_code(code, email) VALUES ('$confirm_code', '$email')";
  mysqli_query($conn, $insert_code);
  mysqli_close($conn);
  echo "<script>location.href='check_code.html'</script>";

  


?>


