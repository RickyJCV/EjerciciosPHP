<?php 
	
	echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ejemplo aprenderaprogramar</title>
	<style type="text/css">
		div{
			text-align: center;
		}
		body{
			background-color:#ff6000;
		}
		*{
			font-size:x-large;
		}
	</style>
</head>
<body>
	<div>
		<form action="recibe.php" method="get">
			<label><span>¿Desea recibir factura?</span><input type="checkbox" name="factura"></label><br><br>
			<label><span>Varón</span><input type="radio" name="sexo" value="Varon"></label>
			<label><span>Mujer</span><input type="radio" name="sexo" value="Mujer"></label><br><br>
			<label><span>Nombre: <input type="text" name="nombre" id="nombre"></span></label><br><br>
			<label><span>Dirección: <input type="text" name="direccion" id="direccion"></span></label><br><br>
			<label><span>Email: <input type="text" name="correo" id="correo"></span></label><br><br>
			<label>
				<select>
					<option value="">Forma de envío</option>
					<option value="Normal" name="envio">Normal</option>
					<option value="PorAvion" name="envio">Por avión</option>
					<option value="Urgente" name="envio">Urgente</option>
				</select>
			</label><br><br>
			<label><input type="submit" value="Enviar"></label>
			<label><input type="reset" value="Limpiar"></label>
		</form>
	</div>
</body>
</html>';

?>