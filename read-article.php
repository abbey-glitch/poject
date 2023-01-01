<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Prof Osinubi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Prof's osinubi webpage" name="omega, doctor, max, products, health, cellgevity">
    <meta content="the health package, events and seminars" name="This site is all about professor osinubi health, carreer and seminars.">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/read-two.css">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+2348023034954</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@profosinubi.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="https:www.facebook.com/maxCellgevityinNigeria/?_rdc=2&_rdr">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="https://twitter.com/osinubi_abraham">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="https:www.linkedin.com/in/kolawole-osinubi-8084764">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="https://www.instagram.com/abrahamosinubi">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="www.youtube.com/results?search_query=prof+abraham+osinubi">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    
    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5 text-uppercase text-primary"><img src="img/logo1.jpg" alt="" width="9%"> Prof Osinubi</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index" class="nav-item nav-link active">Home</a>
                    <a href="about" class="nav-item nav-link">About</a>
                    <a href="service" class="nav-item nav-link">Service</a>
                    <a href="gallery" class="nav-item nav-link">Gallery</a>
                    <a href="article" class="nav-item nav-link">Article</a>
                    <!--<a href="article" class="dropdown-item">Products</a>-->
                    <a href="contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- display single event -->
    <div class='event_page_only'>
        <div class='event_content_display'>
            <div class="row">
            <?php
                require "controller/read-two";
            ?>
            </div>
        </div>
    </div>
    <!-- end of display single event -->
    
    <?php require "includes/foot.php"; ?>
</body>

</html>