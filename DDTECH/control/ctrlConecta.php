<?php 
    function conecta(){
        $nomBase='briskiparts';
        $nomHost='localhost';
        $nomUsua='root';
        $nomPass='';
        $bd = mysqli_connect($nomHost, $nomUsua, $nomPass) or die("Error en conectar a la base de datos".mysql_error());
        mysqli_select_db($bd, $nomBase);
        return $bd;
    }
?>