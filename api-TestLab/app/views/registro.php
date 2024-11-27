<?php include __DIR__ . '/includes/header.php'; ?>
    <link rel="stylesheet" href="/api-TestLab/public/css/styles.css">

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

</head>
<body>
    <h1>Registro de Usuario</h1>

    <!-- Mensaje de error o éxito -->
    <?php if (isset($_GET['mensaje'])): ?>
        <p style="color: <?= $_GET['tipo'] === 'error' ? 'red' : 'green'; ?>">
            <?= htmlspecialchars($_GET['mensaje']); ?>
        </p>
    <?php endif; ?>

    <form action="../../app/controllers/RegistroController.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" min="1" required>
        <br>
        <button type="submit">Registrarse</button>
    </form>

    
 <!-- PHP Footer -->
 <?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
