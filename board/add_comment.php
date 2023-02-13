<?php 
      include('../check_session.php');
      $comment = $_POST['comment'];
      $idx = $_POST['idx'];
      $conn = mysqli_connect("localhost", "root", "hacker98!", "web") or die ("Can't access DB");
      $today = date("Y-m-d");
      
      $insert_query = "INSERT INTO comments(comment, post_id, email, date) VALUE('$comment', '$idx', '$email', '$today')";
      $result = mysqli_query($conn, $insert_query) or die(mysqli_error($conn));
      
      echo "<script>history.back();</script>";
      echo "$idx, $today";
?>