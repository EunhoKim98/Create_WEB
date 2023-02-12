<?php
    $recommend_idx = $_POST['recommend_idx'];
    if(isset($recommend_idx)){
        $conn = mysqli_connect("localhost", "root", "hacker98!", "web") or die ("Can't access DB");
         // Increment the number of recommendations for the article
        $update_query = "UPDATE article SET likes = likes + 1 WHERE idx = $recommend_idx";
        $result = mysqli_query($conn, $update_query);

        if($result){
            echo "<script>alert('success');history.back()</script>";
        }
        else{
            echo "<script>alert('fail');</script>";
        }
    }

?>