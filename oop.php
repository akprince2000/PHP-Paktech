<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>

<body>

    <!-- Funcrtion  -->
    <?php

    class MyClass1
    {
        public $x, $y, $z;

        public function Calclutaion()
        {
            $this->z = $this->x + $this->y;
            return $this->z;
        }
    }

    $prince = new MyClass1();
    $prince->x = 125;
    $prince->y = 125;

    echo $prince->Calclutaion();


    ?>






    <!-- Function Construct  -->
    <?php

    class MyClass
    {
        public $x, $y, $z;

        public function __construct($a, $b)
        {
            $this->x = $a;
            $this->y = $b;
        }


        public function Calclutaion()
        {
            $this->z = $this->x + $this->y;
            return $this->z;
        }
    }

    $prince = new MyClass(154, 287);
    echo $prince->Calclutaion() . "</br>";

    $prince = new MyClass(194, 187);
    echo $prince->Calclutaion();
    ?>

</body>

</html>