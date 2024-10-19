<?php
include 'api.php';

// Eliminar el producto si se confirma la acción
if (isset($_POST['confirm'])) {
    $productId = $_GET['id'];
    apiRequest('products/' . $productId, 'DELETE');
    header('Location: listar_productos.php'); // Redirige después de eliminar
    exit();
}

// Obtener los detalles del producto para confirmar
if (isset($_GET['id'])) {
    $product = apiRequest('products/' . $_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Eliminar Producto</h1>
        <div class="alert alert-warning text-center">
            <p>¿Estás seguro de que deseas eliminar el producto <strong><?php echo $product['product']['name']; ?></strong>?</p>
        </div>
        <form action="delete_product.php?id=<?php echo $_GET['id']; ?>" method="post" class="text-center">
            <button type="submit" name="confirm" class="btn btn-danger">Eliminar</button>
            <a href="listar_productos.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
