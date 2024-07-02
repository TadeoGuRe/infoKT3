<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fuente insertada para logo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lora:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- Fuente insertada para letra general -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lora:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- Hoja de estilo -->
    <link rel="stylesheet" href="../../assets/css/styles_vista_principal.css?v=1.3">
    <title>Vista principal</title>
</head>

<body>
    <header>
        <div class="caja1">
            <img src="../../assets/img/logo.png" alt="logo" class="logo">
            <p class="nombre_logo">infoKT</p>
        </div>
        <div class="caja2">
            <nav class="caja3">
                <a href="#ruta_de_aprendizaje" class="link_superior" title="Ruta de aprendizaje">Ruta de aprendizaje</a>
                <a href="#ruta_de_aprendizaje_secundaria" class="link_superior" title="Cursos opcionales">Cursos opcionales</a>
                <a href="../acerca_nosotros/index.php" class="link_superior" title="Acerca de">Acerca de</a>
                <a href="../perfil/index.php" class="link_superior" title="Perfil">Perfil</a>
            </nav>
        </div>
    </header>
<!-- FINALIZA ACÁ -->

    <main>
        <div class="caja4">
            <h1>Aprende todo para la ingeniería</h1>
            <p class="descripcion">Aquí encontrarás todo lo necesario para seguir estudiando los temas de tu ingeniería que<br>
            no comprendas o no te queden claros a tu propio ritmo.</p>
        </div>
        <h2 id="ruta_de_aprendizaje">Ruta de aprendizaje principal</h2>
        <div class="cursos_principales">
            <div class="curso_principal">
                <a href="../cursos/cursos_principales/curso_html/index.php" title="Curso de HTML">Curso de <br>HTML</a>
                <img src="../../assets/img/HTML.png" alt="HTML">
            </div>
            <div class="curso_principal">
                <a href="../cursos/cursos_principales/curso_css/index.php" title="Curso de CSS">Curso de <br>CSS</a>
                <img src="../../assets/img/CSS.png" alt="CSS">
            </div>
            <div class="curso_principal">
                <a href="../cursos/cursos_principales/curso_javascript/index.php" title="Curso de JavaScript">Curso de <br>JavaScript</a>
                <img src="../../assets/img/JavaScript.png" alt="JavaScript">
            </div>
            <div class="curso_principal">
                <a href="../cursos/cursos_principales/curso_sql/index.php" title="Curso de SQL">Curso de <br>SQL</a>
                <img src="../../assets/img/SQL.png" alt="SQL">
            </div>
        </div>
        <!--QUEDA PENDIENTE -->
        <h2 id="ruta_de_aprendizaje_secundaria">Ruta de aprendizaje secundaria</h2>
        <div class="cursos_secundarios">
            <div class="curso_secundario">
                <a href="../cursos/cursos_complementarios/curso_ingles/index.php" title="Curso de inglés">Curso de <br>Inglés</a>
                <img src="../../assets/img/ingles.png" alt="Inglés">
            </div>
            <div class="curso_secundario">
                <a href="../cursos/cursos_complementarios/curso_matematicas/index.php" title="Curso de matemáticas">Curso de <br>Matemáticas</a>
                <img src="../../assets/img/matematicas.png" alt="Matemáticas">
            </div>
            <div class="curso_secundario">
                <a href="../cursos/cursos_complementarios/curso_redes/index.php" title="Curso de redes">Curso de <br>redes</a>
                <img src="../../assets/img/redes.png" alt="Redes">
            </div>
        </div>
    </main>
    <footer>
        <div>
            <p>© Todos los derechos reservados</p>
        </div>
        <div>
            <p>Adriel Isai Rodríguez Pacheco</p>
            <p>Brian de Jesús Carpizo Fierro</p>
        </div>
        <div>
            <p>Josue Anaya Canseco</p>
            <p>Tadeo Esaú Gutiérrez Reyes</p>
        </div>
    </footer>
</body>

</html>