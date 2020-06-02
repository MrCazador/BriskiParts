<?php
$nombre=$_POST["Nombre"];
$apelli=$_POST["Apellido"];
$correo=$_POST["Correo"];
$estado=$_POST["Estado"];
$ciudad=$_POST["Ciudad"];
//validacion para nombre
if(isset($nombre) && !empty($nombre)){
    $nombre=$_POST["Nombre"];
}
//validacion para apellido
if(isset($apelli) && !empty($apelli)){
    $apepat=$_POST["Apellido"];
}
//validacion correo
if(isset($correo) && !empty($correo)){
    $correo=$_POST["Correo"];
}
//validacion para estado
if(isset($estado) && !empty($estado)){
    $ciudad=$_POST["ciudad"];
}
//validacion para ciudad
if(isset($ciudad) && !empty($ciudad)){
    $ciudad=$_POST["ciudad"];
}
//valida para su registro
if(strlen($nombre)>=3 && strlen($apepat)>=3 && strlen($apemat)>=3 && strlen($correo)>=7){
    $usu->usunom=$correo;
    if($usu->registro()){
        $cli->clvusu=$usu->usuclv;
        $cli->nombre= $nombre;
        $cli->apepat=$apepat;
        $cli->apemat=$apemat;
        $cli->correo=$correo;
        $cli->pais=$pais;
        $cli->estado=$estado;
        $cli->ciudad=$ciudad;
        $cli->direcc=$direcc;
        $cli->fecnac=$fecnac;
        $cli->sexo=$sexo;
        $cli->codpos="";
        $cli->telefo="";
        $cli->status=1;
        if($cli->guardar()){
            echo "guardo";
        }
    }
    else{
        echo "no creo perfil";
    }
}
else{
    echo "no cumple validacion";
}
?>