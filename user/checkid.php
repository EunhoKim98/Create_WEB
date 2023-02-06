<html>
<head>
</head>
<body>
    <h1>body</h1>
<?php
    $conn = mysqli_connect("localhost", "root", "hacker98!", "web") or die ("Can't access DB");
    $id = $_GET['userid'];
    
    $sql = "SELECT * FROM user WHILE email=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if(!$row[0]){
        echo "email: $row[0]<br>";
        echo "$id 사용가능";
    }
    else{
        echo "중복된 ID";
    }

    
?>
</body>
</html>