<?php
$conn = new mysqli('localhost', 'root', '', 'TestLab');

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa";
}
?>
