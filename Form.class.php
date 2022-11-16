<?php

class Form
{

    public string $nameAttr;
    public string $methodAttr;
    public string $actionAttr;

    public function __construct($nameAttr, $methodAttr, $actionAttr)
    {
        $this->nameAttr = $nameAttr;
        $this->methodAttr = $methodAttr;
        $this->actionAttr = $actionAttr;
    }

    public function generer()
    {
        echo "<form name='$this->nameAttr' method='$this->methodAttr' action='$this->actionAttr'>";
    }
    public function ajouterChamp($inputType, $inputName, $label, $placeholder)
    {
        echo "<label for =$inputName>$label</label>";
        echo "<input type=$inputType name =$inputName placeholder=$placeholder>";
    }
    public function terminer()
    {
        echo "</form>";
    }
}
