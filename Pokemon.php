<?php

/**
 * Class Pokemon
 */
class Pokemon
{

    public $name;
    public $energyType;
    public $hitPoints;
    protected $hp;
    public $weakness;
    public $resistance;
    public $attacks;


    public function __construct($type, $name, $hitpoints, $weakness, $resistance, $attacks)
    {
        $this->energyType = $type;
        $this->name = $name;
        $this->hitPoints = $hitpoints;
        $this->hp = $hitpoints;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->attacks = $attacks;
    }

    /**
     * Attack pokemon with move
    */
    public function attack($target, $attack)
    {
        echo "<div style='border: 1px solid black'>";
        echo "<p><b>" . $this->name . "</b> attacked <b>" . $target->name . "</b> with the move <b>" . $attack->name . "</b></p>";
        $target->defend($this, $attack);
    }

    /**
     * Defend pokemon
     */
    public function defend($attacker, $attack) {

        $total_damage = $attack->damage;

        //Loop through weaknesses
        foreach ($this->weakness as $weaknes) {
            if ($attacker->energyType == $weaknes->energy_type) {
                $total_damage = $total_damage * $weaknes->value;
            }
        }

        //Loop through resistances
        foreach ($this->resistance as $resistance) {
            if($attacker->energyType == $resistance->energy_type) {
                print_r($resistance);
                $total_damage = $total_damage - $resistance->value;
            }
        }


        echo "<p> It dealt " . $total_damage . " damage!</p>";

        $this->take_damage($total_damage);
    }

    /**
    * Make pokemon take damage
    * @param $amount
    */
    protected function take_damage($amount) {

        $this->hp = $this->hp - $amount;
        echo "<p>" . $this->name . " has " . $this->get_hitpoints() . " hp left from the " . $this->hitPoints . "</p>";
        echo "</div>";
    }

    /**
    * Get pokemons HP
    */
    public function get_hitpoints() {
        return $this->hp;
    }



}
