<html>
    <head>
        <meta charset="utf-8">
        <title>TEST_WEB</title>
        
        <link href="style/min.css" rel="stylesheet">
        <link href="style/sign_in.css" rel="stylesheet">
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
    </style>
    </head>
    <body class="text-center">
    
    <main class="form-signin w-100 m-auto">
        <h1 >Login</h1><br><br>
        <img class="mb-4" src="image/logo.png" alt="" width="150" height="150">
        
        <form name="loginform" id="loginform" action="check_login.php" method="post">
        
            <div class="form-floating">
                
                <input type="email" class="form-control" id="floatingInput" value size="20" placeholder="name@example.com">
                <label for="user_login">Email</label>
              </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" value size="20" placeholder="Password">
                <label for="user_login">password</label>
              </div>
            <br>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            
        </form>
        <a class="form-sublink" href="find_password.php">Forgot password?</a>
        <p class="small text-center text-gray-soft">Don't have an account yet? <a href="register.php">Sign up</a></p>
    </main>
    </body>
</html>