<?php
function gem() {
    gemIFilen($_POST['kurv']);
}

function gemIFilen($kurv) {
    $indkøbskurvensArray = hentFraFil();
    $indkøbskurvensArray[] = $kurv;
    $jsonKurv = json_encode($indkøbskurvensArray);

    file_put_contents("./kurv.json", $jsonKurv);
}

function hentFraFil() {
    $jsonKurv = file_get_contents("./kurv.json");
    $indkøbskurvensArray = json_decode($jsonKurv, true);
    return $indkøbskurvensArray;
}

function sletValgtProdukt($index) {
    $indkøbskurvensArray = hentFraFil();
    unset($indkøbskurvensArray[$index]);

    $jsonKurv = json_encode($indkøbskurvensArray);

    file_put_contents("./kurv.json", $jsonKurv);
    header("Location: Nobel8920.php");
}
?>