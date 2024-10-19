<?php
include 'api.php';

// Eliminar el cliente si se confirma la acción
if (isset($_POST['confirm'])) {
    $customerId = $_GET['id'];
    apiRequest('customers/' . $customerId, 'DELETE');
    header('Location: listar_clientes.php'); // Redirige después de eliminar
    exit();
}

// Obtener los detalles del cliente para confirmar
if (isset($_GET['id'])) {
    $customer = apiRequest('customers/' . $_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Eliminar Cliente</h1>
        <div class="alert alert-warning text-center">
            <p>¿Estás seguro de que deseas eliminar al cliente <strong><?php echo $customer['customer']['firstname'] . ' ' . $customer['customer']['lastname']; ?></strong>?</p>
        </div>
        <form action="delete_customer.php?id=<?php echo $_GET['id']; ?>" method="post" class="text-center">
            <button type="submit" name="confirm" class="btn btn-danger">Eliminar</button>
            <a href="listar_clientes.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
