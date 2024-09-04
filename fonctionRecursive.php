<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction Récursive</title>
</head>
<body>
    <h3>Fonction Récursive</h3>
    <?php
       function factorielle($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorielle($n - 1);
    }
}

$resultat = factorielle(5);
echo "La factorielle de 5 est : " . $resultat;
?>
</body>
</html>