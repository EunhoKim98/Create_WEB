<?php
    include('../check_session.php');
    include('../DB_config.php');
      
    // Get the posted data
    $title = $_POST["title"];
    $password = $_POST["password"];
    $content = $_POST["content"];
    $today = date("Y-m-d");
    $board = $_POST["board"];   
    $file = $_FILES["file"];  

    if ($file["error"] == 0) {
          $file_name = $file["name"];
          $file_tmp = $file["tmp_name"];
          $file_destination = "../uploads/" . $file_name;
          move_uploaded_file($file_tmp, $file_destination);
      }

    $insert_query = "INSERT INTO article(board, title, content, file, article_pw, date, email) VALUE";
    $insert_query .= "('$board', '$title', '$content', '$file_destination', '$password', '$today', '$email')";
    $result = mysqli_query($conn, $insert_query) or die('ca');
    
    
    echo '<script>alert("success!");location.href="../board/main_board.php";</script>';

?>