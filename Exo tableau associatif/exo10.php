<?php
// 1. Initialisation du tableau associatif selon la structure exacte du document
$livres = [
    [
        "titre" => "Une si longue lettre",
        "auteur" => "Mariama Bâ",
        "disponible" => true
    ],
    [
        "titre" => "L'Aventure ambiguë",
        "auteur" => "Cheikh Hamidou Kane",
        "disponible" => false
    ],
    [
        "titre" => "Les Bouts de bois de Dieu",
        "auteur" => "Ousmane Sembène",
        "disponible" => true
    ]
];
echo "<pre>";
echo "========== MENU INTERACTIF DE LA BIBLIOTHÈQUE ==========\n";
echo "1. Afficher tous les livres.\n";
echo "2. Afficher uniquement les livres disponibles.\n";
echo "3. Compter le nombre total de livres.\n";
echo "4. Ajouter un nouveau livre au tableau.\n";
echo "5. Quitter\n";
echo "========================================================\n\n";

$choix = 1; 

echo "Action choisie : Option $choix\n\n";

switch ($choix) {
    case 1:
        echo "--- LISTE DE TOUS LES LIVRES ---\n";
        foreach ($livres as $index => $livre) {
            $statut = $livre["disponible"] ? "Disponible" : "Emprunté";
            echo ($index + 1) . ". Tite : " . $livre["titre"] . " | Auteur : " . $livre["auteur"] . " | Statut : $statut\n";
        }
        break;

    case 2:
        echo "--- LIVRES DISPONIBLES UNIQUEMENT ---\n";
        $compteurDispo = 1;
        foreach ($livres as $livre) {
            if ($livre["disponible"] === true) {
                echo $compteurDispo . ". Titre : " . $livre["titre"] . " | Auteur : " . $livre["auteur"] . "\n";
                $compteurDispo++;
            }
        }
        break;

    case 3:
        echo "--- NOMBRE TOTAL DE LIVRES ---\n";
        $total = count($livres);
        echo "La bibliothèque contient actuellement : " . $total . " livre(s).\n";
        break;

    case 4:
        echo "--- AJOUT D'UN NOUVEAU LIVRE ---\n";
        // Création du nouveau livre à ajouter
        $nouveauLivre = [
            "titre" => "Le Mandat",
            "auteur" => "Ousmane Sembène",
            "disponible" => true
        ];
        
        $livres[] = $nouveauLivre;
        echo "Le livre '" . $nouveauLivre["titre"] . "' a été ajouté avec succès !\n\n";
        
        // Affichage du tableau mis à jour pour vérification
        echo "Nouvelle liste complète :\n";
        foreach ($livres as $index => $livre) {
            $statut = $livre["disponible"] ? "Disponible" : "Emprunté";
            echo ($index + 1) . ". " . $livre["titre"] . " (" . $livre["auteur"] . ") - $statut\n";
        }
        break;

    case 5:
        echo "Session terminée. Merci d'avoir utilisé la bibliothèque.\n";
        break;

    default:
        echo "Option invalide. Veuillez choisir un nombre entre 1 et 5.\n";
        break;
}

echo "</pre>";
?>