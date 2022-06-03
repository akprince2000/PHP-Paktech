 <?php
    if (isset($_POST['btn'])) {
        $userName = $_POST['user_name'];
        $userEmail = $_POST['email'];
        $userPassword = $_POST['password'];
    }

    ?>










 <h2>User Name : <?php if (isset($userName)) {
                        echo $userName;
                    } ?></h2>
 <h2>Email : <?php if (isset($userEmail)) {
                    echo $userEmail;
                } ?></h2>
 <h2>Password : <?php if (isset($userPassword)) {
                    echo $userPassword;
                } ?></h2>