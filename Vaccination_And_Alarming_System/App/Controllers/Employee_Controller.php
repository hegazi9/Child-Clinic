<?php
if($_POST)
{
   
//Employee Add Vaccine
    if(isset($_POST['Add']) AND $_POST['Add']=="Add")
      {
   
        include '../models/Employee.php';
         include '../models/Vaccine.php';
         
        $emplyee=new Employee();
        $ob=new Vaccine();
        $ob->number=$_POST['number'];
        $ob->type=$_POST['vaccine_type'];
        $result=$emplyee->UpdateVaccine($ob);
        
     if($result)
          {
                echo '<script type="text/javascript">alert("Vaccienes Added Successfilly");history.back();</script>';
          }
          else
          {
                echo '<script type="text/javascript">alert("Sorry Can Not Add V accine");history.back();</script>';
          }
        
        }
 
     if(isset($_POST['submit']) AND $_POST['submit']=="submit")
  {      include '../models/connect.php';
      include '../models/Invoice.php';
      include './logger_controller.php';
 

      $invoice["employeeid"]=  $_POST['employeeid'];
      $invoice ["cost"]= $_POST['costs'];
     $invoice ["equipment"]= $_POST['equipementcosts'];
     $invoice ["expenses"] = $_POST['expenses'];
     
      $result = new Invoice($invoice);
   $result->AddInvoices();
     if ($result){
         echo '<script type="text/javascript">alert("the invoice was added");history.back();</script>';
         header("Location :http://localhost/Vaccination_And_Alarming_System/Site/employee_Home_Page.php?page=Invoices");
  
     
     }
  }
    
}