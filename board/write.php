<?php
      if(isset($_POST["title"]) && isset($_POST["password"]) && isset($_POST["content"]) && isset($_FILES["file"])) {
        // Get the posted data
        $title = $_POST["title"];
        $password = $_POST["password"];
        $content = $_POST["content"];
        $file = $_FILES["file"];
        $today = date("y-m-d");
        $board = $_POST["board"];
         // Get the encrypted email from the session
        $encrypted_email = $_SESSION["SESSION_ID"];

        // Decrypt the email
        $email = md5_decrypt($encrypted_email);

        // Check if the file was uploaded
        if ($file["error"] === UPLOAD_ERR_OK) {
          // Set the target directory and file name
          $target_dir = "../uploads/";
          $target_file = $target_dir . basename($file["name"]);

          // Check if the file already exists
          if (file_exists($target_file)) {
            echo "<script>alert('Sorry, the file already exists.')</script>";
            $uploadOk = 0;
          }

          

          // Allow certain file formats
          $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
          if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "<script>alert('Sorry, only JPG, JPEG, PNG, and GIF files are allowed.')</script>";
            $uploadOk = 0;
          }

          // Upload the file
          if ($uploadOk === 0) {
            echo "<script>alert('Sorry, your file was not uploaded.')</script>";
          } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
              #echo "<script>alert('The file ". basename($file["name"]). " has been uploaded.')</script>";

              // Save the data to a file or a database
              $conn = mysqli_connect("localhost", "root", "hacker98!", "web") or die ("Can't access DB");
              $query = "INSERT INTO article(board, title, content, 'file', article_pw, hit, date, email)";
              $query .= "VALUE ('$board', '$title', '$content', '$file', '$password', 0, '$today', '$email')";
              $result = mysqli_query($conn, $insert_query);
              // ...
              
              echo "<script>alert('Post saved successfully!')location.href='main_board.php';</script>";
            } else {
              echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
            }
          }
        } else {
          echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
        }
      }
    ?>