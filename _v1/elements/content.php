<?php
// Si on reçoit ?page=nb, on récupère ce nb et on affiche la data liée à ce nombre sinon on affiche l'accueil
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        // Définir la session pour chaques page et inclure le contenu de l'article
        case "0":
            $_SESSION['which'] = "data0";
            require_once './elements/content/article.php';
            break;
        case "1":
            $_SESSION['which'] = "data1";
            require_once './elements/content/article.php';
            break;
        case "2":
            $_SESSION['which'] = "data2";
            require_once './elements/content/article.php';
            break;
        case "3":
            $_SESSION['which'] = "data3";
            require_once './elements/content/article.php';
            break;
        case "4":
            $_SESSION['which'] = "data4";
            require_once './elements/content/article.php';
            break;
        case "5":
            $_SESSION['which'] = "data5";
            require_once './elements/content/article.php';
            break;
        case "6":
            $_SESSION['which'] = "data6";
            require_once './elements/content/mentions.php';
            break;
        default:
            require_once './elements/content/home.php';
    }
} else {
    // Si aucun paramètre de page n'est fourni, inclure le contenu de la page d'accueil
    require_once './elements/content/home.php';
}
?>