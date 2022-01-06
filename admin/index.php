<?php include('../config.php');
     session_start();
?>
<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>OZ-Protein Admin</title>
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo constant('quizUrl'); ?>assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo constant('quizUrl'); ?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo constant('quizUrl'); ?>assets/img/favicon/favicon-16x16.png">
    <link href='<?php echo constant('quizUrl'); ?>assets/css/bootstrap.min.css' rel='stylesheet'>
    <link href='<?php echo constant('quizUrl'); ?>assets/css/custom.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src='<?php echo constant('quizUrl'); ?>assets/js/jquery.min.js'></script>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2" style="opacity:0.9;">
                <div class="card px-3 pt-1 pb-0 mt-3 mb-3">
                    <!-- <h2 id="heading">OZ Protein Quiz</h2> -->
                    <span style="text-align:right;"><a href="<?php echo constant('quizUrl'); ?>" title="Home"
                            style="color:#252525;"><i class="fa fa-times"></i> </a></span>
                    <div class="col-md-12 logo_div_admin">
                        <img src="<?php echo constant('quizUrl'); ?>assets/img/logo.png" alt="logo" style="height:145px;width:243px;">
                    </div>
                    <span class="text-muted">Login - Panel</span>
                    <span class="alert-danger text-center" id="error"></span>
                    <form id="msform" method="POST">
                    <fieldset>
                            <div class="form-card col-md-12">
                                <div class="col-md-8 mx-auto">
                                <label class="fieldlabels">Email: *</label> 
                                <input type="email" name="email" placeholder="Email" required/> 
                                </div>
                                <div class="col-md-8 mx-auto">
                                <label class="fieldlabels">Password: *</label> 
                                <input type="password" name="password" placeholder="Password" required/> 
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="col-md-8 mx-auto">
                                <button type="submit" name="submit" class="btn btn-primary mt-3 mb-4" id="submit_login"
                                value="Login">Login</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='<?php echo constant('quizUrl'); ?>assets/js/bootstrap.bundle.min.js'></script>
    <?php
        if(isset($_POST)){
            if($_POST['submit'] =='Login'){
            include('../db.php');
            $email = mysqli_real_escape_string($connect,$_POST['email']);
            $password = mysqli_real_escape_string($connect,$_POST['password']);
            $sel_query = mysqli_query($connect,"SELECT * FROM `tbl_admin` WHERE `email`='$email' AND `password`='$password' AND `status`='1' AND `role`='1'");
            $num = mysqli_num_rows($sel_query);
            $row = mysqli_fetch_assoc($sel_query);
            mysqli_close($connect);
            if($num>0){
               $_SESSION['login_id'] = $row['id'];
               $_SESSION['name'] = $row['name'];
               $_SESSION['email'] = $row['email'];
               header('Location: ./data.php');
            }else{
            echo  '<script>alert("Email or Password does not match!")</script>';
            }
        }
    }
    ?>
</body>
</html>