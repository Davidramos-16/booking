<?php

function cargarReservas()
{
    $url = "https://script.google.com/macros/s/AKfycbx0T5oPKK3lRHe0f_ECYpJoe3_IJqBp6Y6oufsewaEXutjY8g6SWbkDBy_WW9MJpse_/exec";

    // Configuración del contexto para manejar errores en la solicitud HTTP
    $options = [
        "http" => [
            "ignore_errors" => true,
        ],
    ];
    $context = stream_context_create($options);

    // Realizar solicitud HTTP
    $response = file_get_contents($url, false, $context);

    if ($response === FALSE) {
        die('Error al realizar la solicitud HTTP');
    }

    $data = json_decode($response, true);

    if (isset($data) && is_array($data)) {
        echo "<form action='../Controller/eliminarReserva.php' method='post'>";
        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>Nombre</th>";
        echo "<th scope='col'>Apellido</th>";
        echo "<th scope='col'>Ubicacion</th>";
        echo "<th scope='col'>Hotel</th>";
        echo "<th scope='col'>Fecha Entrada</th>";
        echo "<th scope='col'>Fecha Salida</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($data as $index => $reserva) {
            $reservaData = json_encode($reserva);

            echo "<tr>";
            echo "<td>{$reserva['Nombre']}</td>";
            echo "<td>{$reserva['Apellido']}</td>";
            echo "<td>{$reserva['Ubicacion']}</td>";
            echo "<td>{$reserva['Hotel']}</td>";
            echo "<td>" . date('Y-m-d', strtotime($reserva['F_Entrada'])) . "</td>";
            echo "<td>" . date('Y-m-d', strtotime($reserva['F_Salida'])) . "</td>";
            echo "<td><button type='submit' name='reservar' value='$reservaData' class='btn btn-primary'>Eliminar Reservacion</button></td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</form>";
    } else {
        echo "Invalid or missing data in the JSON.";
    }

}

?>