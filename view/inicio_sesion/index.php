<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="../../assets/css/styles_inicio_sesion.css">
    <link rel="stylesheet" href="../../assets/css/styles_inicio_sesion.css">
    <!-- Fuente insertada para logo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lora:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- Fuente insertada para letra general -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lora:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title>Iniciar sesión</title>
</head>

<body>
    <header>
        <img src="../../assets/img/logo.png" alt="logo" class="logo">
        <p class="nombre_logo">infoKT</p>
    </header>
    <main>
        <div class="descripcion">
            <p>Ingresa tu correo para iniciar<br> sesion o crea una cuenta</p>
        </div>
        <div class="formulario">
            <form action="../vista_principal/index.php">
                <input type="email" placeholder="Ingresa tu correo" class="correo" required>
                <br>
                <input type="password" placeholder="Ahora tu contraseña" class="contraseña" required>
                <br>
                <button type="submit">Ingresar</button>
                <a href="#">¿No tienes cuenta?</a>
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>