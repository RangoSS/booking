
<?php
/*
include "heddss.php";
include "db_class.php";
class bookings extends  Connecting{
	var $user_id;
    var $date_from;
    var $date_to;
    var $times;
    var $radbbb;
    var $hospital;
    var $surgery;
 
function __construct(){

   $this->user_id=$_POST['user_id'];
    $this->date_from=date('Y-m-d',strtotime($_POST['date_from']));
	$this->date_to=date('Y-m-d',strtotime($_POST['date_to']));
	//$this->times=date('H:i:s',strtotime($_POST['times']));
	//$this->times_to=date('H:i:s',strtotime($_POST['times_to']));
	$this->radbbb=$_POST['radbbb'];
	$this->hospital=$_POST['hospital'];
	$this->surgery=$_POST['surgery'];

	
}

function bookingSession(){

	$sql="INSERT INTO booking(user_id,date_from,date_to)
	                    VALUES('$this->user_id','$this->date_from','$this->date_to')";

	                    $inserting=$this->queryConn($sql);
	                    
                        print_r($inserting);
	                    return $inserting;


}

}
//$bookMe=new bookings(); //my instancess
//$bookMe->bookingSession(); 
*/
?>