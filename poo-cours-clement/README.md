# La Programmation Orientée Objet (POO) en PHP

> _La programmation orientée objet (POO), ou programmation par objet, est un paradigme de programmation informatique. Elle consiste en la définition et l'interaction de briques logicielles appelées objets ; un objet représente un concept, une idée ou toute entité du monde physique, comme une voiture, une personne ou encore une page d'un livre. Il possède une structure interne et un comportement, et il sait interagir avec ses pairs. Il s'agit donc de représenter ces objets et leurs relations ; l'interaction entre les objets via leurs relations permet de concevoir et réaliser les fonctionnalités attendues, de mieux résoudre le ou les problèmes. Dès lors, l'étape de modélisation revêt une importance majeure et nécessaire pour la POO. C'est elle qui permet de transcrire les éléments du réel sous forme virtuelle.<br>Source : [Wikipédia](https://fr.wikipedia.org/wiki/Programmation_orient%C3%A9e_objet)_

## Documentation

- les classes et objets : https://www.php.net/manual/fr/language.oop5.php
- la syntaxe de base des classes : https://www.php.net/manual/fr/language.oop5.basic.php
- les propriétés (ou attributs ou variables) : https://www.php.net/manual/fr/language.oop5.properties.php
- les constantes dans les classes : https://www.php.net/manual/fr/language.oop5.constants.php
- les constructeurs : https://www.php.net/manual/fr/language.oop5.decon.php
- la visibilité des éléments (public, private, protected) : https://www.php.net/manual/fr/language.oop5.visibility.php
- l'héritage : https://www.php.net/manual/fr/language.oop5.inheritance.php
- la portée statique : https://www.php.net/manual/fr/language.oop5.paamayim-nekudotayim.php et https://www.php.net/manual/fr/language.oop5.static.php
- les classes abstraites : https://www.php.net/manual/fr/language.oop5.abstract.php
- les interfaces : https://www.php.net/manual/fr/language.oop5.interfaces.php
- le mot-clé final : https://www.php.net/manual/fr/language.oop5.final.php
- les autoloaders : https://www.php.net/manual/fr/language.oop5.autoload.php
- les namespaces : https://www.php.net/manual/fr/language.namespaces.rationale.php

## Les formations

- https://grafikart.fr/formations/programmation-objet-php
- https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php
- https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/introduction-programmation-orientee-objet/
- https://www.w3schools.com/php/php_oop_what_is.asp

## Pourquoi la POO ?
La POO est le fait d’organiser le code de son projet en objet. En PHP, et comme dans d’autres langages, les objets sont représentés avec des classes.

Un objet représente quelque chose (une personne, une voiture, etc…) et possède son propre fonctionnement et ses interactions.

Finalement, il faut voir les objets comme des types au même titre que les types communs commes String, Int ou Array.

Les classes possèdent des attributs, qui sont en fait des variables, et des méthodes, qui sont des fonctions.

Pour utiliser une classe, on doit l’instancier avec le mot-clé `new`.

Dans la classe, on crée un constructeur `__construct` qui va alimenter les attributs (ou variables) de la classe et faire éventuellement d’autres choses, comme appeler des méthodes qu’elle contient.

Une classe peut être héritée d’une autre classe. Cela signifie qu’elle héritera des attributs et des méthodes de sa classe parente.

On peut déclarer dans les classes des variables et des méthodes avec différentes accessibilités : 
- publiques avec le mot-clé `public` 
- privées avec le mot-clé `private`
- protégées avec le mot-clé `protected`

Les méthodes peuvent également être déclarées statiques avec le mot-clé `static`. Cela veut dire qu’il n’y a pas besoin d’instancier la classe qui contient la méthode pour utiliser la méthode en question.
