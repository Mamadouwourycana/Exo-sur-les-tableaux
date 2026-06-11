<?PHP
$personnes = [
    [
        "nom" => "Ali",
        "age"=> 25,
    ],
    [
        "nom" => "Fatou",
        "age"=> 22,
    ],
    [
        "nom" => "Moussa",
        "age"=> 30,
    ]
];
$sommeAge = 0;
$nombrePersonnes = count($personnes);

foreach ($personnes as $personne) {
    $sommeAge += $personne["age"];
    echo "Nom : " . $personne["nom"] . " -Âge : " . $personne["age"] . "ans\n";
    echo "- " .$personne["nom"] . " a " . $personne["age"] . " \n";
    $sommeAge += $personne["age"];
    if ($personne["age"] > $personnelaplus["age"]) {
        $personnelaplusAgée = $personne;
    }
}
echo "\n------\n";
$moyenneAge = $sommeAge / $nombrePersonnes;
echo"Nombre total de personnes : " . $nombrePersonnes . "\n";
echo "personne d'âge : " . round($moyenneAge, 1) . " ans\n";
echo " La personne la plus âgée est  : " . $personnelaplusAgée["nom"] . " (" . $personnelaplusAgée["age"] . " ans)\n";
