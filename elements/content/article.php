<style>
    body {
        /* Définir la couleur de fond dynamiquement à partir de la variable de session */
        background-color: var(<?php echo $_SESSION["which"]("color"); ?>);
    }
</style>
<!-- Afficher le titre de l'article dynamiquement à partir de la variable de session -->
<title><?php echo $_SESSION['which']("mintitle"); ?></title>
<div class="article">
    <div class="header">
        <div class="title">
            <!-- Afficher l'icône de l'article dynamiquement à partir de la variable de session -->
            <img src="<?php echo $_SESSION['which']("icon"); ?>" alt="Icône de l'article">
            <!-- Afficher le titre de l'article dynamiquement à partir de la variable de session -->
            <h1><?php echo $_SESSION['which']("title"); ?></h1>
        </div>
        <!-- Afficher le sous-titre de l'article dynamiquement à partir de la variable de session -->
        <p><?php echo $_SESSION['which']("subtitle"); ?></p>
    </div>
    <div class="text">
        <!-- Afficher le contenu de l'article dynamiquement à partir de la variable de session -->
        <p><?php echo $_SESSION['which']("article"); ?></p>
    </div>
    <?php 
    // Inclure la section vidéo si la variable de session l'exige
    if ($_SESSION['which']("requirevideo") == true){
        include "article/video.php";
    }
    ?>
</div>