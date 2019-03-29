<?php
include "db_class.php"; //calling another class
class loginClassAlone extends Connecting{

	 var $passwords;//this one sets passwors

function __construct(){
	
	$this->passwords=$_POST['passwords'];
}

 function loginUser(){

 	session_start();

      $usernames=$_SESSION['usernames']=htmlspecialchars($_POST['usernames']); //takes data from one page to another

 	$sqls="select user_name,occupation,passwords from users where user_name='$usernames' and passwords='$this->passwords'";
 	$logMeIn=$this->queryConn($sqls);
      
 	if($logMeIn && mysqli_num_rows($logMeIn) > 0){
 	$row = mysqli_fetch_assoc($logMeIn);

 	if($row['occupation'] == 'phashions') {
 	header('location:booking.php');
 }
  else{
  	header("location:management.php");
  }
  
 }
 return $logMeIn;
}
}

$getIn=new loginClassAlone();
$getIn->loginUser();


?>