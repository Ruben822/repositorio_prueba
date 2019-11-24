<?php
    class AdminAmbiente{
        public function  regBitacora(Ambiente $ambiente){
            $conexion = new Conexion();
            $conexion->abrir();
            $fecha=$ambiente->obtenerFecha();
            $jornada=$ambiente->obtenerJornada();
            $inst_e=$ambiente->obtenerInst_entrega();
            $inst_r=$ambiente->obtenerInst_recibe();
            $obsOrgE=$ambiente->obtenerObs_OrgE();
            $obsOrgeR=$ambiente->obtenerObs_OrgR();
            $obsequiE=$ambiente->obtenerObs_EquiE();
            $obsequiR=$ambiente->obtenerObs_EquiR();
            $obsmobE=$ambiente->obtenerObs_mobE();
            $obsmobR=$ambiente->obtenerObs_mobR();
            $estado="Entregado";
            $sql="INSERT INTO ambiente VALUES (null,'$fecha','$jornada','$inst_e','$inst_r','$obsOrgE',
            '$obsOrgeR','$obsequiE','$obsequiR','$obsmobE','$obsmobR','$estado')";
            $conexion->consulta($sql);
            $conexion->cerrar();
        }
        public function consultarReportes(){
            $conexion = new Conexion();
            $conexion->abrir();
            $sql="SELECT * FROM ambiente";
            $result=$conexion->consulta($sql);
            $result = $conexion->obtenerResult();
            $conexion->cerrar();
            return $result;
        }
        public function consultarConsecutivo($consec){
            $conexion= new Conexion();
            $conexion->abrir();
            $sql="SELECT * FROM ambiente WHERE Consecutivo='$consec'";
            $conexion->consulta($sql);
            $result=$conexion->obtenerResult();
            $conexion->cerrar();
            return $result;
        }
        public function actualizar($consec,$instR,$orgR,$equiR,$mobR){
            $conexion= new Conexion();
            $conexion->abrir();
            $estado="Recibido";
            $sql="UPDATE `ambiente` SET Inst_recibe='$instR', Obs_org_R='$orgR', Obs_equi_R='$equiR', Obs_mob_R='$mobR', Estado='$estado' WHERE Consecutivo='$consec'";
            // echo $sql;
            $conexion->consulta($sql);
            $conexion->cerrar();
        }
        
    }
?>