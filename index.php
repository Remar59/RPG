<?php

require 'character.php';
require 'warrior.php';
require 'hunter.php';
require 'magus.php';

$aragorn = new Warrior('Aragorn');
var_dump($aragorn);
$legolas = new Hunter('Legolas');
var_dump($legolas);
$gandalf = new Magus('Gandalf');
var_dump($gandalf);

$aragorn->attack($legolas); // Enlève X points de vie en fonction de la force (Force x 2)
$legolas->rangedAttack($gandalf); // Enlève X points de vie si le personnage est chasseur (Force x 3)
$gandalf->castSpell($aragorn); // Enlève X points de vie en fonction du mana (Mana x 3)