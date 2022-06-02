<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Procoder</title>
</head>

<body>


    <?php
    // echo "Allah Mohan" . "<br>";
    /*
     //php Length
      echo strlen ('I Love Bangladesg' . "<br>");

      //php wordcount
      echo str_word_count("I love my Country");

      //php text revers
        echo strrev ('I love to eat pizza'); 
        //php text are position
       $chack = strpos('I love to eat pizza','to');
        var_dump($chack);

        //php sentence word replace/word-change
        echo str_replace ('Pizza','Bargar','I Love to eat Pizza')

        */


    //    $t = date("H");

    // if ($t < "20") {
    //   echo "Have a good day!";
    // }
    // $a = 9;
    // while ($a <= 10) {
    //     echo "Alla Mohan" . "</br>";
    //     $a++;
    // }

    function test_name($name, $age, $district)
    {
        echo "My Name is <b>$name</b>, His age is <b>$age</b> and District is <b>$district</b> </br>";
    }
    test_name("Prince", 18, "Jhenaidah");
    test_name("Rakib", 20, "Dhaka");


    ?>


</body>

</html>