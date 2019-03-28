<?php
 include "heddss.php";
?>
<link href="css/logoinStyle.css" rel="stylesheet" id="bootstrap-css">
<body>
    <div id="login" style="">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info" onclick="$('#login2').show();$('#login').hide();">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--register me here -->
    <div id="login2" style="display: none;color: brown;">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12" style="height: auto;">
                        <form id="login-form" class="form" action="login_back.php" method="post" style="height: auto;">
                            <h3 class="text-center text-info">Registration</h3>
                            <div class="form-group">
                                <label for="first_name" class="text-info">First Name:</label><br>
                                <input type="text" name="first_name" id="first_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="surname" class="text-info">Surname:</label><br>
                                <input type="text" name="surname" id="surname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="pwp" id="pwp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address" class="text-info">Address:</label><br>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact" class="text-info">Contact:</label><br>
                                <input type="text" name="contact" id="contact" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="gender" class="text-info">Gender:</label><br>
                                <input type="radio" class="radio-inline" name="magenders" id="magenders" value="male" class="form-control">Male
                                <input type="radio" class="radio-inline" name="magenders" id="magenders" value="female" class="form-control">Female
                            </div>
                            
                            <div class="form-group">
                                <label for="password" class="text-info">Occupation:</label><br>
                                <input type="radio" class="radio-inline" name="occupant" id="occupant" value="employee" class="form-control">Eployee
                                <input type="radio" class="radio-inline" name="occupant" id="occupant" value="phashions" class="form-control" onclick="$('.dieases').show();">Phasiont
                            </div>
                            <div class="form-group dieases" style="display: none;">
                                <label for="diesease_type" class="text-info">Diesease Type:</label><br>
                                <input type="text" name="diesease_type" id="diesease_type" class="form-control">
                            </div>
                            <div class="form-group dieases" style="display: none;">
                                <label for="medicine" class="text-info">Medicine Type:</label><br>
                                <input type="text" name="medicine" id="medicine" class="form-control">
                            </div>
                            <div class="form-group dieases" style="display: none;">
                                <select id="myoptions" name="myoptions" class="form-control">
                                    <option value="">--how we should deliver your package--</option>
                                    <option value="post office">post office</option>
                                    <option value="dsv">dsv</option>
                                    <option value="post net">post net</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                
                                <input type="button" id="regis" name="submit" class="btn btn-info btn-md" value="Save"/>
                                <input type="reset" id="regis" name="submit" class="btn btn-info btn-md" value="Reset" onclick="$('#displayForm').hide();" />
                                <input type="submit"name="submit" class="btn btn-info btn-md" value="Back"/>
                                <input type="submit"name="submit" class="btn btn-info btn-md" value="Submit"/>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--ends of forms-->
    <div id="displayForm" style="margin-right: 10%;border-style: solid;border-left-width: red;width: 40%;margin-top: -36%;float: right;color: white;background-color: grey;padding:5%;display: none;">
        <h1>Check if u entered correct Values</h1>
    </div>
</body>

<script type="text/javascript">
    //each function used to loop through
    $(document).ready(function(){
      $("#regis").click(function(){
     
        $(":text").each(function(){
           $("#displayForm").show();
           var prevEl = $(this).prev();//this guy gets the element before the element and the element we got here is <br>
           var lblElement = prevEl.prev(); //so here we strick it by getting another element before it
           

         $("#displayForm").append(lblElement.html()+"--"+$(this).val()+"<br/>");

      });
      });

        });
    
</script>
