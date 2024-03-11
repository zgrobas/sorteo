<?php
function sorteo($nombres) {
    if (count($nombres) < 2) {
        return "La lista de nombres debe contener al menos dos nombres.";
    }

    shuffle($nombres);

    $ganador = $nombres[0];
    $suplente = $nombres[1];

    return array('ganador' => $ganador, 'suplente' => $suplente);
}

$nombres = $_POST['nombres'];
$resultado = sorteo($nombres);

echo json_encode($resultado);
?>