<?php 

// linkt de bestanden aan elkaar
include 'main.php';

// Laat de studenten zien en geefdt een lonk om te clicken.
foreach ($group as $name => $info) {
    echo "<a href='profile.php?name=$name'>$name</a><br>";
}
?>
