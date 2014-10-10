<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>practica</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery-1.11.1.js"></script>
	<script src="js/principal.js"></script>
</head>
<body>
	<div class="mensaje">
		<?php require_once 'clases/Persona.php'; 
		$per=new Persona();

		echo $per->crearTabla();
		
		?></div>
	<header>
		<div class="cuadrado">
			<fieldset>
				<legend>ingresar usuario</legend>
				<form action="#" method="GET" class="form-horizontal">
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">nombres:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nombre" id="nombre">
						</div>
				
				
					</div>
				
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">apellidos:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="apellidos" id="apellidos">
						</div>
				
				
					</div>
				
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">cedula:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="cedula" id="cedula">
						</div>
				
				
					</div>
				
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">sexo:</label>
						<div class="col-sm-10">
							<input type="radio" class="radio radio-inline" value="M" name="sexo">M
							<input type="radio" class="radio radio-inline" value="F" name="sexo">F
						</div>
				
				
					</div>
				
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">correo:</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="correo" id="correo">
						</div>
				
				
					</div>
				
					<input type="submit" class="btn btn-success" value="aceptar">	
				</form>
			</fieldset>
		</div>
	</header>
	<div class="triangulito">
		
	</div>
	<article>
		<div class="table">
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Cedula</th>
						<th>Sexo</th>
						<th>Correo</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>
	</article>
</body>
</html>