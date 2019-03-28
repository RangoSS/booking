<?php
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
                   


    	
    }

    function registerUser(){
    	  $sql="insert into users(first_name,last_name,user_name,passwords,address,contact,gernder,occupation,disease_type,medicine_type)
 VALUES('$this->first_name','$this->surname','$this->username','$this->pwp','$this->address','$this->contact','$this->magenders','$this->occupant','$this->diesease_type','$this->medicine')";

    	$register=$this->queryConn($sql);
    	header("location:login.php");
    	return $register;

 }

 }
  $log=new loginClass();
  $log->registerUser();
 