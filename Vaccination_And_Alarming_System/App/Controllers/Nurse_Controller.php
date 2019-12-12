<?php
if($_POST){
    
//Nurse Use Vaccine
 if(isset($_POST['Submit']) AND $_POST['Submit']=="Submit")
      {
          include '../models/Nurse.php';
          include '../models/Vaccine.php';
          $nurse=new Nurse();
          $lo=new Vaccine();
          $lo->quantity=$_POST['number'];
          $lo->id=$_POST['vaccine_type'];
          $result=new Nurse();
          $log=$result->ControlVaccine($lo);
          if($log)
          {
                echo '<script type="text/javascript">alert("New Vacciene Quantity Added Successfilly");history.back();</script>';
          }
          else
          {
                echo '<script type="text/javascript">alert("Sorry cannot add this Quantity");history.back();</script>';
          }
          
     }
     if(isset($_POST['Submit']) AND $_POST['Submit']=="ADD")
      {
          include '../models/Nurse.php';
          include '../models/Vaccine.php';
          $nurse=new Nurse();
          $lo=new Vaccine();
          $lo->name=$_POST['name'];
          $lo->quantity=$_POST['quantity'];
          $lo->dose=$_POST['dose'];
          $result = $nurse->Addnewvaccine($lo);
          if($result)
          {
              echo '<script type="text/javascript">alert("New Vacciene  Added Successfilly");history.back();</script>';
          }
        else 
        {
            echo '<script type="text/javascript">alert("Sorry cannot add this Vaccine");history.back();</script>';
        }
    }
        }
 else if($_GET){
   IF(isset ($_GET['action'])&&$_GET['action']=="viewscheduler") 
   {
       $id=$_SESSION['branch'];
       include '/../models/nurse.php';
       $nurse=new Nurse();
       $resu=$nurse->getreservation($id);
      if($resu==array())
      {
           echo '<script type="text/javascript">alert("no reservation today");history.back();</script>';
      }
 else {
       include '../Site/check_attendance.php';
      }
   }
   IF(isset ($_GET['action'])&&$_GET['action']=="reschedule")
   {
    $id= $_GET['id'];
    include '/../models/nurse.php';
    $nurse=new Nurse();
    $result=$nurse->Reschedule($id);
    if($result)
    {
         echo '<script type="text/javascript">alert(" rescheduled ");history.back();</script>';
    }
 else {
         echo '<script type="text/javascript">alert("sorry cannot reschedule");history.back();</script>';
 } 
   }
   IF(isset ($_GET['action'])&&$_GET['action']=="controllvaccine")
     {
         include '/../models/system.php';
         $system=new System();
         $row=$system->VaccineReport();
         include '../Site/conrtol_vaccine.php';
     }
}     
        
        
 