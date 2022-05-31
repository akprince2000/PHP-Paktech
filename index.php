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
      //Object
      class Phone{
          public $model;
          function phoneModel ($number){
              global $model;
              $model = $number;
              echo "This is $model </br>";
          }
      }
        
      $apple = new phone;
      $apple->phoneModel('iPhone 12');

      $samgsamg = new phone;
      $samgsamg->phoneModel("alta 10");

    ?>
    
</body>
</html>