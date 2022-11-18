<?php require_once("Villes.class.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo-Villes</title>
</head>
<?php
$lyon = new Ville("Lyon", "Rhône");
$paris = new Ville("Paris", "Paris");
$marseille = new Ville("Marseille", "Bouches-du-Rhône");
$bordeaux = new Ville("Bordeaux", "Gironde");

?>

<body>
    <p><?= $lyon->displayCity(); ?></p>
    <p> <?= $paris->displayCity(); ?></p>
    <p> <?= $marseille->displayCity(); ?></p>
    <p> <?= $bordeaux->displayCity(); ?></p>
</body>