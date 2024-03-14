<?php
function sorteo($nombres) {
    // Comprobar si hay alguna línea vacía
    foreach ($nombres as $nombre) {
        if (trim($nombre) === '') {
            return "La lista de nombres no puede contener líneas vacías.";
        }
    }

    if (count($nombres) < 2) {
        return "La lista de nombres debe contener al menos dos nombres.";
    }

    shuffle($nombres);

    $ganador = $nombres[0];
    $suplente = $nombres[1];

    return array('ganador' => $ganador, 'suplente' => $suplente);
}

$nombres = $_POST['nombres'];

// Eliminar líneas vacías del array
$nombres = array_filter($nombres, 'trim');

$resultado = sorteo($nombres);

echo json_encode($resultado);
?>