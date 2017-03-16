<!-- control.php -->

<?php 
	if( $_REQUEST['usuario']=='user' && $_REQUEST['clave']=='1234' )
	{
		// Inicio la sesión
		session_start();
		
		// Declaro las variables de sesión
		$_SESSION['autentificado'] = true;
		$_SESSION['usuario'] = $_REQUEST['usuario'];
		
		header("Location: index.php?pag=calc");
	}
	else
	{
		header("Location: index.php?pag=login&error=si");
	}
 ?>