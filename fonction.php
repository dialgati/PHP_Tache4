<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction</title>
</head>
<body>
    <h3>Les fonctions en php</h3>
    <?php
        function carre($nombre) {
    return $nombre * $nombre;
    }

    $resultat = carre(5);
    echo "Le carré de 5 est : " . $resultat.'</br> </br> </br>';


    function ajouter($nombre1 = 0, $nombre2 = 0) {
    return $nombre1 + $nombre2;
    }

    $somme = ajouter(10);
    echo "La somme est : " . $somme;
    ?>
</body>
</html>