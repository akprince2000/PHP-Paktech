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

    ?>
    
</body>
</html>