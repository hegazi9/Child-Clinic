<?php

       if(@$_POST['submit']=='submit')
         {
                if($_POST['tables']=="User"){
              
                include '../models/System.php';
                 $log=new System();
                 $Parent_report_resu=$log->RegistersReport();
                   include '../../Site/Report_View.php';
           
             }
         
              if($_POST['tables']=="vaccine"){
              
                include '../models/System.php';
                 $log=new System();
                 $vaccine_report_result=$log->VaccineReport();
                  include '../../Site/Report_View.php'; 
                 
            
             }
         
             if($_POST['tables']=="child"){
              
                 
                 include '../models/System.php';
                 $log=new System();
                 $child_report_result=$log->getallchilds();              
                 include '../../Site/Report_View.php'; 
              
         
        
             }
              if($_POST['tables']=="finished"){
                if (time() >= strtotime("14:00:00")) 
                {
                     include '../models/System.php';
                     $log=new System();
                     $finished_cases_report=$log->finishedcasses();
                   include '../../Site/Report_View.php'; 
                   
                } 
                
          else  {
                     echo '<script type="text/javascript">alert("sorry system cannot generate this report at current time ");history.back();</script>';
                }
         }
         
         
               if($_POST['tables']=="admin"){
              
                 
                 include '../models/System.php';
                 $log=new System();
                 $admin_report_result=$log->AdminReport();              
                 include '../../Site/Report_View.php'; 
              
         
        
             }
             
              if($_POST['tables']=="employee"){
              
                 
                 include '../models/System.php';
                 $log=new System();
                 $employee_report_result=$log->EmployeeReport();              
                 include '../../Site/Report_View.php'; 
              
         
        
             }
             
             
             
             if($_POST['tables']=="nurse"){
              
                 
                 include '../models/System.php';
                 $log=new System();
                 $nurse_report_result=$log->NurseReport();              
                 include '../../Site/Report_View.php'; 
              
         
        
             }
             
             
              
             if($_POST['tables']=="branch"){
              
                 
                 include '../models/System.php';
                 $log=new System();
                 $branch_report_result=$log->BranchReport();              
                 include '../../Site/Report_View.php'; 
              
         
             }
         }         
         
         