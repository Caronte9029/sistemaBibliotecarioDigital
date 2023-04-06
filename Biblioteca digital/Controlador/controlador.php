<?php
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/Modelo/obtenerdatos.php'); 

class controlador{
	public static $rutaApp="/sistema.web";
	public function iniciar_sesion(){
		if(!isset($_SESSION)){
			session_start();
		}

		if(isset($_SESSION['id_usuario'])){
			return true;
		}
	}

	public function home(){
		include_once(__dir__."/../Vistas/inicio/inicio.php");
	}
	public function login(){
		include_once(__dir__."/../Vistas/login/login.php");
	}
	public function validar(){
		include_once(__dir__."/../Vistas/login/code/validar.php");
	}

	function cerrar_sesion()
	{
		if(!isset($_SESSION)){
			session_start();
		}
		session_destroy();
		header('Location: '.controlador::$rutaApp."index.php/login/login.php")
	}

	public function index(){
		include_once(__dir__."/../Vistas/login/login.php")
	}
}

?>