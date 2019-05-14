<?php
include "heddss.php";
include "conectionss.php";
?>
<br>
<br>
<br>
<form method="post">
<input type="date" name="date_to"/>
<input type="hidden" name="user_id"/>
<input type="hidden" name="hos_id"/>
<select id="doctors_times" class="form-control minimiseInput" name="doctors_times" style="color: blue;">
      <option value="">--Select Time--</option>
      <option value=""></option>
      <option value="09:00:00">09 To 11</option>
      <option value="11:00:00">11 To 13</option>
      <option value="13:00:00">13 To 15</option>
      <option value="15:00:00">15 To 17</option>
      </select>
<input type="submit" value="sub">

</form>

<?php
//now am placing here underneath

if(isset($_POST['date_to'])){
  $user_id=$_POST['user_id'];
  $date_to=date('Y-m-d',strtotime($_POST['date_to']));
  $hos_id=$_POST['hos_id'];
  $doctors_times=$_POST['doctors_times'];
  //$hospital=$_POST['hospital'];
  //$surgery=$_POST['surgery'];

  $sqlssa="INSERT INTO booking(user_id,hos_id,date_to,time_at)
                       VALUES('$user_id','$hos_id','$date_to','$doctors_times')
                       where user_id='$usernames'";
    $insertMe=mysqli_query($connectDan,$sqlssa);         
}
    ?>