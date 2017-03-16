<!-- calculos.php -->
<?php 
	include_once ("sesion.php");
 ?>


<?php
	$n1 = $_REQUEST['txtn1'];
	$n2 = $_REQUEST['txtn2'];
	$result=$_REQUEST['txtresult'];

?>


<section class="jumbotron">
	<div class="container formulario">
		<form action="" method="" class="">

			<input type="hidden" name="pag" value="calc">

			<div class="form-group">
				<label for="n1">1er Número</label>
				<input type="text" class="form-control input-lg" name="txtn1" id="n1" maxlength="100" placeholder="Ingrese un número" value="<?php echo $n1 ?>">
			</div>

			<div class="form-group">
				<label for="n2">2do Número</label>
				<input type="number" class="form-control input-lg" name="txtn2" id="n2" maxlength="100" placeholder="Ingrese un número" value="<?php echo $n2 ?>">
			</div>
			
			<div class="form-group">
				<center>

				<button type="submit" class="btn btn-primary" name="BtnSuma">
					<span class="glyphicon glyphicon-plus"></span>
				</button>
				<button type="submit" class="btn btn-success" name="BtnResta">
					<span class="glyphicon glyphicon-minus"></span>
				</button>
				<button type="submit" class="btn btn-info" name="BtnMulti">
					<span class="glyphicon glyphicon-asterisk"></span>
				</button>
				<button type="submit" class="btn btn-danger" name="BtnDiv">
					<img src="imagenes/divide.png" style="width: 14px;height: 14px" alt="divide">
				</button>

				</center>
			</div>

			<?php
				include_once('procesarcalculos.php');
			?>

			<div class="form-group">
				<center>
				<?php echo $msjdanger ?>
				<label for="resultado">El Resultado es : </label>
				<input type="text" class="input-lg" name="txtresult" id="resultado" readonly value="<?php echo $result ?>">
				</center>
			</div>
				
		</form>	
	</div>
</section>