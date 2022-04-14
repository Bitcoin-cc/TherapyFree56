<?php
    session_start();
     
    $_SESSION['userID'] = NULL;
    $_SESSION['email'] = NULL;
     
    unset($_SESSION);
     
    session_destroy();
     
    header('Location: /TherapyFree56-master/login.php');
?>