<?php 
// echo $result;
    if ($result->num_rows > 0){
?>
<form action="#" method="POST"></form>
    <table border=1;>
        <tr>
            <th>Consecutivo</th><th>Fecha</th><th>Jornada</th><th>Inst_Entrega</th><th>Inst_Recibe </th> <th>obs_Org_Ent</th><th>obs_Equi_Ent</th><th>obs_Mob_Ent</th><th>Estado</th>
        </tr>
        <?php
            while($fila=$result->fetch_object()){
        ?>
        <tr>
            <td>
                <?php echo $fila->Consecutivo;?>
            </td>
            <td>
                <?php echo $fila->Fecha;?>
            </td>
            <td> 
                <?php echo $fila->Jornada;?>
            </td>
            <td>
                <?php echo $fila->Inst_entrega;?>
            </th>
            <th>
                <?php echo $fila->Inst_recibe;?>
            </th>
            <th>
                <?php echo $fila->Obs_org_E;?>
            </td>
            <td>
                <?php echo $fila->Obs_equi_E;?>
            </td>
            <td>
                <?php echo $fila->Obs_mob_E;?>
            </td>
            <td>
                <?php if( $fila->Estado==("Entregado")){
                    ?>
                   <a href="index.php?luna=editEntregados&doc=<?php echo $fila->Consecutivo;?>"> <?php echo $fila->Estado;?></a>
                    <?php
                    }elseif($fila->Estado==("Recibido")){
                        ?>
                            <?php echo $fila->Estado;?>
                        <?php
                    }
                ?><br>
            </td>
        </tr>
  
<?php
    }
?>
<?php
    }
?>  
</table>
<table>
    <tr>
        <td>
            <a href="index.php?luna=cancelar"><input type="button" value="Cancelar"> </a>
        </td>
    </tr>
</table>
</form>