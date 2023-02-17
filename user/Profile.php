<?php 
      include('../check_session.php');
      include('../DB_config.php');
      
?>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Write</title>
    <link href="../style/min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }

        .b-example-divider {
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }

        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }

        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }

        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }

        .form-control-dark {
          border-color: var(--bs-gray);
        }
        .form-control-dark:focus {
          border-color: #fff;
          box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
        }

        .text-small {
          font-size: 85%;
        }

        .dropdown-toggle {
          outline: 0;
        }

      .container {
        margin: 0 auto;
        width: 50%;
        text-align: center;
      }
      h1 {
        font-size: 36px;
      }
      form {
        margin-top: 50px;
      }
      input[type="text"], textarea {
        padding: 10px;
        font-size: 18px;
        width: 100%;
        margin-bottom: 20px;
        box-sizing: border-box;
      }
      input[type="submit"] {
        padding: 10px 20px;
        font-size: 18px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 5px;
      }

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

        .post-header h4 {
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
   <link href="dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
</head>
<body class="vsc-initialized">

<nav class="navbar navbar-expand-xl navbar-dark bg-dark" aria-label="Sixth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="../board/main_board.php">AITON Board</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample06">
        <ul class="navbar-nav me-auto mb-2 mb-xl-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../board/main_board.php">Home</a>
          </li>
        </ul>
      </div>

      <div class="dropdown text-end" style="margin-right:6%">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="../image/logo.png"  width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small">
        <li><a class="dropdown-item" href="Profile.php">Profile</a></li> <!--내가 쓴 글-->
          <li><a class="dropdown-item" href="Settings.php">Settings</a></li> <!--개인정보 수정-->
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="sign_out.php">Sign out</a></li>
        </ul>
      </div>

    </div>
  </nav>

  <div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../board/main_board.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-text-bottom" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Main Board
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../board/secret_board.php">
              <svg width="24" height="24" viewBox="0 0 16.00 16.00" class="feather feather-home align-text-bottom" xmlns="http://www.w3.org/2000/svg" fill="#0d6efd" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)" stroke="#0d6efd" stroke-width="1.04">

                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.192"/>
                
                <g id="SVGRepo_iconCarrier"> <path d="M8 .262S6.364 3 2 3c0 9.31 6 12.594 6 12.594S14 12.31 14 3C9.636 3 8 .262 8 .262zm0 1.386c.272.312.257.42.781.795.912.654 2.362 1.19 4.153 1.391-.174 3.943-1.439 6.642-2.73 8.352-.982 1.298-1.74 1.878-2.204 2.193-.463-.315-1.222-.895-2.203-2.193-1.292-1.71-2.557-4.409-2.73-8.352 1.79-.2 3.24-.737 4.152-1.39.524-.377.51-.483.781-.796z" style="marker:none" color="#0d6efd" overflow="visible" fill="gray"/> </g>
                
                </svg>
              Secret Board
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../board/test_board.php">
              <svg fill="#0d6efd"class="feather feather-shopping-cart align-text-bottom" height="28" width="28" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511 511" xml:space="preserve">

                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                
                <g id="SVGRepo_iconCarrier"> <g> <path d="M415.5,40H351v-0.5c0-8.547-6.953-15.5-15.5-15.5H295v-0.5C295,10.542,284.458,0,271.5,0h-32 C226.542,0,216,10.542,216,23.5V24h-40.5c-8.547,0-15.5,6.953-15.5,15.5V40H95.5C73.72,40,56,57.72,56,79.5v392 c0,21.78,17.72,39.5,39.5,39.5h320c21.78,0,39.5-17.72,39.5-39.5v-392C455,57.72,437.28,40,415.5,40z M343.498,87H407.5 c0.276,0,0.5,0.224,0.5,0.5v376c0,0.276-0.224,0.5-0.5,0.5h-304c-0.276,0-0.5-0.224-0.5-0.5v-376c0-0.276,0.224-0.5,0.5-0.5h64.001 c0.089,0,0.175-0.01,0.263-0.013C174.967,96.695,186.51,103,199.5,103h112c12.99,0,24.533-6.305,31.736-16.013 C343.324,86.99,343.41,87,343.498,87z M231,23.5c0-4.687,3.813-8.5,8.5-8.5h32c4.687,0,8.5,3.813,8.5,8.5V24h-49V23.5z M175,39.5 c0-0.276,0.224-0.5,0.5-0.5h160c0.276,0,0.5,0.224,0.5,0.5v7.942c0,0.02-0.003,0.039-0.003,0.058S336,47.539,336,47.558V63.5 c0,13.509-10.991,24.5-24.5,24.5h-112C185.991,88,175,77.009,175,63.5V39.5z M440,471.5c0,13.509-10.991,24.5-24.5,24.5h-320 C81.991,496,71,485.009,71,471.5v-392C71,65.991,81.991,55,95.5,55H160v8.5c0,2.918,0.328,5.76,0.931,8.5H103.5 C94.953,72,88,78.953,88,87.5v376c0,8.547,6.953,15.5,15.5,15.5h304c8.547,0,15.5-6.953,15.5-15.5v-376 c0-8.547-6.953-15.5-15.5-15.5h-57.431c0.604-2.74,0.931-5.582,0.931-8.5V55h64.5c13.509,0,24.5,10.991,24.5,24.5V471.5z"/> <path d="M144.5,215h62c4.687,0,8.5-3.813,8.5-8.5v-62c0-4.687-3.813-8.5-8.5-8.5h-62c-4.687,0-8.5,3.813-8.5,8.5v62 C136,211.187,139.813,215,144.5,215z M151,151h49v49h-49V151z"/> <path d="M206.5,344h-62c-4.687,0-8.5,3.813-8.5,8.5v62c0,4.687,3.813,8.5,8.5,8.5h62c4.687,0,8.5-3.813,8.5-8.5v-62 C215,347.813,211.187,344,206.5,344z M200,408h-49v-49h49V408z"/> <path d="M218.197,242.197l-5.392,5.392c-2.707-4.535-7.65-7.589-13.305-7.589h-48c-8.547,0-15.5,6.953-15.5,15.5v48 c0,8.547,6.953,15.5,15.5,15.5h48c8.547,0,15.5-6.953,15.5-15.5v-8c0-4.142-3.358-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v8 c0,0.276-0.224,0.5-0.5,0.5h-48c-0.276,0-0.5-0.224-0.5-0.5v-48c0-0.276,0.224-0.5,0.5-0.5h48c0.276,0,0.5,0.224,0.5,0.5v4.894 l-16.5,16.5l-10.697-10.697c-2.929-2.929-7.678-2.929-10.606,0c-2.929,2.929-2.929,7.677,0,10.606l16,16 c1.464,1.465,3.384,2.197,5.303,2.197s3.839-0.732,5.303-2.197l23.999-23.999c0.001-0.001,0.002-0.002,0.002-0.002l15.999-15.999 c2.929-2.929,2.929-7.677,0-10.606C225.875,239.268,221.125,239.268,218.197,242.197z"/> <path d="M239.5,159h24c4.142,0,7.5-3.358,7.5-7.5s-3.358-7.5-7.5-7.5h-24c-4.142,0-7.5,3.358-7.5,7.5S235.358,159,239.5,159z"/> <path d="M232,183.5c0,4.142,3.358,7.5,7.5,7.5h120c4.142,0,7.5-3.358,7.5-7.5s-3.358-7.5-7.5-7.5h-120 C235.358,176,232,179.358,232,183.5z"/> <path d="M239.5,271h80c4.142,0,7.5-3.358,7.5-7.5s-3.358-7.5-7.5-7.5h-80c-4.142,0-7.5,3.358-7.5,7.5S235.358,271,239.5,271z"/> <path d="M359.5,288h-120c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h120c4.142,0,7.5-3.358,7.5-7.5S363.642,288,359.5,288z"/> <path d="M239.5,375h32c4.142,0,7.5-3.358,7.5-7.5s-3.358-7.5-7.5-7.5h-32c-4.142,0-7.5,3.358-7.5,7.5S235.358,375,239.5,375z"/> <path d="M359.5,392h-120c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h120c4.142,0,7.5-3.358,7.5-7.5S363.642,392,359.5,392z"/> </g> </g>
                
                </svg>
              Test Board
            </a>
          </li>
        </ul>

      </div>
    </nav>



  <div class="container">
    <br>
    <h1 style="text-align:left; ">My information</h1><br>
    <?php
      $user_select_query = "SELECT * FROM user WHERE email = '$email'";
      $user_select_result = mysqli_query($conn, $user_select_query);
      $user_row = mysqli_fetch_assoc($user_select_result);
      
      $count_select_query = "SELECT count(*) as cnt FROM article WHERE email = '$email'";
      $count_select_result = mysqli_query($conn, $count_select_query) or die('asd!!!!!!!Sasdas');
      $count = mysqli_fetch_assoc($count_select_result);

      echo '<div class="post">';
      echo '<div class="post-header">';
      echo '<img src="../image/logo.png" style="width:150px; height:150px;" alt="Profile Picture">';
      echo '<ul class="list-group list-group-flush" style="text-align:left;">';
      echo '<li class="list-group-item">' . $email . '</li>';
      echo '<li class="list-group-item">'.$user_row['first_name'] .' &nbsp&nbsp&nbsp'. $user_row['last_name'].'</li>';
      echo '<li class="list-group-item">'.'posts <b>'.$count[cnt].'</b></li>';
      echo '<li class="list-group-item">'.$user_row['nick_name'].'</li>';
      echo '</ul>';
      echo '</div>';
      echo '</div>';

      echo '<br><hr><br>';
    ?>

    <h1 style="text-align:left; ">My article</h1><br>
    <?php
      $article_select_query = "SELECT * FROM article WHERE email = '$email'";
      $article_select_result = mysqli_query($conn, $article_select_query) or die('asd!!!!!!!Sasdas');
      
      // Loop through the result and print each post
      while ($article_row = mysqli_fetch_assoc($article_select_result)) {
        $title = $article_row['title'];
        $content = $article_row['content'];
        $date = explode("-",$article_row['date']);
        $file = $article_row['file'];

        $date[1] = date("F", mktime(0, 0, 0, $date[1], 10));

        echo '<div class="post">';
        echo '<div class="post-header">';
        echo '<img src="../image/logo.png" alt="Profile Picture">';
        echo '<h2>' . $article_row["title"] . '</h2>';
        echo '</div>';
        echo "<p class='blog-post-meta' style='text-align:left;'>$date[1] $date[2]".", $date[0] by $email";
        echo '<a style="float: right;">' . $article_row["hit"]. '</a>';
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="display:inline-block; float: right; margin-top:1%;">';
        echo '<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>';
        echo '<path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>';
        echo '</svg></p>';

        echo '<hr><div class="post-body">';
        #echo '<img src="' . $row["file"] . '" alt="Post Image">';
        echo '<p style="text-align:left;">' . $article_row["content"] . '</p>';
        echo "<p style='text-align:right;'><a style='text-align:right;' href='$file' download>Download File</a></p><hr>";


        #recommend
        echo '<div class="input-group mb-3" style="display:inline-block;">';
        echo "<form action='recommend.php' style='margin:0%; width:15%; float:left; display:inline-block;' method='POST'>";
        echo "<input type='hidden' name='recommend_idx' value='" . $idx . "'>";
        echo "<button type='submit' class='btn btn-outline-danger' style='display:inline-block;'>";
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">';
        echo '<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"></path></svg> ';
        echo $article_row["likes"].'</button>';
        echo "</form>";

       # <!--comment-->
       echo '<form action="add_comment.php" style="margin:0%; float:left; width:85%; display:inline-block;" method="POST">';
       echo '<div class="input-group mb-3">';
       echo '<input type="textarea" class="form-control" name="comment" placeholder="Write coment" aria-describedby="basic-addon2">';
       echo '<input type="hidden" name="idx" value="$idx">';
       echo '<div class="input-group-append">';
       echo '<button class="btn btn-outline-secondary" type="submit">Post</button></div></div>';
       echo '</form></div>';
       echo '</div><div class="post-footer">';
       echo '</div></div><hr>';
      }
        
      ?>
        



      
        
      
    </div>

    <script src="../js/bootstrap.bundle.min.js" ></script>
    </div>
</body>
</html>