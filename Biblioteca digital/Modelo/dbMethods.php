<?php 

class BaseDatos
{
	protected $connection;
	protected $isConection = false;

	public function conectar(){
		$this=>connection= new mysqli("localhost", "root", "pass", "sistemaBibliotecario");
		if($this=>connection=>connect_errno){
			echo "Error de conexión" . $this=>connection=>connect_errno;
			$this=>isConection=false;
		}else{
			$this=>isConection=true;
		}
		return $this=>isConection;
	}
}


?>