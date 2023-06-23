<!DOCTYPE html>
<html>

<head>
    <title>navbar example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>


</head>

<body>

    <div class="navbar navbar-inverse" style="background-color:green;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span
                                class="icon-bar"></span><span class="icon-bar"></span><span
                                class="icon-bar"></span></button>
                        <a href="#" class="navbar-brand">GROUP.COM</a>
                    </div>

                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Welcome</a></li>
                            <li><a href="#">Welcome</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <form action="" class="navbar-form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" name="search" id=""
                                                placeholder="Search Anything Here..." class="form-control">
                                            <span class="input-group-addon"><span
                                                    class="glyphicon glyphicon-search"></span></span>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href=""><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span
                                        class="caret"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm-11">

                <div class="card">
                    <div class="card-header border border-primary bg-info"
                        style="padding-top: 10px;padding-bottom:10px;padding-left:15px; font-size:20px;font-weight:bold">
                        Fill up priliminery from</div>
                    <div class="card-body " style="padding-left: 15px; margin-top:15px">
                        <div class="text-center">
                            <h5 style="color: red;">

                                ( * ) Indicates required field.
                            </h5>
                            <h5 style="color: red;">Please note that this is not the final application. Candidate has to
                                fill up
                                application form after successful payment to get Admit Card. </h5>

                        </div><br><br>

                        <form action="" method="POST">
                            <div class="mt-2 pb-2">

                                <input type="name" name="users_first_name" class="form-control"
                                    placeholder="Your First Name" value="<?php if (isset($_POST['submit'])) {
																																				echo $users_first_name;
																																			} ?>">
                                <span class="text-danger"><?php if (isset($_POST['submit'])) {
																	echo $emptymsg1;
																} ?></span>
                            </div>
                            <br>
                            <div class="mt-2 pb-2">

                                <input type="name" name="users_last_name" class="form-control"
                                    placeholder="Your Last Name" value="<?php if (isset($_POST['submit'])) {
																																			echo $users_last_name;
																																		} ?>">
                                <span class="text-danger"><?php if (isset($_POST['submit'])) {
																	echo $emptymsg2;
																} ?></span>
                            </div><br>
                            <div class="mt-2 pb-2">

                                <input type="email" name="users_email" class="form-control"
                                    placeholder="Please use a valid Email ID. All Admission Information will Send to this Email Address"
                                    value="<?php if (isset($_POST['submit'])) {
																																			echo $users_email;
																																		} ?>">
                                <span class="text-danger"><?php if (isset($_POST['submit'])) {
																	echo $emptymsg3;
																} ?></span>
                            </div><br>

                            <div class="mt-2 pb-2">


                                <input type="gr-phone" name="gr-phone" class="form-control" placeholder="
Please use a valid Mobile Numbser. All Admission Information will Send to this Mobile Number" value="<?php if (isset($_POST['submit'])) {
																																			echo $users_email;
																																		} ?>">
                                <span class="text-danger"><?php if (isset($_POST['submit'])) {
																	echo $emptymsg3;
																} ?></span>
                            </div><br>
                            


                                <div class="form-group mb-0">
                                    <button name="submit" class="btn btn-primary btn-block">Register</button>
                                </div>

                            </form>

                            <div class="card-footer" style="margin-bottom: 120px; margin-top:20px">
                                <a href="admission_from.php"><button type="button" class="btn btn-danger">I have read &
                                        agree</button></a>

                            </div>
                    </div>

                </div>
                <div class="col-sm-1"></div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        </div>

</body>

</html>