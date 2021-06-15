<?php
    session_start();
    unset($_SESSION['user']);
    header("location: ../ProjectBookStore/Frontend/User/Index-Home.php");
?>