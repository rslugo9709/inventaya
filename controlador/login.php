<?php
    /* session_start();
    $_SESSION['user'] = $username;
    header("Location: home.php");
    exit;
    */
    // 1. Recibir datos del formulario
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // 2. Validar que no estén vacíos
    if (empty($username) || empty($password)) {
        echo "Todos los campos son obligatorios";
        exit;
    }

    // 3. Validación (ejemplo simple)
    if ($username === 'admin' && $password === 'testing1') {

        // 4. Redirigir si es correcto
        header("Location: /aca_pa/vistas/home.php");
        exit;

    } else {
        echo "Usuario o contraseña incorrectos";
    }

?>