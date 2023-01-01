

<?php

session_start();

$_SESSION['users']['email'] = '';
$_SESSION['users']['password'] = '';

session_unset();

header("location: login.php");


?>