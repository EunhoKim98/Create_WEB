<?php
    include_once('check_session.php');

    $recommend_idx = $_POST['recommend_idx'];
    $encrypted_email = $_SESSION["SESSION_ID"];
    $email = hash('md5', $encrypted_email);
    echo "<script>alert('$email');</script>";
    if(isset($recommend_idx)){
        $conn = mysqli_connect("localhost", "root", "hacker98!", "web") or die ("Can't access DB");
        
        //Deduplication
        $select_query = "SELECT * FROM recommend WHERE post_id = '$recommend_idx'";
        $select_result = mysqli_query($conn, $select_query);
        
        if(mysqli_fetch_row($select_result)){
            $row = mysqli_fetch_assoc($select_result);
            if($row['likes'] == 0){
                echo "<script>alert(1);</script>";
                // Increment the number of recommendations for the article
                $update_query = "UPDATE article SET likes = likes + 1 WHERE idx = $recommend_idx";
                $result = mysqli_query($conn, $update_query);
                
                $update_query = "UPDATE recommend SET likes = likes + 1 WHERE post_id = $recommend_idx";
                $result = mysqli_query($conn, $update_query);
            }
            else{
                $update_query = "UPDATE article SET likes = likes - 1 WHERE idx = $recommend_idx";
                $result = mysqli_query($conn, $update_query);
    
                $update_query = "UPDATE comments SET likes = likes - 1 WHERE post_id = $recommend_idx";
                $result = mysqli_query($conn, $update_query);
            }
        }
        else{
            $insert_query = "INSERT INTO recommend(post_id, email)"; 
            $insert_query .= "VALUE ('$recommend_idx', '$email')";
            mysqli_query($conn, $insert_query) or die('ca');

            // Increment the number of recommendations for the article
            $update_query = "UPDATE article SET likes = likes + 1 WHERE idx = $recommend_idx";
            $result = mysqli_query($conn, $update_query);
        }
        
        

        echo "<script>history.back();</script>";
    }

?>