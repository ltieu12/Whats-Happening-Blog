<?php
    // remove all session variables and destroy the session, then redirect to login.php
    session_start();
    $_SESSION = array();
    session_destroy();
    header("location: login.php");
    exit;
?>