<?php

session_start();

function login($username, $password) {
  // Connect to the database and retrieve the user information
  $conn = mysqli_connect("localhost", "root", "hacker98!", "web") or die("Can't");
  $query = "SELECT * FROM user WHERE email = '$username'";
  $result = mysqli_query($conn, $query) or die('cantttt'); 
  $user = mysqli_fetch_assoc($result);
  // Check if the provided password matches the stored password
  if ($user['pw'] == $password) {
    // Store the user ID in the session
    $_SESSION['email'] = $user['email'];

    // Encrypt the session ID with the user ID as an MD5 hash and store it in a cookie
    setcookie("SESSION_ID", md5(session_id() . $user['email']), time() + (86400 * 30), "/");
    echo '<script>location.href="../board/main_board.php"</script>';
    return true;
  }
  echo "<script>alert('Invalid ID or password.');</script>";
  echo "<script>history.back();</script>";
  
  return false;
}

  $ID = $_POST['email'];
  $PW = $_POST['password'];
  login($ID, $PW);
?>
