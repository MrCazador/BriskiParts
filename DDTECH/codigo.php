<!DOCTYPE html>
<html>
    <head>
        <link href="css/css.css" rel="stylesheet" type="text/css">
        <link href="css/menuLateral.css" rel="stylesheet" type="text/css">
        <link href="css/menu.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <title>DDTECH</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">

        <link rel="stylesheet" href="css/css.css?v=<?php echo(rand()); ?>" />
        <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
    </head>
    <body>
            <header>
                <div id="contenedorHeader">
                    <nav id="menu">
                    <ul>
                        <li class="BtnMenu"><a href="https://www.google.com/">Inicio</a></li>
                        <li class="BtnMenu"><a href="www.google.com">Armar tu PC</a></li>
                        <li class="BtnMenu"><a href="www.google.com">Carrito</a></li>
                    </ul>
                    <form id="BuscadorDerecha">
                            <div id="contornoBuscador">
                                <div>
                                    <li class="BtnMenu" id="TamañoBuscador">
                                        <input class="BtnMenu" type="search" name="buscador" id="buscador">
                                    </li>
                                    <li class="BtnMenu" id="BtnBuscar">
                                        <a href="https://www.google.com/">Buscar</a>
                                    </li>
                                </div>
                            </div>
                    </form>
                    </nav>
            </header>
                <div class="margenMenu cuerpo100 menuLateral">
                    <div id="recoFixed">
                        <nav>
                            <ul id="nav">
                                <li class="compus" id="TituloMenu"><p>Men&uacute;</p></li>
                                <li class="compus" id="Gamers"><p id="fixed">PC Gamers</p></li>
                                <li class="compus" id="Diseño"><p id="fixed">PC Diseño gráfico</p></li>
                                <li class="compus" id="Simulacion"><p id="fixed">PC Simulacion</p></li>
                                <li class="compus" id="Oficina"><p id="fixed">PC Oficina</p></li>
                                <li class="compus" id="Casas"><p id="fixed">PC Casas</p></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="cuerpo100 producto">
                    <div id="Anuncio">
                        <div id="contAnuncio">
                            
                        </div>
                    </div>
                    <div class="tabla">
                        <!--Codigo que muestra los procutos en la pagina de destacado-->
                        <?php
                        include("conexion.php");
                        $conexion=conectar();

                        $sql="SELECT * from articulos limit 1, 4";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){?>
                            <div class="contenedoresResponsivo cuerpo100 contenedores">
                                <div class="ContArriba">
                                    <p>Nombre: <?php echo $mostrar['Nombre']?></p>
                                    <p>Precio: <?php echo $mostrar['Precio']?></p>
                                    <p>Cantidad: <?php echo $mostrar['Cantidad']?></p>
                                </div>
                                <div class="ContAbajo">
                                    <img src="imagenes/PCGAMER.png">
                                </div>
                                <button id="add">Agregar al carrito</button>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="tabla">
                        <!--Codigo que muestra los procutos en la pagina de destacado-->
                        <?php

                        $sql="SELECT * from articulos limit 1, 4";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar2=mysqli_fetch_array($result)){?>
                            <div class="contenedoresResponsivo cuerpo100 contenedores">
                                <div class="ContArriba">
                                    <p>Nombre: <?php echo $mostrar['Nombre']?></p>
                                    <p>Precio: <?php echo $mostrar['Precio']?></p>
                                    <p>Cantidad: <?php echo $mostrar['Cantidad']?></p>
                                </div>
                                <div class="ContAbajo">
                                    <img src="imagenes/PCGAMER.png">
                                </div>
                                <button id="add">Agregar al carrito</button>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="tabla">
                        <!--Codigo que muestra los procutos en la pagina de destacado-->
                        <?php

                        $sql="SELECT * from articulos limit 1, 4";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){?>
                            <div class="contenedoresResponsivo cuerpo100 contenedores">
                                <div class="ContArriba">
                                    <p>Nombre: <?php echo $mostrar['Nombre']?></p>
                                    <p>Precio: <?php echo $mostrar['Precio']?></p>
                                    <p>Cantidad: <?php echo $mostrar['Cantidad']?></p>
                                </div>
                                <div class="ContAbajo">
                                    <img src="imagenes/PCGAMER.png">
                                </div>
                                <button id="add">Agregar al carrito</button>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="tabla">
                        <!--Codigo que muestra los procutos en la pagina de destacado-->
                        <?php

                        $sql="SELECT * from articulos limit 1, 4";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){?>
                            <div class="contenedoresResponsivo cuerpo100 contenedores">
                                <div class="ContArriba">
                                    <p>Nombre: <?php echo $mostrar['Nombre']?></p>
                                    <p>Precio: <?php echo $mostrar['Precio']?></p>
                                    <p>Cantidad: <?php echo $mostrar['Cantidad']?></p>
                                </div>
                                <div class="ContAbajo">
                                    <img src="imagenes/PCGAMER.png">
                                </div>
                                <button id="add">Agregar al carrito</button>
                            </div>
                        <?php
                        }
                        ?>
                    </div>



                </div>
            <div id="footer">
                Gracias por comprar
            </div>
        </div>
    </body>
</html>
