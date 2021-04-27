<?php 
    unset($_SESSION['flag']);
    session_destroy();
    header('location: ../view/login.php');
?>