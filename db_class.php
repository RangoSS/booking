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
public function queryConn($query){

    $conn=$this->getConnection();
    $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
    return $result;
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



