<?php

class Pokemon {

    public $Name;
    public $Type;
    public $HP;
    public $Attack1;
    public $Attack2;
    public $Weakness;
    public $Resistance;

    public function __construct($Name, $Type, $HP, $Attack1, $Attack2, $Weakness, $Resistance)
    {
        $this->Name = $Name;
        $this->Type = $Type;
        $this->HP = $HP;
        $this->Attack1 = $Attack1;
        $this->Attack2 = $Attack2;
        $this->Weakness = $Weakness;
        $this->Resistance = $Resistance;
    }

    public function __toString() {
        return json_encode($this);
    }

    public function Pokemon1()
    {
        echo '<div class="yoink">' . $this->Name . '<br>' . $this->Type . '<br>' . '<input type="text" id="HPPokemon1" value="' . $this->HP  . '" disabled>' . '<input type="text" id="myText" value="' . $this->Weakness  . '" disabled>' . $this->Resistance .'</div>';
    }

    public function Pokemon2()
    {
        echo '<div class="yoinker">' . $this->Name . '<br>' . $this->Type . '<br>' . '<input type="text" id="HPPokemon2" value="' . $this->HP  . '" disabled>' . '<input type="text" id="myText2" value="' . $this->Weakness  . '" disabled>' . $this->Resistance .'</div>';
    }

}