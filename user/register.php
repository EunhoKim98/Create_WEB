<html>
<head>
<meta charset="utf-8">
</head>
<body>
    <h1>hi</h1>
    <?php
    $conn = mysqli_connect("localhost", "root", "hacker98!", "web") or die ("Can't access DB");

    $first_name = $_POST['FirstName'];
    $last_name = $_POST['LastName'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $confirm_password = $_POST['Confirm_Password'];
    $nickname = $_POST['Nickname'];
    $address = $_POST['Address'];
    
    $insert_query = "INSERT INTO user(email, pw, nick_name, first_name, last_name, address) 
    VALUE ('$email', '$password', '$nickname', '$first_name','$last_name', '$address')";
    $result = mysqli_query($conn, $insert_query);
    echo "3<br>";
    if($result){
      echo "success";
    }
    else{
      echo "faild";
      echo $conn->error;
    }


    mysqli_close($conn);
  ?>
</body>
</html>

