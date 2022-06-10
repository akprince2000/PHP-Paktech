<?php
if (isset($_POST) & !empty($_POST)) {
    print_r($_POST);
    // PHP Form Validations
    if (empty($_POST['fname'])) {
        echo "First Name Field is Required<br>";
    }
    if (empty($_POST['lname'])) {
        echo "Last Name Field is Required<br>";
    }
    if (empty($_POST['email'])) {
        echo "E-Mail Field is Required<br>";
    }
    if (empty($_POST['gender'])) {
        echo "Gender Field is Required<br>";
    }
    if (empty($_POST['age'])) {
        echo "Age Field is Required<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PHP Forms for Developers</title>
    <!-- Bootstrap Core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">PHP Forms for Developers</h3>
                        </div>
                        <div class="panel-body">

                            <form role="form" method="post">

                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" name="fname" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" name="lname" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-Mail" name="email" type="email">
                                    </div>
                                    <div class="form-group" class="radio">
                                        <input type="radio" name="gender" id="optionsRadios1" value="male"> Male
                                        <input type="radio" name="gender" id="optionsRadios1" value="female"> Female
                                    </div>
                                    <div class="form-group">
                                        <select name="age" class="form-control">
                                            <option value="">Select Your Age</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                        </select>
                                    </div>
                                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Submit" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="./dist/js/sb-admin-2.js"></script>
</body>

</html>