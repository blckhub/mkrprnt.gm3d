<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Costo de Piezas Multicolor</title>
    <!-- Enlace a Bootstrap CSS (jsDelivr CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Calculadora de Costo de Piezas Multicolor</h1>
        <form action="calcular_multicolor.php" method="post">
            <!-- Datos generales de la impresora -->
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="nombre_pieza" class="form-label">Nombre de la Pieza:</label>
                        <input type="text" class="form-control" id="nombre_pieza" name="nombre_pieza" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="consumo_energia" class="form-label">Consumo de Energía de la Impresora (W):</label>
                        <input type="number" class="form-control" id="consumo_energia" name="consumo_energia" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="costo_impresora" class="form-label">Costo de la Impresora:</label>
                        <input type="number" class="form-control" id="costo_impresora" name="costo_impresora" step="0.01" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="vida_util" class="form-label">Vida Útil de la Impresora (horas):</label>
                        <input type="number" class="form-control" id="vida_util" name="vida_util" required>
                    </div>
                </div>
            </div>
            
            <!-- Datos de los filamentos multicolor -->
            <div class="row">
                <div class="col-md-3">
                    <h5>Filamento 1</h5>
                    <div class="mb-3">
                        <label for="precio_filamento1" class="form-label">Precio del Filamento 1 (por kg):</label>
                        <input type="number" class="form-control" id="precio_filamento1" name="precio_filamento1" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="peso_filamento1" class="form-label">Peso del Filamento 1 Utilizado (g):</label>
                        <input type="number" class="form-control" id="peso_filamento1" name="peso_filamento1" step="0.01" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5>Filamento 2</h5>
                    <div class="mb-3">
                        <label for="precio_filamento2" class="form-label">Precio del Filamento 2 (por kg):</label>
                        <input type="number" class="form-control" id="precio_filamento2" name="precio_filamento2" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="peso_filamento2" class="form-label">Peso del Filamento 2 Utilizado (g):</label>
                        <input type="number" class="form-control" id="peso_filamento2" name="peso_filamento2" step="0.01" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5>Filamento 3</h5>
                    <div class="mb-3">
                        <label for="precio_filamento3" class="form-label">Precio del Filamento 3 (por kg):</label>
                        <input type="number" class="form-control" id="precio_filamento3" name="precio_filamento3" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="peso_filamento3" class="form-label">Peso del Filamento 3 Utilizado (g):</label>
                        <input type="number" class="form-control" id="peso_filamento3" name="peso_filamento3" step="0.01" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5>Filamento 4</h5>
                    <div class="mb-3">
                        <label for="precio_filamento4" class="form-label">Precio del Filamento 4 (por kg):</label>
                        <input type="number" class="form-control" id="precio_filamento4" name="precio_filamento4" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="peso_filamento4" class="form-label">Peso del Filamento 4 Utilizado (g):</label>
                        <input type="number" class="form-control" id="peso_filamento4" name="peso_filamento4" step="0.01" required>
                    </div>
                </div>
            </div>

            <!-- Otros costos y tiempos -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tiempo_impresion" class="form-label">Tiempo de Impresión (horas):</label>
                        <input type="number" class="form-control" id="tiempo_impresion" name="tiempo_impresion" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="costo_electricidad" class="form-label">Costo de Electricidad (por kWh):</label>
                        <input type="number" class="form-control" id="costo_electricidad" name="costo_electricidad" step="0.01" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tiempos_cambio_filamento" class="form-label">Tiempos de Cambio de Filamento:</label>
                        <input type="number" class="form-control" id="tiempos_cambio_filamento" name="tiempos_cambio_filamento" required>
                    </div>
                    <div class="mb-3">
                        <label for="costo_cambio_filamento" class="form-label">Costo Adicional por Cada Cambio de Filamento:</label>
                        <input type="number" class="form-control" id="costo_cambio_filamento" name="costo_cambio_filamento" step="0.01" value="0">
                    </div>
                </div>
            </div>

            <!-- Número de piezas -->
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="numero_piezas" class="form-label">Número de Piezas:</label>
                        <input type="number" class="form-control" id="numero_piezas" name="numero_piezas" step="1" required>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Calcular Costo</button>
            </div>
        </form>
    </div>
    
    <!-- Enlace a Bootstrap JS y sus dependencias (jsDelivr CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
