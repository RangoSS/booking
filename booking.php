<?php

include "heddss.php";
include "conectionss.php";
include "bookingBack.php";
//$bookMe=new bookings(); //my instancess
//$books=$bookMe->bookingSession(); //calling session with docto function
//$result=$bookMe->bookDoctor();

//my function for listing all bookings

  echo "<br>";   
?>
<style type="text/css">
  .minimiseInput{width: 30%;}
  .timeBox{width: 10%;}
</style>
<br>
<br>
<body>
  <div style="height: 15%;background-color: silver;">
    <p style="padding-left: 30%;"> time session is too hours,choose any <b>time between 08:30 and 04:30</b></p>

  </div>
  <br>
  <!--here is my dropdown list-->
  <input class="btn btn-default" type="button" name="btnSow" value=" Place Your Bookings" onclick="$('#myForm').show();$('#showMyBookings').hide();" style="margin-left: 30%;">
  <input class="btn btn-default" type="submit" name="btnSow" value=" View  Bookings" onclick="$('#showMyBookings').show();$('#myForm').hide();">
  <input class="btn btn-default" type="button" name="btnSow" value=" place your bookings" onclick="$('#showMyBookings').show();">
   <br>
  <!--it ends up here as well-->
<form class="form-horizontal" id="myForm" action=" " method="post" style="border-style: solid;border-color: blue;display: none;">
  <div class="form-group">
    <label class="control-label col-sm-2" for="first_name">first name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control minimiseInput" name="first_name" id="first_name" value="<?php echo $usernames;?>" readonly>
      <input type="hidden" class="form-control minimiseInput" name="user_id" id="user_id"><!--hidden value for user_id-->
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="date_from">Date From:</label>
    <div class="col-sm-10"> 
      <input type="date" class="form-control minimiseInput" name="date_from" id="date_from" placeholder="date from">
    </div>
  </div>
  <div class="form-group" style="margin-left: 38%;margin-top: -4%;">
    <label class="control-label col-sm-2" for="date_to">Date To:</label>
    <div class="col-sm-10"> 
      <input type="date" class="form-control minimiseInput" name="date_to" id="date_to" placeholder="date to">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="date_from">Time from:</label>
    <div class="col-sm-10"> 
      <input type="time" class="form-control timeBox" name="times" id="times">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="date_from">Time To:</label>
    <div class="col-sm-10"> 
      <input type="time" class="form-control timeBox" name="times_to" id="times_to">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Hospitals">Hospitalisation:</label>
    <div class="col-sm-10"> 
      <input type="radio" name="radbbb" value="surgery" onclick="$('#mySurgeries').show();$('#myHostes').hide();">Surgery
      <input type="radio"  name="radbbb" value="hospital" onclick="$('#myHostes').show();$('#mySurgeries').hide();">Hospital
    </div>
  </div>
  <div class="form-group" id="myHostes" style="display:none;">
    <label class="control-label col-sm-2" for="hospital">choose Hospital:</label>
    <div class="col-sm-10"> 
      <select id="hospital" class="form-control minimiseInput" name="hospital" style="color: blue;">
      <option value="">--select hospital--</option>
      <option value="Mdantsane">Cecilia Makiwane Hospital (Mdantsane</option>
      <option value="Aurora">Nurture Aurora Rehabilitation Hospita</option>
      <option value="Kempton">Kempton Park Hospital</option>
      <option value="Tembisa">Tembisa Hospital</option>
      <option value="Bloemcare">Bloemcare Psychiatric Clinic  Hospital (Private)</option>
      <option value="Kalafong">Kalafong Hospital</option>
      <option value="Mamelodi">Mamelodi Hospital</option>
      <option value="Tshilidzini">Tshilidzini Hospital</option>
      <option value="Steve">Steve Biko Hospital</option>
      <option value="Siloam">Siloam Hospital</option>
      </select>
      
    </div>
  </div>

  <div class="form-group" id="mySurgeries" style="display:none;">
    <label class="control-label col-sm-2" for="hospital">choose Surgery:</label>
    <div class="col-sm-10"> 
      <select id="surgery" class="form-control minimiseInput" name="surgery"style="color: orange;">
      <option value="">--select surgery--</option>
      <option value="Radiologist">Radiologist (santon)</option>
      <option value="heart">heart Surgery(rosebank)</option>
      <option value="Dentist">Dentist </option>
      <option value="Glyconogist">Glyconogist(pretoria)</option>
      <option value="Mens">Mens Clinik (pretoria)</option>
      <option value="Allergies">Allergies (Benony)</option>
      <option value="Neurologist">Neurologist(jonhannesburg)</option>
      <option value="Oncologist">Oncologist(Roodeport)</option>
      <option value="Physiologist">Physiologist(Musina)</option>
      <option value="Plastic">Plastic Surgeon(mamelody)</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
<br>

<div id="showMyBookings" style="display: none;">
   
    
    <div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date From</th>
            <th>Date To</th>
            <th>At</th>
            <th>To</th>
            <th>Trace Number</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>

       <?php 

     $sql="SELECT first_name,date_from,date_to,time_at,time_to,trace_number,last_name FROM users u
    JOIN booking b ON u.user_id=b.user_id where user_name='$usernames'";

   $res=mysqli_query($connectDan,$sql);   ////thi is function call
   
    while($row=mysqli_fetch_assoc($res)){

      echo "
            <tr>
                <td>$row[first_name]</td>
                <td>$row[last_name]</td>
                <td>$row[date_from]</td>
                <td>$row[date_to]</td>
                <td>$row[time_at]</td>
                <td>$row[time_to]</td>
                <td>$row[trace_number]</td>
                <td class='text-center'><a class='btn btn-info btn-xs' href='#'><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='#' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span>Cancel</a></td>
            </tr>";
            }

            ?>
           
    </table>
    </div>
</div>

</div>

<?php
//now am placing here underneath
/*
if(isset($_POST['user_id'])){
  $user_id=$_POST['user_id'];
  $date_from=date('Y-m-d',strtotime($_POST['date_from']));
  $date_to=date('Y-m-d',strtotime($_POST['date_to']));
  $times=date('H:i:s',strtotime($_POST['times']));
  $times_to=date('H:i:s',strtotime($_POST['times_to']));
  $radbbb=$_POST['radbbb'];
  $hospital=$_POST['hospital'];
  $surgery=$_POST['surgery'];
}
*/
?>

</body>