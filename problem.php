<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problem Solve</title>
</head>


<body>
    <?php

    $numbers = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

    rsort($numbers);
    $arrayLength = min($numbers);

    for ($i = 1; $i <= 5; $i++) {
        echo $numbers[$i + $i] . "<br>";
    }

    ?>

</body>

</html>