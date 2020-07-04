<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TextMate</title>
        <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./assets/stylesheets/bootstrap.css" rel="stylesheet" />
        <link href="./assets/stylesheets/styles.css" rel="stylesheet" />


    </head>
    <body id="page-top">
        <header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="./#page-top"><i class="fas fa-comment-alt"></i>  TextMate</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./#info">Info</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./#contact">Contact</a></li>

                         <?php
                                if (isset($_SESSION['userId'])) {
                                    echo '<li class="nav-item nav-btn"><form class="login-form" action="includes/logout.inc.php" method="post"> <button class="btn btn-primary js-scroll-trigger login-btn" id="signup-btn" type="submit" name="logout-submit">Logout</button></form></li>';
                                }
                                else {
                                    echo '<li class="nav-item nav-btn"><form class="login-form" action="includes/login.inc.php" method="post"> 
                                    <input type="text" name="mailuid" placeholder="Username or Email">
                                    <input type="password" name="pwd" placeholder="Password">
                                    <button class="btn btn-primary js-scroll-trigger login-btn" id="left-login-btn" type="submit" name="login-submit">Login</button>
                                    </form> 
                                    <a class="btn btn-primary js-scroll-trigger login-btn" id="signup-btn" href="signup.php">Signup</a></li>';
                                }
                          ?>
                        <!-- <li class="nav-item nav-btn"><a class="btn btn-primary js-scroll-trigger login-btn" id="left-login-btn" href="">Log in</a></li>
                        <li class="nav-item nav-btn"><a class="btn btn-primary js-scroll-trigger login-btn" id="signup-btn"href="">Sign Up</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        </header>
    </body>
</html>
