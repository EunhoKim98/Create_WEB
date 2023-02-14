<?php 
    if(isset($_GET['idx'])){
        $idx = $_GET['idx'];
    }
    # 접근제어
    if($_SERVER['HTTP_REFERER'] == '127.0.0.1/Create_WEB/board/read.php?idx='.$idx){
        echo $idx;
        $conn = mysqli_connect("localhost", "root", "hacker98!", "web") or die ("Can't access DB");
        $check_query = "SET foreign_key_checks = ";
        mysqli_query($conn, $check_query.'0');

        $delete_query = "DELETE FROM article WHERE idx=$idx";
        $result = mysqli_query($conn, $delete_query) or die('!!!!!!');
        if($result){
        echo"<script>alert('The post has been deleted.');location.href='main_board.php';</script>";
        }
        mysqli_query($conn, $check_query.'1');
    }
?>
