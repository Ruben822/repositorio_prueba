<?php 

class Ambiente 
{
	private $fecha;
	private $jornada;
	private $inst_entrega;
	private $inst_recibe;
	private $obs_orgE;
	private $obs_orgR;
	private $obs_equiE;
	private $obs_equiR;
	private $obs_mobE;
	private $obs_mobR;
	private $estado;
	public  function __construct($fecha,$jornada,$inst_entrega,$inst_recibe,$obs_orgE,$obs_orgR,$obs_equiE,$obs_equiR,$obs_mobE,$obs_mobR,$estado)
	{
	$this->fecha=$fecha;
	$this->jornada=$jornada;
	$this->inst_entrega=$inst_entrega;
	$this->inst_recibe=$inst_recibe;
	$this->obs_orgE=$obs_orgE;
	$this->obs_orgR=$obs_orgR;
	$this->obs_equiE=$obs_equiE;
	$this->obs_equiR=$obs_equiR;
	$this->obs_mobE=$obs_mobE;
	$this->obs_mobR=$obs_mobR;
	$this->estado=$estado;

	}

	public function obtenerFecha(){
		return $this->fecha;
	}

	public function obtenerJornada(){
	return $this->jornada;
	}

	public function obtenerInst_entrega(){
		return $this->inst_entrega;
	}
	public function obtenerInst_recibe(){
		return $this->inst_recibe;
	}
	public function obtenerObs_OrgE(){
		return $this->obs_orgE;
	}
	public function obtenerObs_OrgR(){
		return $this->obs_orgR;
	}
	public function obtenerObs_EquiE(){
         return $this->obs_equiE;
	}
	public function obtenerObs_EquiR(){
		return $this->obs_equiR;
   }
   public function obtenerObs_mobE(){
	return $this->obs_mobE;
	}
	public function obtenerObs_mobR(){
   return $this->obs_mobR;
	}
	public function obtenerEstado(){
		return $this->estado;
	}


	


	
}


 ?>