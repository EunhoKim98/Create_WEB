<?php
    include_once('../check_session.php');
    include('../DB_config.php');

    
    $recommend_idx = $_POST['recommend_idx'];
    if(isset($recommend_idx)){
        
        //Deduplication
        $select_query = "SELECT * FROM recommend WHERE post_id = '$recommend_idx' AND email = '$email'";
        $select_result = mysqli_query($conn, $select_query);
        $row = mysqli_fetch_array($select_result);

        if($row['likes'] == 1){
            // Increment the number of recommendations for the article
            $update_query = "UPDATE article SET likes = likes + 1 WHERE idx = $recommend_idx";
            $result = mysqli_query($conn, $update_query);
            
            $update_query = "UPDATE recommend SET likes = likes + 1 WHERE post_id = $recommend_idx";
            $result = mysqli_query($conn, $update_query);
            }
        else if($row['likes'] == 2){
            $update_query = "UPDATE article SET likes = likes - 1 WHERE idx = $recommend_idx";
            $result = mysqli_query($conn, $update_query);
    #
            $update_query = "UPDATE recommend SET likes = likes - 1 WHERE post_id = $recommend_idx";
            $result = mysqli_query($conn, $update_query);
            }
        
        else{
            $insert_query = "INSERT INTO recommend(post_id, email)"; 
            $insert_query .= "VALUE ('$recommend_idx', '$email')";
            mysqli_query($conn, $insert_query);

            // Increment the number of recommendations for the article
            $update_query = "UPDATE article SET likes = likes + 1 WHERE idx = $recommend_idx";
            $result = mysqli_query($conn, $update_query);
        }
        
        

        echo "<script>history.back();</script>";
    }

?>