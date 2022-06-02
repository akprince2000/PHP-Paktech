<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP online</title>
</head>

<body>


    <?php
    //cgpa Calclutor

    $marks = -1;
    if ($marks >= 80 && $marks <= 100) {
        echo "<h1> A+ </h1>";
    } elseif ($marks >= 70 && $marks <= 79) {
        echo "<h1> A </h1>";
    } elseif ($marks >= 70 && $marks <= 79) {
        echo "<h1> A- </h1>";
    } elseif ($marks >= 60 && $marks <= 69) {
        echo "<h1> B </h1>";
    } elseif ($marks >= 50 && $marks <= 59) {
        echo "<h1> B- </h1>";
    } elseif ($marks >= 40 && $marks <= 49) {
        echo "<h1> C </h1>";
    } elseif ($marks >= 33 && $marks <= 39) {
        echo "<h1> D </h1>";
    } elseif ($marks >= 0 && $marks <= 32) {
        echo "<h1> F </h1>";
    } else {
        echo "<h1>Invalide Number</h1>";
    }

    ?>


</body>

</html>