<?PHP
do {
    // Affichage du menu
    echo "\n--- MENU INTERACTIF ---\n";
    echo "1. Afficher tous les livres.\n";
    echo "2. Afficher uniquement les livres disponibles.\n";
    echo "3. Compter le nombre total de livres.\n";
    echo "4. Ajouter un nouveau livre au tableau.\n";
    echo "5. Quitter\n";
    
    // Récupération du choix de l'utilisateur
    $choix = (int)readline("Votre choix (1-5) : ");
    echo "\n";

    switch ($choix) {
        case 1:
            echo "=== Liste de tous les livres ===\n";
            foreach ($livres as $index => $livre) {
                $statut = $livre['disponible'] ? "Disponible" : "Emprunté";
                echo ($index + 1) . ". \"{$livre['titre']}\" par {$livre['auteur']} [Statut : $statut]\n";
            }
            break;

        case 2:
            echo "=== Livres disponibles ===\n";
            $aucunDisponible = true;
            foreach ($livres as $livre) {
                if ($livre['disponible'] === true) {
                    echo "- \"{$livre['titre']}\" de {$livre['auteur']}\n";
                    $aucunDisponible = false;
                }
            }
            if ($aucunDisponible) {
                echo "Aucun livre n'est disponible actuellement.\n";
            }
            break;

        case 3:
            // Utilisation de la fonction count() pour le total
            $total = count($livres);
            echo "Le nombre total de livres dans la bibliothèque est : $total\n";
            break;

        case 4:
            echo "=== Ajouter un nouveau livre ===\n";
            $titre = readline("Entrez le titre du livre : ");
            $auteur = readline("Entrez l'auteur du livre : ");
            
            // Par défaut, un nouveau livre est disponible
            $livres[] = [
                "titre" => $titre,
                "auteur" => $auteur,
                "disponible" => true
            ];
            echo "Le livre \"$titre\" a bien été ajouté ! \n";
            break;

        case 5:
            echo "Merci d'avoir utilisé la bibliothèque. Au revoir !\n";
            break;

        default:
            echo "Choix invalide. Veuillez entrer un nombre entre 1 et 5.\n";
            break;
    }

} while ($choix !== 5);
