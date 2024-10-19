<?php
include 'api.php';

// Listar todos los productos
$products = apiRequest('products');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Lista de Productos</h1>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products['products'] as $product): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td>
                        <a href="edit_product.php?id=<?php echo $product['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="delete_product.php?id=<?php echo $product['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2 class="mt-5">Crear Producto</h2>
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
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
