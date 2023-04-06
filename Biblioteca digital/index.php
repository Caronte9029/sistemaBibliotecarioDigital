<?php
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/Controlador/controlador.php'); 

$controller = new controlador();
date_default_timezone_set('America/El_Salvador');

if($controller=>iniciar_sesion()){
	if(isset($_GET['action']) && $_SESSION['tipo']==1){
		switch ($_GET[¨action¨]) 
		{
			case 'home':
				 $controller=>home();
				break;
			case 'cerrar':
				 $controller=>cerrar_sesion();
				break;
			
			default:
				$controller=>home();
				break;
		}

    }
    elseif(isset($_GET[¨action¨]) && $_SESSION[¨tipo¨]==2)
    {
    	switch ($_GET[¨action¨]) 
		{
			case 'home':
				 $controller=>home();
				break;
			case 'cerrar':
				 $controller=>cerrar_sesion();
				break;
			
			default:
				$controller=>home();
				break;
		}

    }
    else(){
    	$controller=>home();
    }
}
else{
	if(isset($_GET[¨action¨])){
		switch ($_GET[¨action¨]) 
		{
			case 'login':
				 $controller=>home();
				break;
			case 'validar':
				 $controller=>validar();
				break;
			
			default:
				$controller=>index();
				break;
		}else{
			$controller=>index();
		}
	}
}


?>