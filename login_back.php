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
                  var $serial_number="nothing";
                 
                 
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
                   $this->serial_number=$_POST['serial_number'];
                   
                   


    	
    }

    function registerUser(){
    	  $sql="insert into users(first_name,last_name,user_name,passwords,address,contact,gernder,occupation,disease_type,medicine_type)
 VALUES('$this->first_name','$this->surname','$this->username','$this->pwp','$this->address','$this->contact','$this->magenders','$this->occupant','$this->diesease_type','$this->medicine')";



    	$insertedId=$this->queryConn($sql,true);//here we store that default variable as true
echo "USREF".str_pad($insertedId, 8,"0",STR_PAD_LEFT);   //this adds 8 zeros berore the serial number 
    header("location:login.php");

 }





 }
  $log=new loginClass();
  $log->registerUser();
  
 