<?php
class Connecting {

	var $host="localhost";
	var $user="root";
	var $password="";
	var $db_table="phashions";

	public function getConnection(){

	$conn=mysqli_connect($this->host,$this->user,$this->password,$this->db_table) or die("u are worse");

	/*if(!$this->conn){
		echo("you are not connected bro");
	}
	*/

	return $conn;

}
//so here i have to specify wich variable am calling 
// so in this function we take default variable for returning serial number
// false is equals to null
public function queryConn($query,$returnId=false){

    $conn=$this->getConnection();
    $result=mysqli_query($conn,$query) or die(mysqli_error($conn));

    if($returnId)  // we only uses braces only when is more than on statement 
    	return $conn->insert_id;          //this variable is found on login_back.php
    else
    return $result;    //return this only when it is false
}
}
class getingData extends Connecting{

	function myResults(){
	 $sql="SELECT hos_name,province,location,telephone FROM hospitals";
	 $sql2="SELECT * FROM hospitals";
	 $res=$this->queryConn($sql);   ////thi is function call
	  $res2=$this->queryConn($sql2); //here am returning them as json
    //print_r($res);
	 return $res;
	 return $res2;
   
}



}



