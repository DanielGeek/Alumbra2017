<!-- formulario.php -->
<?php 
	include_once('funciones.php');
?>
<?php 
	include_once ("sesion.php");
 ?>


<?php
	// $texto=$_GET['texto'];
	// $mensaje=$_GET['mensaje'];
	// $chk1=$_GET['valor1'];
	// $chk2=$_GET['valor2'];
	// $chk3=$_GET['valor3'];
	// $radio=$_GET['radio'];
	// $opcion=$_GET['opcion'];
	// $archivo=$_GET['archivo'];

	// $texto=$_POST['texto'];
	// $mensaje=$_POST['mensaje'];
	// $chk1=$_POST['valor1'];
	// $chk2=$_POST['valor2'];
	// $chk3=$_POST['valor3'];
	// $radio=$_POST['radio'];
	// $opcion=$_POST['opcion'];
	// $archivo=$_POST['archivo'];

	$texto=$_REQUEST['texto'];
	$correo=$_REQUEST['correo'];
	$fecha=$_REQUEST['fecha'];
	$mensaje=$_REQUEST['mensaje'];
	$chk1=$_REQUEST['valor1'];
	$chk2=$_REQUEST['valor2'];
	$chk3=$_REQUEST['valor3'];
	$radio=$_REQUEST['radio'];
	$opcion=$_REQUEST['opcion'];
	$archivo=$_REQUEST['archivo'];

?>


<section class="jumbotron">
	<div class="container formulario">
		<form action="" method="" class="">

			<input type="hidden" name="pag" value="form">

			<div class="form-group">
				<label for="texto">Texto</label>
				<input type="text" class="form-control input-lg" name="texto" id="texto" maxlength="100" placeholder="Ingrese un Texto" value="<?php echo $texto ?>">
			<?php 
				// el isset determina si una variable está definida, es decir posee algún valor, en cuyo caso nos devolvera el valor booleano.
				if ( isset($texto) and ($texto != '') )
				{
					if ( validaAlfaEsp($texto) )
					{
			  			//echo $texto;
					}
					else
					{
			  			$msj = "Dato no es válido";
			  			echo msjwarning($msj);
			  			$errorendato = 1;
					}
				}
				else
				{
					if ( isset($texto) and ($texto == '') )
					{
	    				$msj = "Campo obligatorio";
			  			echo msjdanger($msj);
						$campoobligado = 1;
					}
				}
			?>
			
			</div>

			<div class="form-group">
				<label for="correo">Correo Electrónico</label>
				<input type="email" class="form-control input-lg" name="correo" id="correo" maxlength="100" placeholder="Ingrese un Correo Electrónico" value="<?php echo $correo ?>">
			<?php
				// el isset determina si una variable está definida, es decir posee algún valor, en cuyo caso nos devolvera el valor booleano.
				if ( isset($correo) and ($correo != '') )
				{
					if ( validarDirCorreoElec($correo) )
					{
			  			//echo $correo;
					}
					else
					{
			  			$msj = "Correo no es válido";
			  			echo msjwarning($msj);
			  			$errorendato = 1;
					}
	    		}
				else
				{
					if ( isset($correo) and ($correo == '') )
					{
	    				$msj = "Campo obligatorio";
			  			echo msjdanger($msj);
						$campoobligado = 1;
					}
				}
			?>			
			</div>

			<div class="form-group">
				<label for="fecha">Fecha</label>
				<input type="date" class="form-control input-lg" name="fecha" id="fecha" maxlength="100" placeholder="Ingrese una Fecha (dd-mm-aaaa)" value="<?php echo $fecha ?>">
			<?php
				// el isset determina si una variable está definida, es decir posee algún valor, en cuyo caso nos devolvera el valor booleano.
				if ( isset($fecha) and ($fecha != '') )
				{
					$yearsmin = 100;
					$yearsmax = 20;
					if (datecheck($fecha)===false or verificaryears($fecha,$yearsmin,$yearsmax)===false )
					{
						//echo $fecha;
						$msj = "La fecha no es correcta";
			  			echo msjwarning($msj);
						$errorendato = 1;
					}else
					{
						// echo $fecha;
					}
			    }
				else
				{
					if ( isset($fecha) and ($fecha == ''))
					{ 
			    		$msj = "Campo obligatorio";
			  			echo msjdanger($msj);
						$campoobligado = 1;
					}
				}
			?>			
			</div>
			
			<div class="form-group">
				<label for="mensaje">Mensaje: </label>
				<textarea class="form-control" name="mensaje" id="mensaje" maxlength="140" placeholder="Escribe tu mensaje"><?php echo $mensaje ?></textarea>
			<?php
				// el isset determina si una variable está definida, es decir posee algún valor, en cuyo caso nos devolvera el valor booleano.
				if ( isset($mensaje) and ($mensaje != '') )
				{
					if ( validaAlfaEspecial($mensaje) )
					{
			  			//echo $mensaje;
					}
					else
					{
			  			$msj = "Dato no es válido";
			  			echo msjwarning($msj);
			  			$errorendato = 1;
					}
	    		}
				else
				{
					if ( isset($mensaje) and ($mensaje == '') )
					{
	    				$msj = "Campo obligatorio";
			  			echo msjdanger($msj);
						$campoobligado = 1;
					}
				}
			?>			
			</div>

			<div class="form-group">
				<label class="checkbox-inline">
					<input type="checkbox" name="valor1" id="valor1" 
					<?php 
						if ( $chk1 == 'on' )
						{
							echo " checked ";
						}
					?>
					> Valor #1
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" name="valor2" id="valor2"
					<?php 
						if ( $chk2 == 'on' )
						{
							echo " checked ";
						}
					?>
					> Valor #2
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" name="valor3" id="valor3"
					<?php 
						if ( $chk3 == 'on' )
						{
							echo " checked ";
						}
					?>
					> Valor #3
				</label>
				<?php
					if ( isset($_REQUEST['BtnEnviar']) )
					{
						if ( $chk1 == 'on' )
						{
							
						}elseif ( $chk2 == 'on' ) {
							
						}elseif ( $chk3 == 'on' ) {
							
						}else{
								$msj = "escoja su opción";
									echo msjdanger($msj);
								$campoobligado = 1;
						}
					}
				?>
			</div>
			
			<div class="form-group">
				<label for="radio1">
					<input type="radio" name="radio" id="radio1" value="radio1"
					<?php 
						if ( $radio == 'radio1' )
						{
							echo " checked ";
						}
					?>
					>Radio #1
				</label>
				<label for="radio2">
					<input type="radio" name="radio" id="radio2" value="radio2"
					<?php 
						if ( $radio == 'radio2' )
						{
							echo " checked ";
						}
					?>
					>Radio #2
				</label>
				<label for="radio3">
					<input type="radio" name="radio" id="radio3" value="radio3" disabled>Radio #3
				</label>
				<?php
					if ( isset($_REQUEST['BtnEnviar']) and ($radio == '') )
					{
						$msj = "escoja su opción";
			  			echo msjdanger($msj);
						$campoobligado = 1;
					}
				?>
			</div>
			
			<div class="form-group">
				<label for="option">Elige una opción: </label>
				<select class="form-control" name="opcion" id="opcion">
					<option value=""> ---- </option>
					<option value="opcion1"
					<?php 
						if ( $opcion == 'opcion1' )
						{
							echo " selected ";
						}
					?>
					>Opción #1</option>
					<option value="opcion2"
					<?php 
						if ( $opcion == 'opcion2' )
						{
							echo " selected ";
						}
					?>
					>Opción #2</option>
					<option value="opcion3"
					<?php 
						if ( $opcion == 'opcion3' )
						{
							echo " selected ";
						}
					?>
					>Opción #3</option>
					<option value="opcion4"
					<?php 
						if ( $opcion == 'opcion4' )
						{
							echo " selected ";
						}
					?>
					>Opción #4</option>
				</select>
				<?php
					if ( isset($opcion) and ($opcion == '') )
					{
						// echo "<span class='error'>escoja su opción</span> ";
						$msj = "escoja su opción";
			  			echo msjdanger($msj);
						$campoobligado = 1;
					}
				?>
			</div>			
			
			<div class="form-group">
				<label for="archivo">Archivo:</label>
				<input type="file" name="archivo" id="archivo">
				<p class="help-block">Máximo 10Mb</p>	
			</div>
			
  			
  			<?php
			// Boton Enviar
			if ( isset ($_REQUEST['BtnEnviar']) )
			{
				if ( $campoobligado == 1 or $errorendato == 1 )
				{
					echo "
					<div class='form-group'>
					<button type='submit' class='btn btn-primary' name='BtnEnviar'>Enviar</button>
					</div>
					";
				}
				else
				{
					$msj = "Datos enviados exitosamente";
			  		echo msjsuccess($msj);
				}
			}
			else
			{
				echo "
				<div class='form-group'>
				<button type='submit' class='btn btn-primary' name='BtnEnviar'>Enviar</button>
				</div>
				";
			}
			?>

  			
				
				
		</form>	
	</div>
</section>