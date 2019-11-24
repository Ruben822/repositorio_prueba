<?php 
	class Controlador{
		public function mostrarPagina($var)
		{
			require_once $var;
		}
		public function regBitacora($jornada,$instE,$obsorgE,$obsequiE,$obsmobE){
				$fecha= date("Y-m-d h:i:s ");
				$ambiente=new Ambiente($fecha,$jornada,$instE,"",$obsorgE,"",$obsequiE,"",$obsmobE,"","");
				$adminAmbiente = new adminAmbiente();
				$adminAmbiente->regBitacora($ambiente);
				require_once "Vista/html/inicio.php";
		}
		public function consultarReportes(){
			$adminAmbiente = new adminAmbiente();
			$result= $adminAmbiente->consultarReportes();
			require_once "Vista/html/consultaReportes.php";
		}	
		public function editEntregados($consec){
			$adminAmbiente = new adminAmbiente();
			$result=$adminAmbiente->consultarConsecutivo($consec);
			require_once "Vista/html/actualizarReporte.php";
		}
		public function actualizar($consec,$instR,$orgR,$equiR,$mobR){
			$adminAmbiente = new adminAmbiente();
			// echo $consec,$instR,$orgR,$equiR,$mobR;
			$adminAmbiente->actualizar($consec,$instR,$orgR,$equiR,$mobR);
			require_once "Vista/html/inicio.php";
		}
	}


 ?>