<?php require_once("Database.class.php") ?>
<?php $bdd = new Database("localhost", "villes_france", "root", "");
$database = $bdd->connect();
var_dump($bdd);
var_dump($database);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo-database-poo</title>
</head>

<body>
    <h2>Db-exo</h2>

    <?php
    $request = $database->prepare("SELECT * FROM departement");
    $request->execute();
    $results = $request->fetchAll();

    foreach ($results as $result) {

        echo "<p> $result[3] </p>";
    }
    ?>

</body>

</html>