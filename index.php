<?php
use classes\Tools;

require 'functions/tools.php';
require 'classes/Tools.php';
require 'views/index.view.php';  

/**
 * Schrijf een functie waarbij de kleur van de pagina
 * bepaald wordt op basis van tijd
*/

changeColorTime();

/**
 * Schrijf een functie waarbij de waarde van een variable getoond wordt, hoeveel het
 * er zijn en welk type het is.
 */

charachterCounterType($showContained);

/**
 * Schrijf een functie waarbij een array random een andere waarde toont vanuit de array
 */

$studenten = ['Mitchel', 'Sadek', 'Renas'];
arrayShuffle($studenten);
 
/**
 * Verplaats alles naar een function directory, en require de function file.
 */

$tools = new Tools();
$tools->dd('String');

/**
 * Haal de presentatie van een variabele binnen
 */
