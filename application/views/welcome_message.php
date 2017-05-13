<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Admin LTE CRUD  </title>
        <base href="<?php echo base_url();?>" />
        <base src="<?php echo base_url();?>" />

        <link rel="shortcut icon" href="assets/dashboard/dist/img/ico.png">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500" type="text/css" media="all">
        <link rel="stylesheet" href="assets/login/bootstrap/css/bootstrap.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/login/font-awesome/css/font-awesome.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/login/css/form-elements.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/login/css/style.css" type="text/css" media="all">
 </head>
<body>
        <div class="top-content">
                <div class="container">
                           <img src="assets/login/img/log.png" class="barong" >
                        <br>
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>WELCOME TO ADMINISTRATOR</h3>
                                <p>Enter your username and password to log on</p>
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-key"></i>
                            </div>
                            </div>
                            <div class="form-bottom">
                         <form action="<?php echo base_url('Dashboard/auth/login'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="username" placeholder="Username..." required class="form-username form-control" id="form-username">
                              </div>
                              <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="password" placeholder="Password..." required class="form-password form-control" id="form-password">
                              </div>
                              <button type="submit" name="submit" class="btn">Sign in</button>
                          </form>
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <div class="description">
                              <p style="font-size:12px;">
                                 Copyright © 2017. Admin LTE CRUD | All Right Reserved.
                              </p>
                            </div>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/login/js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="assets/login/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/login/js/jquery.backstretch.min.js" type="text/javascript"></script>
        <script src="assets/login/js/scripts.js" type="text/javascript"></script>
</body>
</html>