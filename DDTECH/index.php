<?php
require_once('control/ctrlConecta.php');
require_once('modelo/CUsuario.php');
require_once('modelo/CCliente.php');
require_once('modelo/CProducto.php');
$usuario=new CUsuario();
$cliente=new CCliente();
$producto=new CProducto();
?>

<!DOCTYPE html>
<html>
	<head>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&family=Fira+Sans+Condensed:ital@1&display=swap" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <title>DDTECH</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
        <link rel="stylesheet" href="css/index.css?v=<?php echo(rand()); ?>" />
        <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
    </head>
    <body>
        <?php
            include('vista/menu.php');
        ?>
        <?php
            include('control/ctrlCont.php');
        ?>
        </div>
        <footer class="Presentacion">
            <h1>Recuerda Seguirnos en nuestras redes sociales</h1>
        </footer>
    </body>
</html>
