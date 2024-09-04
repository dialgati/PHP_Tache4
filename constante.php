<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constante</title>
</head>
<body>
    <h3>Les constantes en PHP</h3>
    <?php
     define("PI", 3.14159);
        function calculerCirconference($rayon) {
       return 2 * PI * $rayon;
    }

       $circonference = calculerCirconference(7);
      echo "La circonférence du cercle est : " . $circonference;

    ?>
</body>
</html>