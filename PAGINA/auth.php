<?php
$usuario_admin = "administador";  // Cambia esto a tu nombre de usuario permitido
$clave_admin = "12345";  // Cambia esto a tu contraseña permitida

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    if ($usuario === $usuario_admin && $clave === $clave_admin) {
        echo "Inicio de sesión exitoso. Bienvenido, $username.";
    } else {
        echo "Inicio de sesión fallido. Verifica tu usuario y contraseña.";
    }
}
?>
