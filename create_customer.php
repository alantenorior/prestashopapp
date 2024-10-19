<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Crear Cliente</h1>
        <form action="create_customer.php" method="post" class="row g-3">
            <div class="col-md-6">
                <label for="firstname" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="col-md-6">
                <label for="lastname" class="form-label">Apellido:</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear Cliente</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
