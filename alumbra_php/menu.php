<!-- menu.php -->

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
<!-- Necesita paddin-top en Css -->
<!-- <nav class="navbar navbar-default navbar-fixed-bottom"> -->
<!-- <nav class="navbar navbar-default navbar-static-top"> -->
	<div class="container-fluid">
		<div class="navbar-header">
			<!-- Menú para Móviles -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
				<span class="sr-only">Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a href="index.php" class="navbar-brand">URBE</a>
		</div>

		<div class="collapse navbar-collapse" id="navbar-1">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
					HTML 5
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#html5" data-toggle="modal">HTML5</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
					CSS3
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#css3" data-toggle="modal">CSS3</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
					Bootstrap
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#bootstrap" data-toggle="modal">Bootstrap</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
					Javascript
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#js" data-toggle="modal">Javascript</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
					jQuery
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#jq" data-toggle="modal">jQuery</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
					PHP
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#php" data-toggle="modal">PHP</a></li>
						<li class="divider"></li>
						<li><a href="index.php?pag=form">Formulario</a></li>
						<li><a href="index.php?pag=calc">Calculos</a></li>
					</ul>
				</li>
			</ul>
		
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?php 
						session_start();

						if ( $_SESSION['usuario'] == 'user' )
						{
							echo "
							<li class='dropdown'>
								<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button'>
								<span class='glyphicon glyphicon-user'></span>
								".$_SESSION['usuario']."
								<span class='caret'></span>
								</a>
								<ul class='dropdown-menu'>
									<li>
										<a href='#' >Perfil</a>
									</li>
									<li class='divider'></li>
									<li>
										<a href='salir.php'>Salir</a>
									</li>
								</ul>
							</li>
							";
						}
						else
						{
							echo "<a href='index.php?pag=login'>Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
	</div>
</nav>