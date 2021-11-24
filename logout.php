<?php
    session_start();
    // Zavrsetak sesije
    if(session_destroy()) {
        // Redirecting To Home Page(Login)
        header("Location: login.php");
    }
?>
