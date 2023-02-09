
<?php
    $conn = mysqli_connect("localhost", "root", "hacker98!", "web") or die ("Can't access DB");
    $id = $_GET['userid'];
    $sql = "SELECT email FROM user WHERE email='$id'";
    $result = mysqli_query($conn, $sql) or die ("can't");
    $row = mysqli_fetch_array($result);
 
    if($row){
        echo "X";
    }
    else{
        echo "O";
    }

?>