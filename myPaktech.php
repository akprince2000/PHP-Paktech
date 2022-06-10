<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Paktech</title>
</head>

<body>

    <?php
    $cars = array(
        array("Prince", "22", "2000"),
        array("Rokey", "15", "2024"),
        array("Biplob", "15", "2015")
    );
    for ($row = 0; $row < 3; $row++) {
        echo "<p>Row Number <b style=color:red> $row</b></p>";
        echo "<ul>";

        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }

        echo "</ul>";
    }




    ?>


</body>

</html>