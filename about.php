<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "includes/head.php"; ?>
    <link rel="stylesheet" href="css/about.css">
</head>

<body>
    <!-- Topbar Start -->
    <?php require "includes/nav.php"; ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5" style="
    background-image: url('img/hand.jpg');
    background-position: center;
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

     <!-- info about prof -->
     <div class="info_about_prof">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="info_about_img">
                                <img src="img/home5.jpg" alt="" width="100%">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                           <div class="info_about_text">
                            <h1>
                                Professor Abraham A. A. Osinubi, MB,BS, M.Sc., MBA, Ph.D., FACE, FASN, FSECAN, FAMedS, FNAMed
                            </h1>
                            <p>
                                Professor Abraham Osinubi is a Medical Doctor with 33 years in Clinical Practice; 
                                20 years in the teaching of Microscopic Anatomy in the University of Lagos; a Stereologist; 
                                a Reproductive and Experimental Endocrinologist; and an expert on Teaching Innovations, 
                                especially in the design and use of 
                                Student-centred Learning. He is a fellow of the American College of Endocrinology.
                            </p>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of info about prof -->


    

    <!-- Features Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container some_space">
            <div class="profile_cv">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="card">
                            <div class="profile_one">
                                <h1>
                                    A Seasoned Researcher And Academician
                                </h1>
                                <p>
                                    Abraham Osinubi, a Medical Doctor & Anatomist; Stereologist; Executive Director Of University Of lagos 
                                    Business School; former Sub-Dean, FBMS, College of Medicine of University of Lagos (CMUL); past HOD of Anatomy, 
                                    CMUL; appointed Full Professor by UNILAG in 2015; past HOD of Anatomy & Assoc. Professor, Lagos State University College of Medicine (LASUCOM), Lagos (2008). He was awarded the prestigious FACE distinction 
                                    (Fellow of the American College of Endocrinology) in 2009; FASN in 2016; FSECAN in 2017.
                                </p>

                                <div class="profile_link">
                                    <a href="https://www.profosinubi.com/CV,%20profosinubi.com.pdf">Donwload Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-7">
                        <div class="card">
                            <img src="img/home1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->



    <!-- Services Start -->
    <?php require "includes/insight.php"; ?>
    <!-- Services End -->


    <!-- Footer Start -->
    <?php require "includes/foot.php"; ?>
</body>

</html>