<?php include('connection.php');
    
   if(@$_SESSION['admin'])
    {
        header("location:contact-us-list.php");
    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Digimonk | Login</title>
   <!-- <link rel="shortcut icon" href="../images/logo.png" /> -->
   <link rel="shortcut icon" href="../sites/default/files/fevicon-icon.png" type="image/vnd.microsoft.icon" />


    <link type="text/css" rel="stylesheet" href="css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="css/material-design-iconic-font.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/layout.css">
    <link type="text/css" rel="stylesheet" href="css/components.css">
    <link type="text/css" rel="stylesheet" href="css/widgets.css">
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/pages.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-extend.css">
    <link type="text/css" rel="stylesheet" href="css/common.css">
    <link type="text/css" rel="stylesheet" href="css/responsive.css">

    <style type="text/css">
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
         margin: 0; 
        }

        #mega
        {
            margin-top: -53px;
            font-size: 30px;
            position: relative;
            left: 30px;
        }

    </style>
</head>
<body class="login-page" style="    background-image: linear-gradient(to right, #9d0309 0%, #fe0000 51%, #9d0309 100%);">
<!--Page Container Start Here-->
<section class="login-container boxed-login">
<div class="container">
<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
<div class="login-form-container" style="">
   <!-- background-image: linear-gradient(to right, #6fd3e3 0%, #29ecf5 51%, #97c9f7 100%); -->
   <?php  if(@$_GET['wrong'])
        {  ?>

    <div class="alert alert-danger alert-dismissible">
      <a href="index.php" class="close">&times;</a>
      <strong>Warning!</strong> Invalid login.
    </div>
 
  <?php } ?>

    <form action="save_login.php" method="post" class="j-forms">
        <div class="login-form-header">
            <div class="logo">
                <a href="" title="Cicada">
                    <img src="images/logo-digi.png" alt="logo">
                    <!-- <p id="mega">Megacube</p> -->
                </a>
            </div>
        </div>
        <div class="login-form-content">
        
<!-- start login -->
    <div class="unit">
        <div class="input login-input">
            <label class="icon-left" for="login">
                <i class="zmdi zmdi-account"></i>
            </label>
            <input type="text" class="form-control login-frm-input" id="login" name="username" placeholder="Username / Email">
        </div>
    </div>
    <!-- end login -->

    <!-- start password -->
    <div class="unit">
        <div class="input login-input">
            <label class="icon-left" for="password">
                <i class="zmdi zmdi-key"></i>
            </label>
            <input type="password" class="form-control login-frm-input" id="password" name="password" placeholder="Password">
    			<span class="hint">
    				<a href="#" data-toggle="modal" data-target="#forgot_password" class="link">Forgot password?</a>
    			</span>
        </div>
    </div>
    <!-- end password -->


            <!-- start keep logged -->
           <!--  <div class="unit">
                <label class="checkbox">
                    <input type="checkbox" name="logged" value="true" checked="">
                    <i></i>
                    Keep me logged in
                </label>
            </div> -->
            <!-- end keep logged -->

            <!-- start response from server -->
            <div class="response"></div>
            <!-- end response from server -->
     </div>
        <div class="login-form-footer">
            <button type="submit" name="login" class="btn-block btn btn-danger">Sign in</button>
        </div>

    </form>
</div>
</div>
</div>

<!--  Start forgot password Modal  -->
 <div class="modal fade" id="forgot_password">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button> 
              <h4 class="modal-title w-100 font-weight-bold"> 
                   <b>Forgot Password</b> <i class="fa fa-question"></i></h4>
            </div>
            <form method="POST" action="save-forgot-password.php">
                <div class="modal-body mx-3">
                   <div class="md-form mb-12">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="defaultForm-email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="email" name="email" class="form-control inp-desg" placeholder="Enter email id" required="">
                            </div>
                         
                        </div>
                    </div> 
                 </div> 
            <center>
             &nbsp; &nbsp;
             
                <a href="">
                <button type="button" class="btn btn-danger" style="margin-top: 17px;">Close</button>
                </a>
                <button  type="submit" class="btn btn-primary"  value="email_submit" name="email_submit" style="margin-top: 17px;">sent to submit</button>
            </center>
                </div>
                 
            </form>
        </div>
    </div>
</div>
     <!--  End forgot password Modal  -->

<!--  Start forgot password otp Modal  -->
    <div class="modal fade" id="otp_forgot_password">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> 
              <h4 class="modal-title w-100 font-weight-bold"> 
                   <b>OTP Sent Email Successfully! <br> Please Check Your Email Id & Enter Your OTP Number.</b></h4>
            </div>
            <form method="POST" action="save-forgot-password.php">
                <div class="modal-body mx-3">
                   <div class="md-form mb-12">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="defaultForm-email">  OTP</label>
                                <input type="number" name="otp_value" onKeyPress="if(this.value.length==6) return false;" class="form-control inp-desg" placeholder="Enter Otp Number" required="">
                            </div>
                         
                        </div>
                    </div> 
                 </div> 
            <center>
             &nbsp; &nbsp;
            
                <a href="index.php">
                <button type="button" class="btn btn-danger" style="margin-top: 17px;">Close</button>
                </a>&nbsp; &nbsp;
                <button  type="submit" class="btn btn-primary"  value="email_submit" name="otp_submit" style="margin-top: 17px;">Next</button>
            </center>
                </div>
                 
            </form>
        </div>
    </div>
</div>
     <!--  End forgot password otp Modal  -->

     <!-- Email Start Error Message -->
   <div class="modal fade" id="error_email_msg">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> 
              <h4 class="modal-title w-100 font-weight-bold"> 
                   <b>This Email Id Is Not Registered!!</b></h4>
            </div>
            <form method="POST" action="save-forgot-password.php">
                <div class="modal-body mx-3">
                   <div class="md-form mb-12">
                    <h4 class="text-center"><b> Please Registered Email Id</b></h4>
                     
                 </div> 
            <center>
             &nbsp; &nbsp;
            
                <a href="index.php">
                <button type="button" class="btn btn-danger" style="margin-top: 17px;">Close</button>
                </a> 
                 
            </center>
                </div>
                 
            </form>
        </div>
    </div>
</div>
       <!--  Email End Error Message -->

        <!--  Start change forgot password Modal  -->
    <div class="modal fade" id="changepassword">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> 
              <h4 class="modal-title w-100 font-weight-bold"> 
                   <b>Create New Password </b></h4>
            </div>
            <form method="POST" action="save-forgot-password.php">
                <div class="modal-body mx-3">
                   <div class="md-form mb-12">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="defaultForm-email">New Password</label>
                                <input type="password" name="new_password" id="new_password" class="form-control inp-desg" placeholder="Enter new password" required="">
                            </div>
                        </div>
                    </div> 
                    <br>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="defaultForm-email">
                                     Confirm Password</label>
                                <input type="password" name="confirm_pass" id="confirm_password" class="form-control inp-desg" placeholder="Enter Confirm password" required="">
                            </div>
                        </div>
                    </div>
                 </div> 
            <center>
             &nbsp; &nbsp;
            
                <a href="index.php">
                <button type="button" class="btn btn-danger" style="margin-top: 17px;">Close</button>
                </a>&nbsp; &nbsp;
                <button  type="submit" class="btn btn-primary" id="btn_submit" name="s_pass" style="margin-top: 17px;">Next to Submit</button>
            </center>
                </div>
                 
            </form>
        </div>
    </div>
</div>
     <!--  End change forgot password Modal  -->

      <!--  Start forgotpassword Failed Massage Modal  -->
    <div class="modal fade" id="otp-forgotpassword-failed">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> 
              <h4 class="modal-title w-100 font-weight-bold"> 
                   <b>Forgot Password <br> Please Re-enter Your Correct OTP</b></h4>
            </div>
            <form method="POST" action="save-forgot-password.php">
                <div class="modal-body mx-3">
                   <div class="md-form mb-12">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="defaultForm-email"> OTP</label>
                                <input type="number" name="otp_value" onKeyPress="if(this.value.length==6) return false;" class="form-control inp-desg" placeholder="Enter Otp Number" required="">
                            </div>
                         
                        </div>
                    </div> 
                 </div> 
            <center>
             &nbsp; &nbsp;
            
                <a href="">
                <button type="button" class="btn btn-danger" style="margin-top: 17px;">Close</button>
                </a>&nbsp; &nbsp;
                <button  type="submit" class="btn btn-primary"  value="email_submit" name="otp_submit" style="margin-top: 17px;">Next</button>
            </center>
                </div>
                 
            </form>
        </div>
    </div>
</div>
     <!--  End forgotpassword Failed Massage Modal  -->


     <!-- Email Start Error Message -->
   <div class="modal fade" id="changepassword_success">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> 
              <h4 class="modal-title w-100 font-weight-bold"> 
                   <b>Password Update</b></h4>
            </div>
            <form method="POST" action="save-forgot-password.php">
                <div class="modal-body mx-3">
                   <div class="md-form mb-12">
                    <h4 class="text-center"><b> Password Updated Successfully!</b></h4>
                     
                 </div> 
            <center>
             &nbsp; &nbsp;
            
                <a href="index.php">
                <button type="button" class="btn btn-danger" style="margin-top: 17px;">Close</button>
                </a> 
                 
            </center>
                </div>
                 
            </form>
        </div>
    </div>
</div>
       <!--  Email End Error Message -->

<!--Footer Start Here -->
<footer class="login-page-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                <div class="footer-content">
                    <span class="footer-meta" style="color: #fff;">Crafted with&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<a href="http://themeforest.net/user/westilian" style="color: #fff;">Digimonk</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End Here -->
</section>
<!--Page Container End Here-->
<script src="js/lib/jquery.js"></script>
<script src="js/lib/jquery-migrate.js"></script>
<script src="js/lib/bootstrap.js"></script>
<script src="js/lib/jRespond.js"></script>
<script src="js/lib/hammerjs.js"></script>
<script src="js/lib/jquery.hammer.js"></script>
<script src="js/lib/smoothscroll.js"></script>
<script src="js/lib/smart-resize.js"></script>

<script src="js/lib/jquery.validate.js"></script>
<script src="js/lib/jquery.form.js"></script>
<script src="js/lib/j-forms.js"></script>
<script src="js/lib/login-validation.js"></script>


  <!-- alert message automatic hide start -->
 <script type="text/javascript">
    $(".alert-dismissible").fadeTo(5000, 500).slideUp(500, function(){
    $(".alert-dismissible").alert('close');
});
</script>
 <!-- alert message automatic hide End -->

 <script type="text/javascript">
    $(function () {
        $("#btn_submit").click(function () {
            var password = $("#new_password").val();
            var confirmPassword = $("#confirm_password").val();
            if (password != confirmPassword) {
                alert("Confirm Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>

 <?php $mess=@$_GET['verification_step1']; if($mess==true) { ?> 
  <script type="text/javascript">
       $(document).ready(function(){
      $("#otp_forgot_password").modal('show');
    });
     $('#otp_forgot_password').modal({
      backdrop: 'static',
      keyboard: false
      });
   </script> 
   <?php } ?>

   <?php $mess=@$_GET['email']; if($mess==true) { ?> 
    <script type="text/javascript">
       $(document).ready(function(){
       $("#error_email_msg").modal('show');
    });
         $('#error_email_msg').modal({
          backdrop: 'static',
          keyboard: false
          });
   </script> 
   <?php } ?>

    <?php $mess=@$_GET['verification_step2']; if($mess==true) { ?> 
    <script type="text/javascript">
       $(document).ready(function(){
       $("#changepassword").modal('show');
    });
         $('#changepassword').modal({
          backdrop: 'static',
          keyboard: false
          });
   </script> 
   <?php } ?>

    <?php $mess=@$_GET['verification_ste']; if($mess==true) { ?> 
    <script type="text/javascript">
       $(document).ready(function(){
       $("#otp-forgotpassword-failed").modal('show');
    });
         $('#otp-forgotpassword-failed').modal({
          backdrop: 'static',
          keyboard: false
          });
   </script> 
   <?php } ?>

   <?php $mess=@$_GET['change_password']; if($mess==true) { ?> 
    <script type="text/javascript">
       $(document).ready(function(){
       $("#changepassword_success").modal('show');
    });
         $('#changepassword_success').modal({
          backdrop: 'static',
          keyboard: false
          });
   </script> 
   <?php } ?>



   
</body>
</html>