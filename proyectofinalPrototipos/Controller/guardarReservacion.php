<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$hotel = $_POST['hotel'];
$ubicacion = $_POST['ubicacion'];
$fentrada = $_POST['fentrada'];
$fsalida = $_POST['fsalida'];

// Construir los datos a enviar en la solicitud POST
$postData = http_build_query(array(
    'nombre' => $nombre,
    'apellido' => $apellido,
    'hotel' => $hotel,
    'ubicacion' => $ubicacion,
    'fechaEntrada' => $fentrada,
    'fechaSalida' => $fsalida
));

// Configurar la solicitud cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://script.google.com/macros/s/AKfycbykKSqIyL8LQ0Vv11SahviFCrK0ZAsU0ssl4KV8Sog2HzrRwpcPWiTKrXgzHYr-uXoJ/exec');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la solicitud cURL y obtener la respuesta
$response = curl_exec($ch);

// Verificar si hubo errores
if (curl_errno($ch)) {
    echo 'Error en la solicitud cURL: ' . curl_error($ch);
}

// Cerrar la conexión cURL
curl_close($ch);

// Imprimir la respuesta
echo "datos insertados correctamente  ";
header("Location: ../HTML/menu.php");
exit();



?>


