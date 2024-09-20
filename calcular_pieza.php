<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Costo de Impresión 3D</title>
    <!-- Enlace a Bootstrap CSS (jsDelivr CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Calculadora de Costo de Impresión 3D</h1>
        <form action="calcular.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nombre_pieza" class="form-label">Nombre de la Pieza:</label>
                        <input type="text" class="form-control" id="nombre_pieza" name="nombre_pieza" required>
                    </div>
                    <div class="mb-3">
                        <label for="precio_filamento" class="form-label">Precio del Filamento (por kg):</label>
                        <input type="number" class="form-control" id="precio_filamento" name="precio_filamento" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="peso_filamento" class="form-label">Peso del Filamento Utilizado (g):</label>
                        <input type="number" class="form-control" id="peso_filamento" name="peso_filamento" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="consumo_energia" class="form-label">Consumo de Energía de la Impresora (W):</label>
                        <input type="number" class="form-control" id="consumo_energia" name="consumo_energia" required>
                    </div>
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
                        <label for="costo_impresora" class="form-label">Costo de la Impresora:</label>
                        <input type="number" class="form-control" id="costo_impresora" name="costo_impresora" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="vida_util" class="form-label">Vida Útil de la Impresora (horas):</label>
                        <input type="number" class="form-control" id="vida_util" name="vida_util" required>
                    </div>
                    <div class="mb-3">
                        <label for="tarifa_mano_obra" class="form-label">Tarifa de Mano de Obra (por hora):</label>
                        <input type="number" class="form-control" id="tarifa_mano_obra" name="tarifa_mano_obra" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="horas_trabajo" class="form-label">Horas de Trabajo:</label>
                        <input type="number" class="form-control" id="horas_trabajo" name="horas_trabajo" step="0.01" required>
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