<?PHP
$etudiants = [
   ["nom" => "Ali", "note" => 14.2],
   ["nom" => "Kadiatou", "note" =>12.5],
   ["nom" => "Mamadou", "note" => 10],
   ["nom" => "Aminata", "note" => 16.8],
   ["nom" => "Moussa", "note" => 9.5]
];
$sommeNotes = 0;
$nombreEtudiants = count($etudiants);
$meilleursEtudiant = $etudiants[0];
echo "Liste des étudiants et leurs notes :\n";
foreach ($etudiants as $etudiant) { 
    $sommeNotes += $etudiant["note"];
    echo "Nom : " . $etudiant["nom"] . " - Note : " . $etudiant["note"] . "\n";
    if ($etudiant["note"] >= 10 ) 
        echo "- " . $etudiant["nom"] . " : ". $etudiant["note"] . " /20\n";
        }
$moyenneNotes = $sommeNotes / $nombreEtudiants;
echo "Nombre total d'étudiants : " . $nombreEtudiants . "\n";
echo "Moyenne des notes du groupe : " . round($moyenneNotes, 1) . "\n";
