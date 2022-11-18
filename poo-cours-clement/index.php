<?php
// Autoloader : cette fonction charge (ou inclue) automatiquement les fichiers où sont contenues les classes.
// NB: include peut être remplacé par require
spl_autoload_register(function ($class) {
    include $class . '.php';
});

// Nous utilisons déjà les classes natives de PHP comme DateTime
$maDate = new DateTime();
var_dump($maDate);

// Mais nous pouvons aussi créer nos propres classes pour palier au fait que les classes existantes n'ont pas exactement (voir pas du tout) le comportement que nous voudrions avoir lors du développement d'une application
// En effet, dans les classes existantes, il n'existe pas de classe Personnage dont on pourrait se servir pour créer de nouveau personnage dans notre jeu vidéo en ligne par exemple

// Instanciation de la classe avec le mot-clé new, que l'on enferme dans une variable pour pouvoir réutiliser l'instanciation plus facilement
$gandalf = new Personnage();
var_dump($gandalf);

// A partir du moment où l'on a instancié la classe, on peut accéder à toutes ses variables et ses méthodes

// On peut accéder à un attribut (ou variable) de la classe via la flèche ->
$gandalf->pointsDeVie;
var_dump($gandalf->pointsDeVie);

$gandalf->nom = "Gandalf";
var_dump($gandalf->nom);

// On peut accéder à une méthode (ou fonction) de la classe également via la flèche ->
$gandalf->perteDePointsDeVie();

// Si on réaffiche la variable de points de vie, alors elle a perdu 10 points de vie
var_dump($gandalf->pointsDeVie);

$magicien = new Personnage2("Gandalf");
var_dump($magicien->getNom());
$magicien->setNom("Sarumane");
var_dump($magicien);

$accessVar = new Acces();
$accessVar->showVarsInPublic(); // Fonctionne car la méthode est publique
//$accessVar->showVarsInPrivate(); // Ne fonctionne pas car la méthode est privée et donc elle ne peut être appelée seulement dans la classe où elle a été déclarée
//$accessVar->showVarsInProtected(); // Ne fonctionne pas car la méthode est protégée et donc elle ne peut être appelée seulement dans la classe où elle a été déclarée et aussi dans les classes dérivées (héritage)
echo $accessVar->publicVar; // Fonctionne car la variable est publique
//echo $accessVar->privateVar; // Ne fonctionne pas car la variable est privée et donc accessible seulement dans la classe où elle a été déclarée
//echo $accessVar->protectedVar; // Ne fonctionne pas car la variable est protégée et donc accessible seulement dans la classe où elle a été déclarée et aussi dans les classes dérivées (héritage)
echo "<br>";

// Les méthodes et attributs statiques n'ont pas besoin que la classe soit instanciée pour être appelés
echo StaticDeclaration::$staticVar;
echo "<br>";
StaticDeclaration::staticMethod();

$voiture = new Car("Mercedes", "Rouge", 5);
echo "La voiture roule à " . $voiture->getKmh() . "km/h.<br>";
var_dump($voiture);
$voiture->rouler();
echo "La voiture roule à " . $voiture->getKmh() . "km/h.<br>";
var_dump($voiture);
$voiture->rouler();
echo "La voiture roule à " . $voiture->getKmh() . "km/h.<br>";
var_dump($voiture);
$voiture->freiner();
echo "La voiture roule à " . $voiture->getKmh() . "km/h.<br>";
var_dump($voiture);