<html>
    <head>
    <meta charset="utf-8">
    </head>
    <body>
        <h1>hi</h1>
    <?php
    $to      = 'eunhokim98@naver.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $result = mail($to, $subject, $message, $headers);

    

    if($result){
        echo "success";
    }
    else{
        echo "Fail";
    }
?>
    </body>
</html>