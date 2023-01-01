<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "includes/head.php"; ?>
</head>

<body>
    <!-- Topbar Start -->
    <?php require "includes/nav.php"; ?>
    <!-- Navbar End -->
    <!-- start of body -->
    <div class="containe">
        <?php
            require "controller/gallery-display-one.php";
        ?>
    </div>
    <!-- end of body content -->
     <!-- start of body -->
     <div class="containe">
        <?php
            require "controller/gallery-display-two.php";
        ?>
    </div>
    <!-- end of body content -->
     <!-- start of body -->
     <div class="containe">
        <?php
            require "controller/gallery-display-three.php";
        ?>
    </div>

    <!-- end of body content -->

    <!-- start of body -->

     <div class="containe">
        <?php
            require "controller/gallery-display-four.php";
        ?>
    </div>

    <!-- end of body content -->
    <!-- Footer Start -->
    <?php require "includes/foot.php"; ?>
</body>

</html>