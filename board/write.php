<?php
    include('../check_session.php');
      
    // Get the posted data
    $title = $_POST["title"];
    $password = $_POST["password"];
    $content = $_POST["content"];
    $today = date("y-m-d");
    $board = $_POST["board"];   
    $file = $_FILES["file"];  



    $conn = mysqli_connect("localhost", "root", "hacker98!", "web") or die ("Can't access DB");
    $query = "INSERT INTO article(board, title, content, file, article_pw, date, email) VALUE";
    $query .= "('$board', '$title', '$content', '$target_file', '$password', '$today', '$email')";
    $result = mysqli_query($conn, $insert_query);
    if(!$result){
      echo " ".mysqli_error($conn);
    }
    
    if ($file["error"] == 0) {
      $file_name = $file["name"];
      $file_tmp = $file["tmp_name"];
      $file_destination = "../uploads/" . $file_name;
      move_uploaded_file($file_tmp, $file_destination);
  }

?>