<?php
if($_POST)
{
    if(isset($_POST['submit']) && $_POST['submit']=="Register")
    {
        include '../models/Parentt.php';
        $data=new Parentt();
        $data->name=$_POST['name'];
        $data->username=$_POST['username'];
        $data->password=$_POST['password'];
        $data->email =$_POST['email'];
        $data ->age =$_POST['age'];
        $data->usertype=2;
        $result=$data->register($data);
        if($result==true)
        {
            session_start();
             //$_SESSION['id']=$data->id;
             $_SESSION['username']=$data->username;
             $_SESSION['password']=$data->password;
             $_SESSION['name']=$data->name;          
             $_SESSION['email']=$data->email;
             $_SESSION['type']=$data->usertype;
             echo '<script type="text/javascript">alert("sucessful register ");</script>';
             header ('Location:http://localhost/Vaccination_And_Alarming_System/Site/parent_Home_Page.php');
             
        }
        else if($result==FALSE) 
            {
            echo '<script type="text/javascript">alert("this username or email is already used");history.back();</script>';
            //echo 'please enter another username or password';
            }
    }
    
    
    
    
    else if(isset($_POST['Submit']) && $_POST['Submit']=="Update")
    {
        include '../models/Parentt.php';
        $data=new Parentt();
        $data->id=$_POST['id'];
        $data->name=$_POST['name'];
        $data->username=$_POST['username'];
        $data->password=$_POST['password'];
        $data->email =$_POST['email'];
        $data ->age =$_POST['age'];
        $data->usertype=2; 
        $result=$data->edit_pofile($data);
        if($result)
        {
            echo '<script type="text/javascript">alert("successful update");history.back();</script>';
        }
        else
         {
           echo '<script type="text/javascript">alert("sorry failed to update");history.back();</script>';
         }
    }
    
    
    
    
    else if(isset($_POST['Submit']) && $_POST['Submit']=="Add")
    {
        include '../models/Parentt.php';
        include '../models/child.php';
        $a=new Child();
        $a->name=$_POST['name'];
        $a->age=$_POST['age'];
        $a->parent_id=$_POST['p_id'];
        $b=new Parentt();
        $result=$b->add_child($a);
        if($result)
        {
           
            echo '<script type="text/javascript">alert("new child was added");history.back();</script>';
            
        }
        else
        {
            echo '<script type="text/javascript">alert("sorry no one was added");history.back();</script>';
        }
    }
    
    
    
    
    
    else if(isset($_POST['Submit']) && $_POST['Submit']=="Continue") 
        {
        
        include '/../models/parentt.php';
        include '/../models/reservation.php';
        $reserve=new Reservation();
        
        $parent=new Parentt();
        $data[0]=$_POST['p_id'];
        $data[1]=$_POST['child'];
        $data[2]=$_POST['vaccine'];
        $data[3]=$_POST['location'];
        $data[4]=$_POST['date'];
        $vars=$reserve->select_avillabletimes($data[4],$data[3]);
        for($i=0;$i<count($vars);$i++)
        {
            $value[$i]=$vars[$i]['time'];
        }
         
        include '../../Site/reserve_appointment2.php';
        }
        
        
        
        else if(isset($_POST['Submit']) && $_POST['Submit']=="C Rescheduling")
        {
        include '/../models/parentt.php';
        include '/../models/reservation.php';
        
        $reserve=new Reservation();
        $parent=new Parentt();
        $data[0]=$_POST['p_id'];
        $data[1]=$_POST['child'];
        $data[2]=$_POST['vaccine'];
        $data[3]=$_POST['location'];
        $data[4]=$_POST['date'];
        $vars=$reserve->select_avillabletimes($data[4],$data[3]);
        for($i=0;$i<count($vars);$i++)
        {
            $value[$i]=$vars[$i]['time'];
        }
        include '../../Site/update_appointment2.php';
        }
        
        
        
        else if (isset($_POST['Submit']) && $_POST['Submit']=="Reserve") 
          {
          include '../models/Parentt.php';
          include '../models/reservation.php';
          include '../models/nurse.php';
          include '../models/vaccine.php';
          if($_POST['child_id']==0||$_POST['branchid'] ==0 ||$_POST['vaccineid']==0||$_POST['time']==0)
          {
         echo '<script type="text/javascript">alert("please fill all data");history.back();history.back();</script>' ;    
          }
          else
          {
          $r=new Reservation();
          $nurse=new Nurse();
          $vaccine=new Vaccine();
          $r->parent_id=$_POST['p_id'];
          $r->child_id=$_POST['child_id'];
          $r->branch=$_POST['branchid'];
          $r->r_date=$_POST['date'];
          $r->vaccine_id=$_POST['vaccineid'];
          $r->r_time=$_POST['time'];
          $p=new Parentt();
          $e=$p->reserve_appointment($r);
          if($e)
          {
              $vaccine->id=$_POST['vaccineid'];
              $vaccine->quantity=1;
              $nurse->ControlVaccine($vaccine);
              echo '<script type="text/javascript">alert("Your Reservation was submitted");history.back();history.back();</script>';
          }
         else
          {
                echo '<script type="text/javascript">alert("sorry cannot submit");history.back();</script>';
          }
          }
          
       }
       
       
       else if (isset($_POST['Submit']) && $_POST['Submit']=="Reschedule") 
          {
          include '../models/Parentt.php';
          include '../models/reservation.php';
          $r=new Reservation();
          $r->parent_id=$_POST['p_id'];
          $r->r_date=$_POST['date'];
          $r->r_time=$_POST['time'];
          $p=new Parentt();
         $e=$p->reschedule_appointment($r);
          if($e)
          {
              echo '<script type="text/javascript">alert("Your Reservation was submitted");history.back();history.back();</script>';
          }
         else
          {
                echo '<script type="text/javascript">alert("sorry cannot submit");history.back();</script>';
          }  
       }
       
       
       
       
       
 }
elseif ($_GET) {
IF(isset ($_GET['action'])&&$_GET['action']=="update")
{
    include '/../models/logger.php';
    $logger=new logger();
    $logger->username=$_SESSION['username'];
    $logger->password=$_SESSION['password'];
    $row=$logger->getdate($logger);
    include '../Site/edit_profile.php';
}



IF(isset ($_GET['action'])&&$_GET['action']=="view")
{
   
    include '/../models/parentt.php';
    include '/../models/reservation.php';
    $reserve=new Reservation();
    $parent=new parentt();
    $id=$_SESSION['id'];
    $row=$parent->getallchilds($id);
    $row2=$reserve->getallvaccines();
    $row3=$reserve->getalllocations();
    include '../Site/Reserve_Appointment.php';
}



if (isset ($_GET['action'])&&$_GET['action']=="history")
{
    include '/../models/parentt.php';
    $parent=new parentt();
    $id=$_SESSION['id'];
    $resu=$parent->reservation_history($id);
    //print_r($resu);
     if($resu==array())
      {
           echo '<script type="text/javascript">alert("you have no reservation history");history.back();</script>';
      }
 else {
       include '../Site/reserv_histo.php';   
      }
    
}




if (isset ($_GET['action'])&&$_GET['action']=="reschedule")
{
    $id= $_GET['id'];
    include '/../models/parentt.php';
    $parent=new parentt();
    $resu=$parent->getreservationbyid($id);
    include '../Site/update_Appointment_1.php';
}
if (isset ($_GET['action'])&&$_GET['action']=="notify")
{
    include '/../models/parentt.php';
    $parent=new parentt();
    $id=$_SESSION['id'];
    $result=$parent->getnotify($id);
    //print_r($result);
    include '../Site/notification.php';
}


}
