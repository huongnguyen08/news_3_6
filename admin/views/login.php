<?php
ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:42:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="public/img/favicon.html">

    <title>Đăng nhập admin</title>

    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="public/css/owl.carousel.css" type="text/css">

    <link href="public/css/style-responsive.css" rel="stylesheet" />
    <link href="public/css/login-form.css" rel="stylesheet">

</head>
<?php
if(isset($_POST['btnLogin'])){
    $c = new AdminLoginController;
    $c->postLogin();
}


?>
  <body>
    <div class="container">
        <div class="card card-container">
        
            <img id="profile-img" class="profile-img-card" src="public/img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="#">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>

                <input type="password" name="password" class="form-control" placeholder="Password" required>
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="btnLogin">Đăng nhập</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    
  </body>

<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:43:32 GMT -->
</html>
