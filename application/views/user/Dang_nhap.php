
<html>

<head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>
    <link rel="../stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="../stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/dang-nhap.css">
    <script src="../bootstrap/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link href="../public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="../public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
        <link href="../public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../public/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="./boostrap/js/boostrap.min.css">
        <!-- ========================================================================================== -->
        <!-- JAVACRIPT -->
        <!-- ========================================================================================== -->
        <script src="../public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="../public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
        <script src="../public/js/carousel/owl.carousel.js" type="text/javascript"></script>
        <script src="../public/js/main.js" type="text/javascript"></script>
        <script type="text/javascript" src="../boostrap/js/boostrap.min.js"></script>
</head>

<body>
    <div id="header-wp">
                <?php require "include/header-top.php" ?>
                <hr>
                <?php require "include/header.php" ?>
                <?php require "include/navbar.php" ?>
                </div>
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-block">
                                <div class="mb-4">
                                    <h4><strong>SIGN IN</strong></h4>
                                    <p class="mb-4">Bạn có thể tạo tài khoản đăng nhập qua Facebook hoặc Google.</p>
                                </div>
                                <form action="#" method="post">
                                    <div class="form-group first">
                                        <label for="username" placeholder="Username"></label>
                                        <input type="text" class="form-control" id="username">

                                    </div>
                                    <div class="form-group last mb-4">
                                        <label for="password" placeholder="Password"></label>
                                        <input type="password" class="form-control" id="password">

                                    </div>

                                    <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary btn-login">

                                    <span class="d-block text-center my-4 text-muted"> or sign in with</span>

                                    <div class="social-login text-center">
                                        <a href="#" class="facebook">
                                            <span class="icon-facebook mr-3"><i class="fa fa-facebook" aria-hidden="true"></i></span> 
                                        </a>
                                        <a href="#" class="google">
                                            <span class="icon-google mr-3"><i class="fa fa-google" aria-hidden="true"></i></span> 
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
            require "include/footer.php"
            ?>
</body>
</html>
