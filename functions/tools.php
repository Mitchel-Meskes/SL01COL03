<?php 

/**
 * Een functie waarbij de kleur van de pagina
 * bepaald wordt op basis van tijd
*/
function changeColorTime() {
    
// The currentTime veriable gets the current time by the region that is selected.
$currentTime = date_default_timezone_set('Europe/Amsterdam');

// Used to check if the time is higher or lower or equel to 12.
$pmOrAm = 12;

// Used to set the background color based on time.
if ($pmOrAm <= $currentTime){
    $backgroundColor = 'green';
}else {
    $backgroundColor = 'black';
}
?>

<body>
    <style>
        body{
        background-color: <?php print_r($backgroundColor)?>;
        }
    </style>
</body>

<?php
}


/**
 * Een functie waarbij de waarde van een variable getoond wordt, hoeveel het
 * er zijn en welk type het is.
 */

 function charachterCounterType($showContained) {
    echo $showContained . '<br>';
    echo strlen($showContained) . '<br>';
    echo gettype($showContained) . '<br>';
}

/**
 * Een functie waarbij een array random een andere waarde toont vanuit de array
 */

 function arrayShuffle($randominput) {
    echo $randominput[array_rand($randominput)];
 }