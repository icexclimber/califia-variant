<?php include __DIR__ . '/includes/header.php'; ?>
    <link rel="stylesheet" href="/api-TestLab/public/css/styles.css">

    <?php
session_start(); // Inicia la sesión

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php"); // Redirige al inicio de sesión si no está autenticado
    exit();
}

// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'nombre_de_tu_base_de_datos');
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtén el ID del usuario autenticado
$usuarioId = $_SESSION['usuario_id'];

// Consulta para obtener los intentos del usuario autenticado
$sql = "
SELECT 
    u.nombre AS usuario,
    e.titulo AS examen,
    i.calificacion,
    i.aciertos,
    i.preguntas_totales,
    i.fecha
FROM 
    Intentos i
INNER JOIN 
    Usuarios u ON i.usuario_id = u.id
INNER JOIN 
    Examenes e ON i.examen_id = e.id
WHERE 
    i.usuario_id = ? AND 
    i.fecha = (
        SELECT MAX(fecha)
        FROM Intentos i2
        WHERE i2.usuario_id = i.usuario_id AND i2.examen_id = i.examen_id
    )
ORDER BY 
    i.fecha DESC;
";

// Prepara y ejecuta la consulta
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $usuarioId);
$stmt->execute();
$result = $stmt->get_result();

// Mostrar resultados
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Usuario</th><th>Examen</th><th>Calificación</th><th>Aciertos</th><th>Preguntas Totales</th><th>Fecha</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['usuario'] . "</td>";
        echo "<td>" . $row['examen'] . "</td>";
        echo "<td>" . $row['calificacion'] . "</td>";
        echo "<td>" . $row['aciertos'] . "</td>";
        echo "<td>" . $row['preguntas_totales'] . "</td>";
        echo "<td>" . $row['fecha'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay resultados.";
}

$conn->close();
?>

   

 <!-- PHP Footer -->
    <?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
