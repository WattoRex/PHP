<?php
//Variable global
$Rejouer = "Oui";

//Boucle rejouer ou non
while ($Rejouer == "Oui" || $Rejouer == "oui" || $Rejouer == "OUI" || $Rejouer == "OUi" || $Rejouer == "oUI" || $Rejouer == "oUi" || $Rejouer == "OuI") {
    //Création du "menu"
    $m = intval(0);
    echo "---- Choix de configuration du votre jet de dé pour JDR ! ---- " . "\n";
    echo ' 1 - Dé 6' . "\n";
    echo ' 2 - Dé 10' . "\n";
    echo ' 3 - Dé 12' . "\n";
    echo ' 4 - Dé 20' . "\n";
    echo ' 5 - Dé 100' . "\n";
    echo "----------------------------------------- " . "\n";
    $m = readline("Faite votre choix de configuration : ");
    switch ($m) {
        case 1:
            $Resultat = 0; //Déclaration de la valeur du résultat du lancer de dé 6
            $Resultat  = intval(rand(1, 6)); //Random de la valeur du résultat du lancer de dé 6
            if ($Resultat === 1) {
                echo "Bien joué jeune aventurier, c'est une réussite critique : " . $Resultat . "\n";
            } elseif ($Resultat === 6) {
                echo "Malheureux, c'est un echec critique : " . $Resultat . "\n";
            } else {
                echo "Le résultat du lancer de votre dé 6 est : " . $Resultat . "\n";
            }
            break;
        case 2:
            $Resultat = 0; //Déclaration de la valeur du résultat du lancer de dé 10
            $Resultat  = intval(rand(1, 10)); //Random de la valeur du résultat du lancer de dé 1
            if ($Resultat === 1) {
                echo "Bien joué jeune aventurier, c'est une réussite critique : " . $Resultat . "\n";
            } elseif ($Resultat === 10) {
                echo "Malheureux, c'est un echec critique : " . $Resultat . "\n";
            } else {
                echo "Le résultat du lancer de votre dé 10 est : " . $Resultat . "\n";
            }
            break;
        case 3:
            $Resultat = 0; //Déclaration de la valeur du résultat du lancer de dé 12
            $Resultat  = intval(rand(1, 12)); //Random de la valeur du résultat du lancer de dé 12
            break;
            if ($Resultat === 1) {
                echo "Bien joué jeune aventurier, c'est une réussite critique : " . $Resultat . "\n";
            } elseif ($Resultat === 12) {
                echo "Malheureux, c'est un echec critique : " . $Resultat . "\n";
            } else {
                echo "Le résultat du lancer de votre dé 12 est : " . $Resultat . "\n";
            }
        case 4:
            $Resultat = 0; //Déclaration de la valeur du résultat du lancer de dé 12
            $Resultat  = intval(rand(1, 20)); //Random de la valeur du résultat du lancer de dé 12
            if ($Resultat === 1) {
                echo "Bien joué jeune aventurier, c'est une réussite critique : " . $Resultat . "\n";
            } elseif ($Resultat === 20) {
                echo "Malheureux, c'est un echec critique : " . $Resultat . "\n";
            } else {
                echo "Le résultat du lancer de votre dé 20 est : " . $Resultat . "\n";
            }
            break;
        case 5:
            $Resultat = 0; //Déclaration de la valeur du résultat du lancer de dé 100
            $Resultat  = intval(rand(1, 100)); //Random de la valeur du résultat du lancer de dé 100
            if ($Resultat <= 5) {
                echo "Bien joué jeune aventurier, c'est une réussite critique : " . $Resultat . "\n";
            } elseif ($Resultat > 95) {
                echo "Malheureux, c'est un echec critique : " . $Resultat . "\n";
            } else {
                echo "Le résultat du lancer de votre dé 100 est : " . $Resultat . "\n";
            }
            break;
    }

    echo " Voulez vous recommencer ? (Oui ou Non)" . "\n";
    $Rejouer = readline();
}
