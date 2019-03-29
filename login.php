

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
                        <form id="login-form" class="form" action="loginBackAlone.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="usernames" class="text-info">Username:</label><br>
                                <input type="text" name="usernames" id="usernames" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="passwords" class="text-info">Password:</label><br>
                                <input type="text" name="passwords" id="passwords" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info" id="goToRegister">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

    <script type="text/javascript">
        $(document).ready(function(){
         $("#goToRegister").click(function(){
            location.href="register.php";
         });
        });
    </script>