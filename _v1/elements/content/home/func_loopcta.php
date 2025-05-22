<?php
// Script PHP qui boucle sur les CTA (Call To Action) des articles de la page d'accueil

// Fonction pour compter le nombre de tableaux dans les données JSON
function countArrays($data) {
    $count = 0;
    // Vérifier chaque élément dans les données
    foreach ($data as $item) {
        if (is_array($item)) {
            $count++; // Incrémenter si c'est un tableau
        }
    }
    return $count;
}

// Calculer le nombre de tableaux dans les données JSON
$numberOfArrays = (countArrays($data) - 1);

// Boucler sur chaque tableau et inclure le fichier cta_article.php
for ($i = 0; $i < $numberOfArrays; $i++) {
    // Définir une variable de session pour chaque tableau
    $_SESSION["prout"] = "data" . $i;
    // Inclure le fichier cta_article.php pour chaque tableau
    include "cta_article.php";
}
?>
