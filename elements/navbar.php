<link rel="stylesheet" href="styles/navbar.css">
<div class="navigation" style="width: 100%;">
    <div class="menu_pc">
        <a href="~idir/SAE_105"><img src="assets/logo.svg" alt="Logo du site" /></a>
        <ul class="nav">
            <li><a href="?page=0" class="cta">Définitions</a></li>
            <li><a href="?page=1" class="cta">Positif</a></li>
            <li><a href="?page=2" class="cta">Négatif</a></li>
            <li><a href="?page=3" class="cta">Nulle</a></li>
            <li><a href="?page=4" class="cta">Pratique</a></li>
            <li><a href="?page=5" class="cta">Utilisations</a></li>
        </ul>
        <?php include "./elements/content/loginpopup.php"?>
    </div>

    <div id="menu_mobile">
        <input type="checkbox" />

        <span></span>
        <span></span>
        <span></span>

        <ul id="menu">
            <li><?php include "./elements/content/loginpopup.php"?></li>
            <li><a href="?page=0" class="cta">Définitions</a></li>
            <li><a href="?page=1" class="cta">Positif</a></li>
            <li><a href="?page=2" class="cta">Négatif</a></li>
            <li><a href="?page=3" class="cta">Nulle</a></li>
            <li><a href="?page=4" class="cta">Pratique</a></li>
            <li><a href="?page=5" class="cta">Utilisations</a></li>
        </ul>

    </div>
</div>