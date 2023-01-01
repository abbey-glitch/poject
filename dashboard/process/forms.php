

<?php

if(isset($_POST['email'])) {

    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    require  "../function/control.php";

    $feedback = login($email, $password);

    echo $feedback;

}


?>