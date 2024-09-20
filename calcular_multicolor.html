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
    $consumo_energia = floatval($_POST['consumo_energia']);
    $costo_impresora = floatval($_POST['costo_impresora']);
    $vida_util = intval($_POST['vida_util']);
    $precio_filamento1 = floatval($_POST['precio_filamento1']);
    $peso_filamento1 = floatval($_POST['peso_filamento1']);
    $precio_filamento2 = floatval($_POST['precio_filamento2']);
    $peso_filamento2 = floatval($_POST['peso_filamento2']);
    $precio_filamento3 = floatval($_POST['precio_filamento3']);
    $peso_filamento3 = floatval($_POST['peso_filamento3']);
    $precio_filamento4 = floatval($_POST['precio_filamento4']);
    $peso_filamento4 = floatval($_POST['peso_filamento4']);
    $tiempo_impresion = floatval($_POST['tiempo_impresion']);
    $costo_electricidad = floatval($_POST['costo_electricidad']);
    $tiempos_cambio_filamento = intval($_POST['tiempos_cambio_filamento']);
    $costo_cambio_filamento = floatval($_POST['costo_cambio_filamento']);
    $numero_piezas = intval($_POST['numero_piezas']);

    // Calcular costo de cada filamento
    $costo_filamento1 = ($peso_filamento1 / 1000) * $precio_filamento1;
    $costo_filamento2 = ($peso_filamento2 / 1000) * $precio_filamento2;
    $costo_filamento3 = ($peso_filamento3 / 1000) * $precio_filamento3;
    $costo_filamento4 = ($peso_filamento4 / 1000) * $precio_filamento4;

    // Sumar los costos de todos los filamentos
    $costo_total_filamento = $costo_filamento1 + $costo_filamento2 + $costo_filamento3 + $costo_filamento4;

    // Calcular costo adicional por cambio de filamento
    $costo_cambio_total = $tiempos_cambio_filamento * $costo_cambio_filamento;

    // Calcular costo de energía
    $costo_energia = ($consumo_energia * $tiempo_impresion / 1000) * $costo_electricidad;

    // Calcular costo de depreciación de la impresora
    $costo_por_hora = $costo_impresora / $vida_util;
    $costo_depreciacion = $costo_por_hora * $tiempo_impresion;

    // Calcular el costo total
    $costo_total = $costo_total_filamento + $costo_cambio_total + $costo_energia + $costo_depreciacion;

    // Calcular el costo por pieza
    $costo_por_pieza = $costo_total / $numero_piezas;

    // Insertar el costo por pieza y la fecha en la base de datos
    $sql = "INSERT INTO piezas_multicolor (nombre_pieza, costo_por_pieza, fecha) VALUES ('$nombre_pieza', '$costo_por_pieza', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "<h1>Costo por Pieza: $" . number_format($costo_por_pieza, 2) . "</h1>";
        echo "<p>El costo por pieza se ha guardado en la base de datos con la fecha actual.</p>";
    } else {
        echo "Error al guardar el costo por pieza: " . $conn->error;
    }
} else {
    echo "Método de solicitud no válido.";
}

// Cerrar conexión a la base de datos
$conn->close();
?>
