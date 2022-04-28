<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$this->e($title)?></title>

    <!-- Styles -->
    
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/sticky-footer.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">


    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/owl.css">

    <?=$this->section("page_specific_css")?>
</head>
<body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <ul class="left-info">
                        <li><a href="#"><i class="fa fa-envelope"></i>book@company.com</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>123-456-7890</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="right-icons">
                    <?php if (! \App\SessionGuard::isUserLoggedIn()): ?>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?=$this->e(\App\SessionGuard::user()->name)?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="list" style="padding: unset; text-align: center; height: 46px;">
                                <li>
                                    <a href="/logout" style="color: #a4c639;"
                                        onclick="
                                            event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                    </form>
                                </li>
                            </ul>
                        </li>
                    <?php endif ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>My Books</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/books">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#about-href">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#contact-href">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    

    <?=$this->section("page")?>

    
    <!-- Footer Starts Here -->

    <!-- <footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright &copy; 2021 Web Development Course</p>
      </div>
    </footer> -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-item">
                    <h4 id="about-href">About Us</h4>
                    <p>The place to store your endless world of books. Contact for me if you need more details.</p>
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 footer-item">
                    <h4>Additional Pages</h4>
                    <ul class="menu-list">
                        <li><a href="/">Home</a></li>
                        <li><a href="/books">Books</a></li>
                        <li><a href="/#about-href">About Us</a></li>
                        <li><a href="/#contact-href">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 footer-item last-item">
                    <h4 id="contact-href">Contact Us</h4>
                    <div class="book-form">
                        <form id="book footer-book" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Copyright © 2022 My Books - Template by: <a href="/">Phạm Phương Trâm - B1910007</a>
                    </p>
                </div>
            </div>
        </div>
    </div>    

    <!-- Scripts -->
    <!-- <script src="/js/jquery.min.js"></script> -->
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/wow.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/js/custom.js"></script>
    <script src="/js/owl.js"></script>
    <script src="/js/slick.js"></script>
    <script src="/js/accordions.js"></script>

    <?=$this->section("page_specific_js")?>

</body>
</html>
