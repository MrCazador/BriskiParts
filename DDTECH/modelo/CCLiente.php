<?php 
class CCliente{
    public $clave;
    public $nombre;
    public $apepat;
    public $apemat;
    public $correo;
    public $pais;
    public $estado;
    public $ciudad;
    public $direcc;
    public $codpos;
    public $telefo;
    public $fecnac;
    public $sexo;
    public $status;
    public $clvusu;
    
    public function CClientes(){
        $this->clave = $this->pasalea(8);
    }
}
?>