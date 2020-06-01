<?php 
$pg=1;
if(!empty($_GET["pagina"]) && isset($_GET["pagina"])){
    $pg=$_GET["pagina"];
}
switch($pg){
    case 1:
        //va include al incio
        include('vista/inicio.php');
    break;
    case 2:
        //va include al catalogo
        include('vista/filtro.php');
    break;
    case 3:

    break;
    case 4:
        include('vista/carrito.php');
    break;
    case 5:
        include('vista/sesion.php');    
    break;
}
?>