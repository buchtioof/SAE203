<?php
//Récupère le contenu du JSON
$jsoncontent = file_get_contents("./json/articles.json");
$data = json_decode($jsoncontent, true);

//Fonctions qui lient les parties JSON à une fonction "data" en PhP
function data0($cle): void {
    global $data;
    if (isset($data['0'][$cle])) {
        echo $data['0'][$cle];
    } else {
        echo "<p>Clé non trouvée dans les données.</p>";
    }
}
function data1($cle) {
    global $data;
    if (isset($data['1'][$cle])) {
        echo $data['1'][$cle];
    } else {
        echo "<p>Clé non trouvée dans les données.</p>";
    }
}

function data2($cle) {
    global $data;
    if (isset($data['2'][$cle])) {
        echo $data['2'][$cle];
    } else {
        echo "<p>Clé non trouvée dans les données.</p>";
    }
}

function data3($cle) {
    global $data;
    if (isset($data['3'][$cle])) {
        echo $data['3'][$cle];
    } else {
        echo "<p>Clé non trouvée dans les données.</p>";
    }
}

function data4($cle) {
    global $data;
    if (isset($data['4'][$cle])) {
        echo $data['4'][$cle];
    } else {
        echo "<p>Clé non trouvée dans les données.</p>";
    }
}

function data5($cle) {
    global $data;
    if (isset($data['5'][$cle])) {
        echo $data['5'][$cle];
    } else {
        echo "<p>Clé non trouvée dans les données.</p>";
    }
}
function data6($cle) {
    global $data;
    if (isset($data['6'][$cle])) {
        echo $data['6'][$cle];
    } else {
        echo "<p>Clé non trouvée dans les données.</p>";
    }
}
?>