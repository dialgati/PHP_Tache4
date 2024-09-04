<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>
<body>
    <h3>Les tableaux en PHP</h3>
    <?php
        $fruits = array("Pomme", "Banane", "Orange", "Mangue", "Fraise");

        foreach ($fruits as $fruit) {
       echo $fruit . "<br>";
      }

    ?>
</body>
</html>