<?php require_once("Personne.class.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php $thomas = new Personne("Thomas", "Debrand", "789 Ouais Street");
$yoann = new Personne("Yoann", "Rey", "123 West Coast");
$nawel = new Personne("Nawel", "Grine", "456 Vert Street");
?>

<body>
    <p> <?= ($thomas->getInfos()); ?> </p>
    <p> <?= $yoann->getInfos(); ?> </p>
    <p><?= $nawel->getInfos() ?></p>
    <?php ($thomas->setInfos("Toto", "Chad", "MIKE Street"));
    $yoann->setInfos("Yo", "Le Roi", "321 West Coast");
    $nawel->setInfos("Mère", "Nawel", "God Bless Street")
    ?>
    <p>Mais en fait, leur vraies infos confidentielles</p>
    <p><?php echo $thomas->getInfos(); ?></p>
    <p><?php echo $yoann->getInfos(); ?></p>
    <p><?php echo $nawel->getInfos(); ?></p>
</body>

</html>