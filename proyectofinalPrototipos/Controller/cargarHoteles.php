<?php

function cargarHotels()
{
    $municipio = $_POST['municipio'];

    $municipioEncoded = urlencode($municipio);

    $url = "https://script.google.com/macros/s/AKfycbyDcS5ClbYXmwZIa-cYI7v8iRpswV4eRw1px80sfsbXk1VkowWrrygNIm0qe_o28wX1jQ/exec?departamento=$municipioEncoded";

    $response = file_get_contents($url);
    $data = json_decode($response, true);

    if (isset($data['hoteles']) && is_array($data['hoteles'])) {
        echo "<form action='../HTML/reservacion.php' method='post'>";
        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>Nombre</th>";
        echo "<th scope='col'>Dirección</th>";
        echo "<th scope='col'>Calificación</th>";
        echo "<th scope='col'></th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($data['hoteles'] as $index => $hotel) {
            $hotelData = json_encode($hotel);
            
            echo "<tr>";
            echo "<td>{$hotel['nombre']}</td>";
            echo "<td>{$hotel['direccion']}</td>";
            echo "<td>{$hotel['calificacion']}</td>";
            echo "<td><button type='submit' name='reservar' value='$hotelData' class='btn btn-primary'>Realizar reservacion</button></td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</form>";
    } else {
        echo "Invalid or missing 'hoteles' data in the JSON.";
    }
}
?>

