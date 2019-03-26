<?php
 include "heddss.php";

 include "db_class.php";
?>
<p>
  </p>
<?php
      //my objects
        $ramas=new getingData();
       $result=$ramas->myResults();
       $result2=$ramas->myResults();
        ?>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script><!--this script deals with modals-->
  <link href="css/homeGallery.css" rel="stylesheet" id="bootstrap-css">
  <link href="css/styleTab.css" rel="stylesheet" id="bootstrap-css">

<body style="padding-top: 3%;">

<div class="container">
  <h2 style="color: white">Find Health</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Find nearest hospital</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: white;">choose your nearest hospital</h4>
        </div>
        <div class="modal-body">
          <p>all we have.</p>
          <div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">


    <thead>
    <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
        <tr>
            <th>Hospitals</th>
            <th>province</th>
            <th>Address</th>
            <th>Telephone</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
          <?php
                 while($row=mysqli_fetch_array($result)){
                     
                     echo "<tr>
                           <td> $row[hos_name]</td>
                           <td> $row[province]</td>
                           <td> $row[location]</td>
                           <td> $row[telephone]</td>
                           <td class='text-center'><a class='btn btn-info btn-xs' href='#''><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='#' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>
                                </tr>";
                 }
         ?>   
    </table>
    </div>
</div>
          <!--end of table-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--display them as a Json Array-->
<div class="container">
  <h4>Find your nearest Hospital</h4>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModall">Json</button>

  <!-- Modal -->
  <div class="modal fade" id="myModall" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">choose your nearest hospital</h4>
        </div>
        <div class="modal-body">
          <p>This is readable by human being.</p>
          <div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    
          <?php
                $json_array=array();
                 while($rows=mysqli_fetch_array($result2)){
                     
                     $json_array[]=$rows;
                 }
                 echo "<pre>";
                 echo json_encode($json_array)."<br>";
                 echo "</pre>";
                 echo "<pre>";
                       print_r($json_array);
                    echo "</pre>";
         ?>   
   
    </div>
</div>
          <!--end of table-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--here comes my gallery-->


<div class="container" style="border-style: solid;border-color: black;width: 50%;margin-top: -13%;margin-right: 20%;padding-bottom: 10px;">

  <h2 style="text-align:center;color:white;">Phations Hospital</h2>
  <p style="width: 40%;float: right;color:white;">What we stand for
At Medicross, our core value is care.
We care about the dignity of our patients and all members of the Netcare family. We care about the participation of our people and our partners in everything we do. We care about truth in all our actions. We are passionate about quality care and professional excellence.</p>
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/happy.jpg" style="width:40%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/hos7.jpg" style="width:40%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/hos3.jpg" style="width:40%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/hos4.jpg" style="width:40%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/hos5.jpg" style="width:40%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/hos8.jpg" style="width:40%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)" style="margin-right: 60%;">❯</a>

  <div class="caption-container" style="border-style: solid;border-color: blue;">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/hos4.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Doctors">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/ambu1.jpg" style="width:100%" onclick="currentSlide(2)" alt="Ambulance">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/ambu2.jpg" style="width:100%" onclick="currentSlide(3)" alt="bed and transportation">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/meal1.jpg" style="width:100%" onclick="currentSlide(4)" alt="Hospitality">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/hos7.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/meal4.jpg" style="width:100%" onclick="currentSlide(6)" alt="hospitality">
    </div>
  </div>
</div>

<div id="myvieos" style="padding-left: 10%;">
  <video width="320" height="240" controls autoplay>
  <source src="videos/hosVieos.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
<!-- tabs comes here-->
<div class="container" style="width: 70%;margin-top: -17%;margin-right: 4%;">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Insurance</h3>
                    <span class="pull-right">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Excident</a></li>
                            <li><a href="#tab2" data-toggle="tab">Life Cover</a></li>
                            <li><a href="#tab3" data-toggle="tab">Property</a></li>
                            <li><a href="#tab4" data-toggle="tab">Transit</a></li>
                        </ul>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">We provide accidental death, temporary total disability as well as permanent disability cover to anyone between the ages of 14 and 70. We’ll pay out the full sum insured in case of death – and for a disability claim we’ll pay out a percentage of the sum insured, depending on the specific disability or injury.</div>
                        <div class="tab-pane" id="tab2">We’ve taken the complication out of figuring out what cover amount best suits your needs with this easy-to-use life insurance calculator.

                        It provides you with an estimate of how much death or disability cover you need to maintain your lifestyle or that of your loved ones if you were to become disabled or pass away.</div>
                        <div class="tab-pane" id="tab3">Cover your buildings, contents and stock against damage or loss because of fire, theft or accidental damage.  Additional covers including cover for power surges, deterioration of stock and renting out of stock are also available. We also provide you with peace of mind by automatically adjusting your stock value in the months you specify should your business be subject to seasonality – hassle free.</div>
                        <div class="tab-pane" id="tab4">Goods-in-transit cover assists businesses that will have to transport goods from one premises to another. This cover option is available as stand-alone cover and additional cover for when you need to transport goods outside the borders of South Africa is also available. </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>
</div><!--this div is for closing videos-->

</body>

<?php
include "footes.php";
?>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>


