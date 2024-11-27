<?php include __DIR__ . '/includes/header.php'; ?>
    <link rel="stylesheet" href="/api-TestLab/public/css/styles.css">

    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../public/css/estilos.css">
</head>
<body>
    <h1>Iniciar Sesión</h1>

    <!-- Mensaje de error -->
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <form action="../../app/controllers/LoginController.php" method="POST">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>

 <!-- PHP Footer -->
 <?php include __DIR__ . '/includes/footer.php'; ?>
