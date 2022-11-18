<?php

class StaticDeclaration
{
    public static $staticVar = "Variable statique";

    public static function staticMethod ()
    {
        echo "Je suis une méthode statique qui affiche une " . self::$staticVar . "<br>";
    }
}