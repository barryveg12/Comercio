<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar productos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styleindex.css">
    
</head>
<body>
    <header class="row">
        <div class="sesion">
            <button>Iniciar Sesión</button>
        </div>
        <?php
            include_once('sections/logo.inc');
            include_once ('sections/header.inc');
        ?>
    </header>
    <br>
    <br>

    <div class="container">
        <div id="resultado" class="row"></div>
    </div>

    <script>
       
    </script>

    <footer class="row pie">
        <?php
            include_once ('sections/foot.inc');
        ?>
    </footer>
    <script src="js/script"></script>
</body>
</html>
