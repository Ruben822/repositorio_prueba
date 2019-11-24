<?php 
	require_once "Controlador/Controlador.php";
	require_once "Modelo/Conexion.php";
	require_once "Modelo/ambiente.php";
	require_once "Modelo/AdminAmbiente.php";

	$control= new Controlador();
	if (isset($_GET["luna"])) {
		if ($_GET["luna"]=="regBita") {
				$control->regBitacora($_POST["jornada"],
				$_POST["instE"],
				$_POST["obsorgE"],
				$_POST["obsquiE"],
				$_POST["obsmobE"]
			);
		}elseif ($_GET["luna"]=="consulReportes") {
			$control->consultarReportes();
		}elseif ($_GET["luna"]=="editEntregados") {
			$control->editEntregados($_GET["doc"]);
		}elseif ($_GET["luna"]=="actua") {
			// echo"ji";
				$control->actualizar($_POST["consec"],
				$_POST["instRec"],
				$_POST["orgRec"],
				$_POST["equiRec"],
				$_POST["mobRec"]
			);
		}elseif ($_GET["luna"]=="cancelar") {
			$control->mostrarPagina("Vista/html/inicio.php");
		}
	}else {
		$control->mostrarPagina("Vista/html/inicio.php");
	}

 ?>