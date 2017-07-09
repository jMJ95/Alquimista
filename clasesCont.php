<?php 
class elemento{
	private $simbolo = '';
	private $nombre = '';
	private $descripcion = '';
	
	function __set($prop, $val){
		if(isset($this->$prop)){
			$this->$prop = $val;
		}		
		else{
			echo "La propiedad {$prop} no existe";
		}
	}
	function __get($prop){
		if(isset($this->$prop)){
			return $prop;
		}		
		else{
			echo "La propiedad {$prop} no existe";
		}
	}
	
}
class usuario{
	private $usuario = '';
	private $clave = '';
	
	function __set($prop, $val){
		if(isset($this->$prop)){
			$this->$prop = $val;
		}		
		else{
			echo "La propiedad {$prop} no existe";
		}
	}
	function __get($prop){
		if(isset($this->$prop)){
			return $prop;
		}		
		else{
			echo "La propiedad {$prop} no existe";
		}
	}
}	
class adprog{
	public $elementos;
	public $usuarios;
	function __construct(){
		$this->elementos = array();
		$this->usuarios = array();
	}
}
class control{
	private $instancia;
	function __construct(){
		$this->instancia = new adprog();
	}
	function agregar($elem){
		$clase = get_class($elem);
		if($clase == 'usuario'){
			$this->instancia->usuarios[$elem->usuario] = $elem;
		}else if($clase == 'elemento'){
			$this->instancia->elementos[$elem->simbolo] = $elem;
		}else{
			echo "Objeto Invalido";
			return false;
		}
		$this->guardar();
	}
	function guardar(){
		$datos = json_decode($this->instancia);
		file_put_contents('data/archivo.dat',$datos);
		
		function crearArchivo(){
			$ca = fopen('data/archivo.dat','w');
			fwrite($ca,json_encode($datos,JSON_UNESCAPED_UNICODE));
			fclose($ca);
		}
		
	}
}	
?>