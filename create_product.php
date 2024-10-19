<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Crear Producto</h1>
        <form action="create_product.php" method="post" class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Nombre del Producto:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Precio:</label>
                <input type="number" step="0.01" class="form-control" name="price" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear Producto</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
