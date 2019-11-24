<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>inicio</title>
	<script type="text/javascript" src="Vista/jquery/jquery.min.js"></script>
    <script src="Vista/jquery/jqueryui/jquery-ui.js" type="text/javascript"></script>
    <link href="Vista/jquery/jqueryui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="Vista/js/script.js"></script>
</head>
<body>
	<h1>FORMULARIO</h1>
	<form action="index.php?luna=regBita" method="POST" >
	<table>
		<tr>
			<td>Jornada:</td>
			<td><select name="jornada" id="jornada">
				<option value="#">--Seleccione--</option>
				<option value="Mañana" >Mañana</option>
				<option value="Tarde" >Tarde</option>
				<option value="Noche" >Noche</option>
				<option value="Fin_de_semana" >Fin de Semana</option>
			</select></td>
		</tr>
		<tr>
			<td>Instructor entrega</td>
			<td><input type="text" name="instE" id="instE"></td>

		</tr>
		<tr>
			<td>Observacion organizacion Entrega</td>
			<td><input type="text" name="obsorgE" id="obsorgE"></td>
		</tr>
		<tr>
			<td>Observacion Equipo Entrega</td>
			<td><input type="text" name="obsquiE" id="obsquiE"></td>
		</tr>
		<tr>
			<td>Observacion Mobilario Entrega</td>
			<td><input type="text" name="obsmobE" id="obsmobE"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="enviar" value="Enviar"></td>
		</tr>
	</table>
</form>
<table>
	<tr>
		<td>
			<a href="index.php?luna=consulReportes"><input type="button" value="Consultar"></a>
		</td>
	</tr>
</table>
</body>
</html>