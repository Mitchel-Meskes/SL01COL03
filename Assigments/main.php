<?php 

$group = [
    "Mitchel" => [
        "codeExp" => ["Php", "Laravel"],
        "profile_url" => "20",
    ],
    "Renas" => [
        "codeExp" => ["Html", "C#"],
        "profile_url" => "20",
    ],
    "Sadek" => [
        "codeExp" => ["Databases", "Css"],
        "profile_url" => "20",
    ]
];

// Displayed de studenten.
function displayTeam($group) {
    foreach ($group as $name => $info) {
        echo "<a href='{$info['profile_url']}'>$name</a><br>";
    }
}

// Displayed de profiel.
function displayProfile($name, $info) {
    echo "<h1>$name</h1>";
    echo "Onderwerp: " . implode(", ", $info['codeExp']);

}
