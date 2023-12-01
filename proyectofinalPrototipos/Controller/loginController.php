<?php
$usuario = $_GET['usuario'];
$pass = $_GET['pass'];

// Ensure the credentials are not empty
if (empty($usuario) || empty($pass)) {
    echo "Usuario y contraseña son requeridos";
    exit;
}

$url = "https://script.google.com/macros/s/AKfycbxgLFyFAEu_NGCLW5VYlyJGfvt4-SxSUsjCek6uU5Rq7pOuUt4NEFad4jPTE9T0GrVneQ/exec?usuario=$usuario&pass=$pass";

// Realizar la solicitud GET y decodificar el JSON
$response = file_get_contents($url);
$data = json_decode($response, true);

if (isset($data['error'])) {
    echo "Error: " . $data['error'];
    exit;
} else if (isset($data['username'])) {
    header("Location: http://localhost/proyectofinalPrototipos/HTML/principal.php");
    exit;
} else {
    echo "Respuesta inesperada del servidor"; // Handle unexpected responses
    exit;
}
?>
