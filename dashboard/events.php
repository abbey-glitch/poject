<?php

session_start();

if(!isset($_SESSION['user']['email'])) {

  header("location: login.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>www.profOsinubi.com/editor</title>
    <link rel="stylesheet" href="css/prof.css">
    <link rel="stylesheet" href="css/events.css">
    <script src="https://kit.fontawesome.com/3aad532998.js" crossorigin="anonymous"></script>
</head>
<body>

      <!-- require fo the side bar -->
      <?php 
        require "components/sidebar.php";
      ?>
      <!-- end of side bar -->
      
      <!-- events update -->
      <div class="new_events">
        <div class="display_events">
        <div class="container-fluid">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="new_content">
                    <h1>
                      New Events
                    </h1>
                    <div id="line_red"></div>
                    <?php  require "process/form1.php" ?>
                    <form method="POST" enctype="multipart/form-data">
                      <span id="err1"></span>
                      <input type="text" name="head" placeholder="Event Name" id="input_event">
                      <div class="text_area">
                        <span id="err2"></span>
                        <textarea name="editor" class="ckeditor"></textarea>
                      </div>
                      <span id="err3"></span>
                      <input type="file" id="file_load" name="image_upload">

                      <div id="button">
                        <button type="submit" id="button_event" name="upload">
                          Add Event
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- end of events upddate -->
  
  <script src="js/jquery.js"></script>
  <script src="../ckeditor/ckeditor.js" type="text/javascript"></script>
  <script src="js/script.js" type="text/javascript"></script>
  <script src="js/event.js"></script>
</body>
</html>