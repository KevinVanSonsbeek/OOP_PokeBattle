<?php

require "Pokemon.php";
require "Pikachu.php";
require "Charmeleon.php";
require "Attack.php";
require "Resistance.php";
require "Weakness.php";



$charmeleon = new Charmeleon();

$pikachu = new Pikachu();

$pikachu->attack($charmeleon, $pikachu->attacks[1]);

$charmeleon->attack($pikachu, $charmeleon->attacks[1]);

