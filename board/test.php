<!DOCTYPE html>
<html>
<head>
    <style>
        .post {
            width: 500px;
            border: 1px solid lightgray;
            border-radius: 10px;
            margin: 20px auto;
            padding: 20px;
        }

        .post-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .post-header h2 {
            margin: 0;
        }

        .post-header img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .post-body {
            text-align: center;
        }

        .post-body img {
            width: 100%;
        }

        .post-footer {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .post-footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <?php
    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "hacker98!", "web") or die ("Can't access DB");

    // Get the data from the database
    $sql = "SELECT * FROM article WHERE email = 'test@test.com'";
    $result = mysqli_query($conn, $sql);

    // Loop through the result and print each post
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="post">';
        echo '<div class="post-header">';
        echo '<img src="../image/logo.png" alt="Profile Picture">';
        echo '<h2>' . $row["title"] . '</h2>';
        echo '</div>';
        echo '<div class="post-body">';
        echo '<img src="' . $row["file"] . '" alt="Post Image">';
        echo '<p>' . $row["content"] . '</p>';
        echo '</div>';
        echo '<div class="post-footer">';
        echo '<p>' . $row["date"] . '</p>';
        echo '<p>' . $row["views"] . ' views</p>';
        echo '</div>';
        echo '</div>';
    }

    // Close the connection
    mysqli_close($conn);
    ?>
</body>
</html>
