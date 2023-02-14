<?php 
    if(isset($_GET['idx'])){
        $idx = $_GET['idx'];
    }
    echo $idx;
    $conn = mysqli_connect("localhost", "root", "hacker98!", "web") or die ("Can't access DB");
    $check_query = "SET foreign_key_checks = ";
    mysqli_query($conn, $check_query.'0');

    $delete_query = "DELETE FROM article WHERE idx=$idx";
    $result = mysqli_query($conn, $delete_query) or die('!!!!!!');
    if($result){
      echo"<script>alert('The post has been deleted.');location.href='main_board.php';</script>";
    }
    else{
      echo "asd";
    }
    mysqli_query($conn, $check_query.'1');
?>
