<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Paktech</title>
</head>

<body>
    <!-- php variable scope -->
    <?php

    $age = 20;

    function test()
    {
        global $age;
        $a = 10;
        echo $a . "</br>";
        echo $age;
    }
    test();



    ?>


</body>

</html>