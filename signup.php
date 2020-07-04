<?php 
    require "header.php";
?> 


    <main> 
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Grayscale - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/stylesheets/bootstrap.css" rel="stylesheet" />
        <link href="assets/stylesheets/signupStyles.css" rel="stylesheet" />
        <link href="./assets/stylesheets/styles.css" rel="stylesheet" />


    </head>
    <body>
    <div class="spacing">
        <h1>Signup</h1>
        <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p>Fill in all fields</p>';
                }
                elseif ($_GET['error'] == "invaliduidmail") {
                    echo '<p>Invalid username and email</p>';
                }
                elseif ($_GET['error'] == "invaliduid") {
                    echo '<p>Username may only contain letters and numberst</p>';
                }
                elseif ($_GET['error'] == "invaliduidmail") {
                    echo '<p>Invalid email format</p>';
                }
                elseif ($_GET['error'] == "passwordcheck") {
                    echo '<p>Your passwords do not match</p>';
                }
                elseif ($_GET['error'] == "usertaken") {
                    echo '<p>Username is already taken</p>';
                }
            }
            elseif (isset($_GET['signup']) == "success") {
                echo '<p>Signup successful!</p>';
            }
        ?>
        <form class="top-space" action="includes/signup.inc.php" method="post"> 
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="Email">
            <input type="text" name="phone" placeholder="Phone #">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat Password">
            <button class="btn btn-primary js-scroll-trigger login-btn" id="signup-btn" type="submit" name="signup-submit">Signup</button>
        </form> 
        </div>
        </body>
    </main> 

<?php 
    require "footer.php";
?>