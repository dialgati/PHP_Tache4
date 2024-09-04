<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau Associatif</title>
</head>
<body>
    <h3>Tableau Associatif</h3>
    <?php
        $personne = array(
    "nom" => "Abraham",
    "age" => 18,
    "ville" => "Boune",
    "profession" => "Développeur"
);
 
foreach ($personne as $cle => $valeur) {
    echo $cle . " : " . $valeur . "<br>";
}

    ?>
</body>
</html>