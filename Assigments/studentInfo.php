<?php 

// linkt de bestanden aan elkaar
include 'main.php'; 

// Vraagt aan de hand van de functie voor de studenten hun informatie en hij checkt of de varibale bestaan.
if (isset($_GET['name'])) {

    $name = $_GET['name'];

    if (array_key_exists($name, $info)) {
        displayProfile($name, $group[$name]);
    } else {
        echo 'Student niet gevonden.';
    }

} else {
    echo 'Kies een student.';
}
