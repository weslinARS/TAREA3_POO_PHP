<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
class Perro
    {
        public $nombre;
        public $edad_real;
        function __construct($nombre, $edad_real)
        {
            $this->nombre = $nombre;
            $this->edad_real = $edad_real;
        }
        function Edad_Canina()
        {
            echo "su mascota tiene " . $this->edad_real * 7;
        }
    }
    $perro1 = new Perro('riley', 2);
    ?>
    <p>
        <?php $perro1->Edad_Canina();
        ?>
    </p>

</body>

</html>