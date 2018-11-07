<?php

//16/06/2018 para 2018-06-16
function dateBRtoDateUS($dateBR) {
    $dataArray = explode("/", $dateBR);
    $novaData = $dataArray[2] . "-" . $dataArray[1] . "-" . $dataArray[0];
    return $novaData;
}

//2018-06-16 para 16/06/2018
function dateUStoDateBR($dateUS) {
    $dataArray = explode("-", $dateUS);
    $novaData = $dataArray[2] . "/" . $dataArray[1] . "/" . $dataArray[0];
    return $novaData;
}

?>
