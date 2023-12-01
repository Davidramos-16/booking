<?php




$reservaData = $_POST['reservar'];

$reserva = json_decode($reservaData, true);

// Acceder a los valores individuales
$nombre = $reserva['Nombre'];
$apellido = $reserva['Apellido'];
$ubicacion = $reserva['Ubicacion'];
$hotel = $reserva['Hotel'];

    $url = "https://script.google.com/macros/s/AKfycbxc7WbmkdzLpNtRSQVv4_6zjGcEsIAOQSRlQ1OabKRvYhvMp-0RGnubsdrgLka1cUF-jg/exec";

    // Configuración del contexto para manejar errores en la solicitud HTTP
    $options = [
        "http" => [
            "ignore_errors" => true,
            "method" => "POST",
            "header" => "Content-type: application/x-www-form-urlencoded",
            "content" => http_build_query([
                "nombre" => $nombre,
                "apellido" => $apellido,
                "hotel" => $hotel,
                "ubicacion" => $ubicacion,
            ]),
        ],
    ];
    $context = stream_context_create($options);

    // Realizar solicitud HTTP
    $response = file_get_contents($url, false, $context);

    if ($response === FALSE) {
        die('Error al realizar la solicitud HTTP');
    }

    $data = json_decode($response, true);

    if (isset($data['mensaje'])) {
        header("Location: ../HTML/menu.php");
exit();
    } else {
        echo "Respuesta inválida del servidor.";
    }


?>