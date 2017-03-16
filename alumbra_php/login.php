<!-- login.php -->
<?php
	include_once('funciones.php');
?>

<div class="container">
	<form action="control.php" method="post" name="login_form" class="">

		<input type="hidden" name="pag" value="login">

		<div class="form-group">
			<label for="usuario">Usuario</label>
			<input type="text" class="form-control input-lg" name="usuario" id="usuario" maxlength="100" placeholder="Ingrese el usuario" value="" required>

		</div>

		<div class="form-group">
			<label for="clave">Clave</label>
			<input type="password" class="form-control input-lg" name="clave" id="clave" maxlength="100" placeholder="Ingrese la clave" value="" required>

		</div>

		<?php
			if ( $_GET['error']=='si' )
			{
			  	$msj = "Verifica los datos";
			  	echo msjdanger($msj);
			}
		?>

		<div class='form-group'>
			<button type='submit' class='btn btn-primary' name='BtnEnviar'>Enviar</button>
		</div>

	</form>
</div>
