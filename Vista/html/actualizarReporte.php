<?php
     while($fila=$result->fetch_object()){
?>
<form action="index.php?luna=actua" method="POST">
    <table>
        <tr>
            <td>N° Consecutivo</td>
            <td><input type="hidden" name="consec" value="<?php echo $fila->Consecutivo;?>"> <?php echo $fila->Consecutivo;?></td>
        </tr>
        <tr>
            <td>Fecha:</td>
            <td><?php echo $fila->Fecha;?></td>
        </tr>
        <tr>
            <td>Inst. Recibe</td>
            <td><input type="text" name="instRec" id="instRec"></td>
        </tr>
        <tr>
            <td>Observaciones sobre la organizacion recibida</td>
            <td> <input type="text" name="orgRec" id="orgRec"> </td>
        </tr>
        <tr>
            <td>Observacion sobre los equipos recibidos</td>
            <td> <input type="text" name="equiRec" id="equiRec"> </td>
        </tr>
        <tr>
            <td>Observacion sobre la mobiliaria recibida del ambiente</td>
            <td> <input type="text" name="mobRec" id="mobRec"> </td>
        </tr>
        <tr>
            <td colspan="2">
            <input type="submit" value="Actualizar">
            </td>
        </tr>
        <?php
     }
     ?>
    </table>
</form>