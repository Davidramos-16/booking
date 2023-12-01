<?php

function cargardata()
{
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['reservar'])) {
        $hotelData = $_POST['reservar'];
        $hotel = json_decode($hotelData, true);

        // Formulario para guardar la reservación
        echo '<div class="card">';
        echo '<form action="../Controller/guardarReservacion.php" method="post">';
        echo '<div class="card-header">';
        echo '<label>Nombre</label>';
        echo '<input type="text" class="form-control" name="nombre">';
        echo '<label>Apellido</label>';
        echo '<input type="text" class="form-control" name="apellido">';
        echo '<label>Hotel</label>';
        echo '<input type="text" class="form-control" name="hotel" value="' . htmlspecialchars($hotel['nombre']) . '" readonly>';
        echo '<label>Ubicacion</label>';
        echo '<input type="text" class="form-control" name="ubicacion" value="' . htmlspecialchars($hotel['direccion']) . '" readonly>';
        echo '<label>Fecha Entrada</label>';
        echo '<input type="date" class="form-control" name="fentrada">';
        echo '<label>Fecha Salida</label>';
        echo '<input type="date" class="form-control" name="fsalida">';
        echo '<input type="submit" class="btn btn-primary" value="Realizar Reservación">';
        echo '<input type="hidden" name="hotel_data" value="' . htmlspecialchars($hotelData) . '">';
        echo '</div>';
        echo '</form>';
        echo '</div>';
    } else {
        echo "Botón 'reservar' no presente en el formulario.";
    }
} else {
    echo "La solicitud no es de tipo POST.";
}
}
?>