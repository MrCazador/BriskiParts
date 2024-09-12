<?php
class CProducto{
		public $clave;
		public $nombre;
		public $descri;
		public $catego;
		public $precio;
		public $fecreg;
        public $existe;
        
        public $productos;
        //Método constructor
	function CProducto(){
		$this->productos = array();
	}

	public function mostrarProductos(){
		$bandera = false;
		$consulta = 'select * from tb_productos';
		if($consultaSQL = mysqli_query(conecta(), $consulta)){
			$n=0;
			while ($fila=mysqli_fetch_assoc($consultaSQL)) {
				$this->productos[$n][0] = $fila["proclave"];
				$this->productos[$n][1] = $fila["pronombre"];
				$this->productos[$n][2] = $fila["prodescripcion"];
				$this->productos[$n][3] = $fila["proprecio"];
				$this->productos[$n][4] = $fila["procantidad"];
				$this->productos[$n][5] = $fila["proimagen"];
				$n++;
			}
			if(count($this->productos)>=1){
				$bandera = true;
			}
		}
		return $bandera;
	}
}
?>