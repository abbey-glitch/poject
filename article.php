<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "includes/head.php"; ?>

    <link rel="stylesheet" href="css/article.css">
</head>

<body>
    <!-- Topbar Start -->
    <?php require "includes/nav.php"; ?>
    <!-- Navbar End -->

        <!-- Header Start -->
        <div class="
            jumbotron jumbotron-fluid mb-5" style="
            background-image: url('img/home1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        ">
            <div class="container text-center py-5">
                <h1 class="text-white display-3">About</h1>
                <div class="d-inline-flex align-items-center text-white">
                    <p class="m-0"><a class="text-white" href="index">Home</a></p>
                    <i class="fa fa-circle px-3 blink_dot"></i>
                    <p class="m-0">About</p>
                </div>
            </div>
        </div>
    <!-- Header End -->


    <!-- start of the article content -->
    <div class="cover_article">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="row">
                    <?php
                        require "controller/article_display-one.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end of the content -->

    <!-- start of the article content -->
    <div class="cover_article">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="row">
                    <?php
                        require "controller/article_display-two.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end of the content -->

    <!-- start of the article content -->
    <div class="cover_article">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="row">
                    <?php
                        require "controller/article_display-three.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end of the content -->

    <!-- start of the article content -->
    <div class="cover_article">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="row">
                    <?php
                        require "controller/article_display-four.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end of the content -->
    




    <!-- Footer Start -->
    <?php require "includes/foot.php"; ?>
</body>

</html>