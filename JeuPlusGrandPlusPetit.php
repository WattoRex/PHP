<?php
//Variable global
$Rejouer = "Oui";

//Boucle rejouer ou non
while ($Rejouer == "Oui" || $Rejouer == "oui" || $Rejouer == "OUI" || $Rejouer == "Yes" || $Rejouer == "yes") {
    //Création du "menu"
    $m = intval(0);
    echo "---- Choix de configuration du jeu ! ---- " . "\n";
    echo ' 1 - Choix de la plage du nombre aléatoire' . "\n";
    echo ' 2 - Nombre alétoire entre 1 et 100' . "\n";
    echo ' 3 - Nombre et plage aléatoire entre 1 et 100' . "\n";
    echo "----------------------------------------- " . "\n";
    $m = readline("Faite votre choix de configuration : ");
    switch ($m) {
        case 1:
            // Demander à l'utilisateur de saisir la limite inférieure de la plage
            $minimum = intval(readline("Entrez la limite inférieure de la plage : "));
            // Demander à l'utilisateur de saisir la limite supérieure de la plage
            $maximum = intval(readline("Entrez la limite supérieure de la plage : "));

            // Forcer la saisie dans la plage fixée
            while ($minimum >= $maximum) {
                echo "La limite supérieure doit être strictement supérieure à la limite inférieure. Réessayez !" . "\n";
                $minimum = intval(readline("Entrez la limite inférieure de la plage : "));
                $maximum = intval(readline("Entrez la limite supérieure de la plage : "));
            }

            // Définir une variable nombreSecret aléatoire entre minimum et maximum
            $nombreSecret = intval(rand($minimum, $maximum));
            // Définir une variable compteurCoups à 0
            $compteurCoups = 0;
            // Définir une variable nombreTentativesMax comme le nombre maximal de tentatives autorisées
            $nombreTentativesMax = 10;

            // Répéter jusqu'à ce que le nombre soit trouvé ou que le nombre maximal de tentatives soit atteint
            while ($compteurCoups < $nombreTentativesMax) {
                // Demander à l'utilisateur de saisir un nombre compris entre minimum et maximum
                $saisie = intval(readline("Entrez un nombre entre $minimum et $maximum : "));

                // Vérifier si le nombre saisi est dans la plage fixée
                while ($saisie < $minimum || $saisie > $maximum) {
                    echo "Le nombre doit être compris entre $minimum et $maximum. Réessayez !" . "\n";
                    $saisie = intval(readline("Entrez un nombre entre $minimum et $maximum : "));
                }

                // Incrémenter le compteurCoups de 1
                $compteurCoups++;

                // Vérifier si le nombre saisi est égal au nombreSecret
                if ($saisie === $nombreSecret) {
                    echo "Félicitations, vous avez trouvé le nombre !" . "\n";
                    echo "Nombre de coups tentés : " . $compteurCoups . "\n";
                    // Sortir de la boucle car le nombre a été trouvé
                    break;
                } elseif ($saisie < $nombreSecret) {
                    echo "Plus grand" . "\n";
                } else {
                    echo "Plus petit" . "\n";
                }

                // Vérifier si le nombre maximal de tentatives est atteint
                if ($compteurCoups === $nombreTentativesMax) {
                    echo "Nombre maximal de tentatives atteint" . "\n";
                    echo "Le nombre secret était : " . $nombreSecret . "\n";
                }
            }
            break;
        case 2:
            // Définir un nombreSecret aléatoire entre 1 et 100
            $nombreSecret = intval(rand(1, 100));
            // Définir un compteurCoups à 0
            $compteurCoups = 0;
            // Définir une variable nombreTentativesMax comme le nombre maximal de tentatives autorisées
            $nombreTentativesMax = 10;
            $minimum = 1;
            $maximum = 100;

            // Répéter jusqu'à ce que le nombre soit trouvé ou que le nombre maximal de tentatives soit atteint
            while ($compteurCoups < $nombreTentativesMax) {
                // Demander à l'utilisateur de saisir un nombre compris entre minimum et maximum
                $saisie = intval(readline("Entrez un nombre entre $minimum et $maximum : "));

                // Vérifier si le nombre saisi est dans la plage fixée
                while ($saisie < $minimum || $saisie > $maximum) {
                    echo "Le nombre doit être compris entre $minimum et $maximum. Réessayez !" . "\n";
                    $saisie = intval(readline("Entrez un nombre entre $minimum et $maximum : "));
                }

                // Incrémenter le compteurCoups de 1
                $compteurCoups++;

                // Vérifier si le nombre saisi est égal au nombreSecret
                if ($saisie === $nombreSecret) {
                    echo "Félicitations, vous avez trouvé le nombre !" . "\n";
                    echo "Nombre de coups tentés : " . $compteurCoups . "\n";
                    // Sortir de la boucle car le nombre a été trouvé
                    break;
                } elseif ($saisie < $nombreSecret) {
                    echo "Plus grand" . "\n";
                } else {
                    echo "Plus petit" . "\n";
                }

                // Vérifier si le nombre maximal de tentatives est atteint
                if ($compteurCoups === $nombreTentativesMax) {
                    echo "Nombre maximal de tentatives atteint" . "\n";
                    echo "Le nombre secret était : " . $nombreSecret . "\n";
                }
            }
            break;
        case 3:
            // Définir un compteurCoups à 0
            $compteurCoups = 0;
            // Définir une variable nombreTentativesMax comme le nombre maximal de tentatives autorisées.
            $nombreTentativesMax = 10;
            $minimum = 0;
            $maximum = 0;

            $minimum = intval(rand(1, 99)); // Aléat de la limite inférieure de la plage
            $maximum = intval(rand(2, 100)); // Aléat de la limite supérieure de la plage
            while ($minimum > $maximum) {
                $minimum = intval(rand(1, 99)); // Aléat de la limite inférieure de la plage pour avoir moin que la supérieur.
            }
            echo "La plage inférieur est de : " . $minimum . " et la plage supérieure est de :" . $maximum . "\n";

            // Forcer la saisie dans la plage fixée
            while ($minimum >= $maximum) {
                echo "La limite supérieure doit être strictement supérieure à la limite inférieure. Réessayez !" . "\n";
                $minimum = intval(readline("Entrez la limite inférieure de la plage : "));
                $maximum = intval(readline("Entrez la limite supérieure de la plage : "));
            }

            // Définir une variable nombreSecret aléatoire entre minimum et maximum
            $nombreSecret = intval(rand($minimum, $maximum));
            // Définir une variable compteurCoups à 0
            $compteurCoups = 0;
            // Définir une variable nombreTentativesMax comme le nombre maximal de tentatives autorisées
            $nombreTentativesMax = 10;

            // Répéter jusqu'à ce que le nombre soit trouvé ou que le nombre maximal de tentatives soit atteint
            while ($compteurCoups < $nombreTentativesMax) {
                // Demander à l'utilisateur de saisir un nombre compris entre minimum et maximum
                $saisie = intval(readline("Entrez un nombre entre $minimum et $maximum : "));

                // Vérifier si le nombre saisi est dans la plage fixée
                while ($saisie < $minimum || $saisie > $maximum) {
                    echo "Le nombre doit être compris entre $minimum et $maximum. Réessayez !" . "\n";
                    $saisie = intval(readline("Entrez un nombre entre $minimum et $maximum : "));
                }

                // Incrémenter le compteurCoups de 1
                $compteurCoups++;

                // Vérifier si le nombre saisi est égal au nombreSecret
                if ($saisie === $nombreSecret) {
                    echo "Félicitations, vous avez trouvé le nombre !" . "\n";
                    echo "Nombre de coups tentés : " . $compteurCoups . "\n";
                    // Sortir de la boucle car le nombre a été trouvé
                    break;
                } elseif ($saisie < $nombreSecret) {
                    echo "Plus grand" . "\n";
                } else {
                    echo "Plus petit" . "\n";
                }

                // Vérifier si le nombre maximal de tentatives est atteint
                if ($compteurCoups === $nombreTentativesMax) {
                    echo "Nombre maximal de tentatives atteint" . "\n";
                    echo "Le nombre secret était : " . $nombreSecret . "\n";
                }
            }
            break;
        default;
            echo $m . " n'est pas correct ! Choisie entre 1,2 et 3.";
    };
    echo " Voulez vous recommencer ? (Oui ou Non)" . "\n";
    $Rejouer = readline();
}
