<!-- Lien vers l'URL spécifiée dans la session -->
<a href="<?php echo $_SESSION["prout"]("url"); ?>">
    <!-- Conteneur principal du CTA avec une couleur de fond dynamique -->
    <div class="cta_article" style="background-color: var(<?php echo $_SESSION["prout"]("color"); ?>);">
        <div class="content">
            <div class="title">
                <!-- Affichage du numéro et du titre du CTA -->
                <h2><?php echo $_SESSION["prout"]("number"); ?></h2>
                <h2><?php echo $_SESSION["prout"]("title"); ?></h2>
            </div>
            <!-- Affichage du sous-titre du CTA -->
            <p><?php echo $_SESSION["prout"]("subtitle"); ?></p>
        </div>
        <!-- Affichage de l'icône du CTA -->
        <img src="<?php echo $_SESSION["prout"]("icon"); ?>" class="articon" alt="Icone du premier article" />
    </div>
</a>