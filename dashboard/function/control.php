

<?php

function login($email, $password) {

    // require "database/connect.php";

    // $email_entry = mysqli_real_escape_string($conn, $email);
    // $password_entry = mysqli_real_escape_string($conn, $password);

    // $users = "SELECT * FROM `users` WHERE `email` = '$email_entry' AND `password` = '$password_entry' LIMIT 1";

    // $result = mysqli_query($conn, $users);

    $email_entry = "chrisogili12@gmail.com";
    $password_entry = "12345678";

    if($email == $email_entry && $password == $password_entry) {

        session_start();

        $_SESSION['user']['email'] = $email_entry;
        $_SESSION['user']['password'] = $password_entry;

        echo "Yes";


    } else {

        echo "No";

    }
}


function registerEvent($event_head, $event_data, $photo_path) {

    require "database/connect.php";

    $event_headEntry = mysqli_real_escape_string($conn, $event_head);

    $event_dataEntry = mysqli_real_escape_string($conn, $event_data);

    $photo_pathEntry = mysqli_real_escape_string($conn, $photo_path);

    $event_register = "INSERT INTO `event` (`event_name`, `event_content`, `event_image`) VALUES('$event_headEntry', '$event_dataEntry', '$photo_pathEntry')";

    $event_result_register = mysqli_query($conn, $event_register);

    if($event_result_register) {

        echo "<div class='alert alert-success'>Entry Added Successfully</div>";
    } else  {
        
        echo mysqli_error($conn);
    }

}


?>