<?php 
    // Inclusion du fichier de gestion de session
    session_start();
    // Inclusion du fichier de gestion des données JSON
    require "./server/jsondata.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Inclusion des fichiers CSS pour le style de la page -->
    <link rel="stylesheet" href="./styles/main.css" />
    <link rel="stylesheet" href="./styles/home.css" />
    <link rel="stylesheet" href="./styles/articles.css" />
    <link rel="stylesheet" href="./styles/footer.css" />
</head>

<body>
    <?php 
        // Inclusion de la barre de navigation
        include "./elements/navbar.php";
        // Inclusion du contenu principal de la page
        include "./elements/content.php";
        // Inclusion du pied de page
        include "./elements/footer.php";
    ?>
</body>

</html>