<?php

session_start();
//here we start the session and check if the session is not emty
$usernames= isset($_SESSION['usernames']) ? $_SESSION['usernames'] : "";

include "db_class.php"; //calling another class

 class loginClass extends Connecting{
         var $first_name;
          var $surname;
           var $username;
            var $pwp;
             var $address;
              var $contact;
               var $magenders;
                var $occupant;
                 var $diesease_type;
                  var $medicine;
                  var $passwords;//this one sets passwors
                 
    function __construct(){
          $this->first_name=$_POST['first_name'];
           $this->surname=$_POST['surname'];
            $this->username=$_POST['username'];
             $this->pwp=$_POST['pwp'];
              $this->address=$_POST['address'];
               $this->contact=$_POST['contact'];
                $this->magenders=$_POST['magenders'];
                 $this->occupant=$_POST['occupant'];
                  $this->diesease_type=$_POST['diesease_type'];
                   $this->medicine=$_POST['medicine'];
                   $this->passwords=$_POST['passwords'];
                   


    	
    }

    function registerUser(){
    	  $sql="insert into users(first_name,last_name,user_name,passwords,address,contact,gernder,occupation,disease_type,medicine_type)
 VALUES('$this->first_name','$this->surname','$this->username','$this->pwp','$this->address','$this->contact','$this->magenders','$this->occupant','$this->diesease_type','$this->medicine')";

    	$register=$this->queryConn($sql);
    	header("location:login.php");
    	return $register;

 }

 function loginUser(){

 	session_start();

      $usernames=$_SESSION['usernames']=htmlspecialchars($_POST['usernames']); 

 	$sqls="select user_name,occupation,passwords where user_name='$usernames' and passwords='$this->passwords'";
 	$logMeIn=$this->queryConn($sqls);
      
 	if($logMeIn && mysqli_num_rows($logMeIn) > 0){
 	$row = mysqli_fetch_assoc($logMeIn);

 	if($row['occupation'] == 'phashions') {
 	header('location:booking.php');
 }
 }
 return $logMeIn;
}



 }
  $log=new loginClass();
  $log->registerUser();
  $log->loginUser();
 