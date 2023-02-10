<?php
  include('../mail.php');


  $conn = mysqli_connect("localhost", "root", "hacker98!", "web") or die ("Can't access DB");
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
  send_confirmation_email($email, $confirm_code, './user/input_mail_code.php');
  
  mysqli_close($conn);
  echo "<script>location.href='input_mail_code.html?email=$email'</script>";

  


?>


