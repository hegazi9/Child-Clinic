<?php
session_start();
if(isset( $_SESSION['username'])){
    session_destroy();
    header("Location: http://localhost/Vaccination_And_Alarming_System/Site/login_register.php");
    }