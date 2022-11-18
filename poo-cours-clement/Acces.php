<?php

/**
 * Exemple de classe avec les différents accesseurs :
 * - public
 * - private
 * - protected
 */
class Acces
{
    public $publicVar = "Variable publique";
    private $privateVar = "Variable privée";
    protected $protectedVar = "Variable protégée";

    public function showVarsInPublic ()
    {
        echo $this->publicVar . "<br>";
        echo $this->privateVar . "<br>";
        echo $this->protectedVar . "<br>";
    }

    private function showVarsInPrivate ()
    {
        echo $this->publicVar . "<br>";
        echo $this->privateVar . "<br>";
        echo $this->protectedVar . "<br>";
    }

    protected function showVarsInProtected ()
    {
        echo $this->publicVar . "<br>";
        echo $this->privateVar . "<br>";
        echo $this->protectedVar . "<br>";
    }
}