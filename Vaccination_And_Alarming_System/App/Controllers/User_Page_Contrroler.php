<?php

if($_GET['user']=="Nurse")
{
    session_destroy();
    header("Location:http://localhost/Vaccination_And_Alarming_System/Site/Nurse_Home_Page.php");

}

if($_GET['user']=="Admin")
{
     session_destroy();
    header("Location:http://localhost/Vaccination_And_Alarming_System/Site/Admin_Home_Page.php");
}



if($_GET['user']=="Parent")
{
     session_destroy();
    header("Location:http://localhost/Vaccination_And_Alarming_System/Site/Parent_Home_Page.php");
}


if($_GET['user']=="Employee")
{
     session_destroy();
    header("Location:http://localhost/Vaccination_And_Alarming_System/Site/Employee_Home_Page.php");
}