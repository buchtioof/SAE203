<style>
    body {
        background-color: var(<?php echo $_SESSION["which"]("color"); ?>);
    }
</style>
<div class="article">
    <div class="header">
        <h1 style="color: var(<?php echo $_SESSION["which"]("fontcolor"); ?>);">
            <?php echo $_SESSION['which']("title"); ?></h1>
        <p style="color: var(<?php echo $_SESSION["which"]("fontcolor"); ?>);">
            <?php echo $_SESSION['which']("subtitle"); ?></p>
    </div>
    <div class="text">
        <h2><?php echo $_SESSION['which']("title1"); ?></h2>
        <p><?php echo $_SESSION['which']("article1"); ?></p>
    </div>
    <div class="text">
        <h2><?php echo $_SESSION['which']("title2"); ?></h2>
        <p><?php echo $_SESSION['which']("article2"); ?></p>
    </div>
    <div class="text">
        <h2><?php echo $_SESSION['which']("title3"); ?></h2>
        <p><?php echo $_SESSION['which']("article3"); ?></p>
    </div>
    <div class="text">
        <h2><?php echo $_SESSION['which']("title4"); ?></h2>
        <p><?php echo $_SESSION['which']("article4"); ?></p>
    </div>
    <div class="text">
        <h2><?php echo $_SESSION['which']("title5"); ?></h2>
        <p><?php echo $_SESSION['which']("article5"); ?></p>
    </div>
</div>