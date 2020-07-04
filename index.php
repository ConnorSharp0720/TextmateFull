<main> 

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
        <!-- Navigation-->
        <!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><i class="fas fa-comment-alt"></i>  TextMate</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#info">Info</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li class="nav-item nav-btn"><a class="btn btn-primary js-scroll-trigger login-btn" id="left-login-btn" href="">Log in</a></li>
                        <li class="nav-item nav-btn"><a class="btn btn-primary js-scroll-trigger login-btn" id="signup-btn"href="">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav> -->
        <?php 
            require "header.php";
        ?> 

        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<p>You are logged in!</p>';
                        }
                        else {
                            echo '<p>You are logged out</p>';
                        }
                    ?>
                    <h1 class="mx-auto my-0 text-uppercase">TextMate</h1>
                    <h2 class="text-50 mx-auto mt-2 mb-5">Your new personal assistant,<br>and we mean personal.</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#about">Learn More</a>
                </div>
            </div>
        </header>
        <!-- About-->

        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-about mb-4">The most thoughtful person in your contacts</h2>
                        <p class="text-section-subheading">TextMate is built off of user preferences and reaction, meaning it becomes more catered to you as you use it. All of TextMate's recommendations are specifically made with you in mind.</p>
                    </div>
                </div>
                <img class="img-fluid" src="./assets/images/about.png" alt=""/>
            </div>
        </section>

        <section class="info-section text-center" id="info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <h2 class="text-about mb-4">What is TextMate?</h2>
                        <p class="text-section-subheading">TextMate is an alternative to other digital personal assistants. <br> <br>Sometimes you need someone to give you a heads up or give you that last push to get something done. We think that traditional digital assistants don't feel organic enough to truly give you that feeling of a friend sending you a helpful reminder. <br> <br>TextMate sends you text messages with helpful reminders to get things done and is customizable through use over time and user preference. Utilizing both a web-based portal along with natural language processing, we customize TextMate to be whatever you'd like.</p>    
                        <ul id="info-list">
                            <li class="text-section-subheading">Want more humor in your life? Just ask.</li>
                            <li class="text-section-subheading">Want a no-nonsense reminder? Done Deal.</li>
                            <li class="text-section-subheading">Like texts short and sweet? No Problem.</li>
                            <li class="text-section-subheading">Prefer your texts to be long and eloquient? We got it covered.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="team-section text-center" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h2 class="text-about mb-4">Meet the Team</h2>
                        <div class="row" id="team-pic-row">
                            <div class="col-lg-5 mx-auto">
                                <img class="team-indv-pic" src="./assets/images/cplaceholder.jpeg" alt="Connor Profile Pic">
                                <h4>Connor Sharp</h4>Colossal Educated OG | CEO <br> <br>
                                <span class="font-italic team-quotes">I am definitely going to die up here ... if I have to listen to any more god-awful disco music.</span>
                            </div>
                            <div class="col-lg-5 mx-auto">
                                <img class="team-indv-pic" src="./assets/images/placeholder.jpeg" alt="Jack Profile Pic">
                                <h4>Jack Schwarz</h4>Chief Trill Operator | CTO <br> <br>
                                <span class="font-italic team-quotes">Those of you lucky enough to have your lives, take them with you. However, leave the limbs you've lost. They belong to me now.</span>
                            </div>

                        </div>
                            
                    </div>
                </div>
            </div>
        </section>

        <!--
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/images/bg-masthead.jpg" alt="" /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Shoreline</h4>
                            <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                        </div>
                    </div>
                </div>
                
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/images/demo-image-01.jpg" alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Misty</h4>
                                    <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                >
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/images/demo-image-02.jpg" alt="" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Mountains</h4>
                                    <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="signup-section" id="signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                        <form class="form-inline d-flex"><input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email" placeholder="Enter email address..." /><button class="btn btn-primary mx-auto" type="submit">Subscribe</button></form>
                    </div>
                </div>
            </div>
        </section>

-->
        <section class="contact-section" id="contact">
            <div class="container">
                <h2 class="text-about mb-5 text-center">Questions? Comments? Concerns?</h2>
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-black mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4" />
                                <div class="small text-black">1122 Boogie Woogie Ave, Anchorage AK</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-black mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <div class="small text-black"><a href="">hello@world.gov</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-black mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4" />
                                <div class="small text-black">+1 (555) 357-1113</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>-->
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer small text-center text-black-50"><div class="container">This is a work in-progress, so please treat it as such.</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="./assets/js/scripts.js"></script>
    </body>
</html>

</main> 

<?php 
    require "footer.php";
?> 