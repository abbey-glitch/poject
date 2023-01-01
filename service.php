<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "includes/head.php"; ?>
    <link rel="stylesheet" href="css/service.css">
</head>

<body>
    <?php require "includes/nav.php"; ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5" style="
    background-image: url('img/point2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position-Y: -230px;
    ">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Service</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0">Health & Business Seminars</p>
                <i class="fa fa-circle px-3 blink_service"></i>
                <p class="m-0"><a class="text-white" href="">Home</a></p>
            </div>
        </div>
    </div>
    <!-- Header End -->


 

    <!-- Services Start -->
    <div class="display_event_only">
        <div class="container-fluid">
            <div class="col-sm-12">
                <dic class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class='event_display_section_one'>        
                                            <div class="event_flexible">
                                                <h1>
                                                    Latest Business and Health serminars
                                                </h1>
                                                <div class="row">
                                                    <?php 
                                                        require "controller/event-display-one.php";
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="event_flexible">
                                            <h1>
                                                Latest Business and Health serminars
                                            </h1>
                                            <div class="row">
                                                <?php 
                                                    require "controller/event-display-two.php";
                                                ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="carousel-item">                                        
                                        <div class="event_flexible">
                                            <h1>
                                                Latest Business and Health serminars
                                            </h1>
                                            <div class="row">
                                                <?php 
                                                    require "controller/event-display-three.php";
                                                ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev"> -->
                                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                                    <!-- <span class="sr-only">Previous</span> -->
                                <!-- </button> -->
                                <!-- <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next"> -->
                                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                                    <!-- <span class="sr-only">Next</span> -->
                                <!-- </button> -->
                            </div>
                        </div>
                    </div>
                </dic>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <div class="container-fluid bg-secondary my-5">
        <div class="container some_space">
            <div class="row align-items-center">
                <div class="col-lg-7 py-5 py-lg-0">
                    <div class="check_img">
                    <img src="img/prof-image1.jpg" alt="Prof's Statement" width="100" height="">
                    <p>
                        Dr. Osinubi has authored over 120 scientific publications in learnt journals and two textbooks of Anatomy. He co-authored the first National Clinical Practice Guidelines for Diabetes Management in Nigeria in 2012. ResearchGate acknowledged him as one of the most cited authors in his field in December 2015.
                        He is also vast in knwolegde in terms of training and building successfull businesses around the worlds.
                    </p>
                    </div>
                    <h1 class="mb-4 ok_ok">Request For Individual , Firm or Organizational Business Training</h1>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">133</h1>
                            <h6 class="font-weight-bold mb-4">Publication</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">59,562</h1>
                            <h6 class="font-weight-bold mb-4">Reads</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">1063</h1>
                            <h6 class="font-weight-bold mb-4">Citation</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <form class="py-5">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Individual Business Training</option>
                                    <option value="1">Firm Business Training</option>
                                    <option value="1">Organizational Business Training</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">REQUEST</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Testimonial</h6>
                <h1 class="mb-4">What People Are Say About Prof. Osinubi</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <?php require "includes/foot.php"; ?>
</body>

</html>