<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu base de datos está en otro servidor
$username = "root"; // Usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "impresiones3d"; // Nombre de la base de datos

// Crear conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener valores del formulario
    $nombre_pieza = $_POST['nombre_pieza'];
    $precio_filamento = $_POST['precio_filamento'];
    $peso_filamento = $_POST['peso_filamento'];
    $consumo_energia = $_POST['consumo_energia'];
    $tiempo_impresion = $_POST['tiempo_impresion'];
    $costo_electricidad = $_POST['costo_electricidad'];
    $costo_impresora = $_POST['costo_impresora'];
    $vida_util = $_POST['vida_util'];
    $tarifa_mano_obra = $_POST['tarifa_mano_obra'];
    $horas_trabajo = $_POST['horas_trabajo'];

    // Calcular costo del filamento
    $costo_filamento = ($peso_filamento / 1000) * $precio_filamento;

    // Calcular costo de energía
    $costo_energia = ($consumo_energia * $tiempo_impresion / 1000) * $costo_electricidad;

    // Calcular costo de depreciación de la impresora
    $costo_por_hora = $costo_impresora / $vida_util;
    $costo_depreciacion = $costo_por_hora * $tiempo_impresion;

    // Calcular costo de mano de obra
    $costo_mano_obra = $tarifa_mano_obra * $horas_trabajo;

    // Calcular costo total
    $costo_total = $costo_filamento + $costo_energia + $costo_depreciacion + $costo_mano_obra;

    // Guardar en la base de datos
    $sql = "INSERT INTO piezas (nombre_pieza, costo) VALUES ('$nombre_pieza', '$costo_total')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1>Costo Total de la Pieza: $" . number_format($costo_total, 2) . "</h1>";
        echo "<p>La información ha sido guardada en la base de datos.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Método de solicitud no válido.";
}

// Cerrar conexión a la base de datos
$conn->close();
?>
