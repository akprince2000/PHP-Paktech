<?php
if (isset($_POST['btn'])) {
    $userName = $_POST['user_name'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP online</title>
</head>

<body>

    <br><br><br>
    <h2>User Name : <?php if (isset($userName)) {
                        echo $userName;
                    } ?></h2>
    <h2>Email : <?php if (isset($userEmail)) {
                    echo $userEmail;
                     } ?></h2>
    <h2>Password : <?php  if(isset($userPassword)){
                    echo $userPassword;
                    } ?></h2>

    <form action="" method="POST">
        </br>
        <label>User Name : </label>
        <input type="text" name="user_name" id="">
        </br></br>
        <label>Email :</label>
        <input type="email" name="email" id="">
        </br></br>
        <label>Password :</label>
        <input type="password" name="password" id="">
        </br></br>
        <input type="submit" value="Submit Valu" name="btn">
    </form>


</body>

</html>