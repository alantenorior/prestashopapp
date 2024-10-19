<?php
include 'api.php';

// Listar todos los usuarios
$customers = apiRequest('customers');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Lista de Clientes</h1>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers['customers'] as $customer): ?>
                <tr>
                    <td><?php echo $customer['id']; ?></td>
                    <td><?php echo $customer['firstname'] . ' ' . $customer['lastname']; ?></td>
                    <td><?php echo $customer['email']; ?></td>
                    <td>
                        <a href="edit_customer.php?id=<?php echo $customer['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="delete_customer.php?id=<?php echo $customer['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2 class="mt-5">Crear Cliente</h2>
        <form action="create_customer.php" method="post" class="row g-3">
            <div class="col-md-4">
                <label for="firstname" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="col-md-4">
                <label for="lastname" class="form-label">Apellido:</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="col-md-4">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" required>
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
