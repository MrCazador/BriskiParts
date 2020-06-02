<?php
class CUsuario{
    public $usunom;
    public $usupas;
    public $usuclv;
    public $usufec;
    public $usutie;
    public $ususta;
    
    function CUsuarios(){
        $this->usuclv=$this->pasalea(8);    
    }
}
?>