<style>
    body {
        background-color: var(<?php echo $_SESSION["which"]("color"); ?>);
    }
</style>
    <!-- Titre de la page, récupéré dynamiquement depuis la session -->
    <title><?php echo $_SESSION['which']("mintitle"); ?></title>
<div class="article">
    <div class="header">
        <div class="title">
            <img src="<?php echo $_SESSION['which']("icon"); ?>" alt="Icône de l'article">
            <h1><?php echo $_SESSION['which']("title"); ?></h1>
        </div>
        <p><?php echo $_SESSION['which']("subtitle"); ?></p>
    </div>
    <div class="text">
        <p><?php echo $_SESSION['which']("article"); ?></p>
    </div>
    <?php 
    if ($_SESSION['which']("requirevideo") == true){
        include "article/video.php";
    }
    ?>
</div>