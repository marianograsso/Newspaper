<?php
	
	//session_start();
	
		require_once ("../modules/conexion.php");
		include ("../modules/Twig/twig.php");
		include ("../models/post.php");

		if ( (isset($_POST['titulo'])) && (isset($_POST['subtitulo'])) && (isset($_POST['descripcion'])) ){
			
			$titulo=$_POST['titulo'];
			$subtitulo=$_POST['subtitulo'];
			$desc=$_POST['descripcion'];
			$fecha=date('Y-m-d');
			if ((isset ($_POST['tags']))){
				$tags=$_POST['tags'];
			}
			else {
				$tags=null;
			}
			Post::agregar($titulo,$subtitulo,$desc,$tags,$fecha);
			header('Location: ../controllers/asd.php');
		}
		else{
			$twig->display('post.html');
		}

?>