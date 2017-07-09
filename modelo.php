<?php

$bjplan11 = new plantilla();
class plantilla{
	
	function __construct(){
?>
	<html>
	<head>
		<title>El Alquimista</title>
		 <link rel="stylesheet" type="text/css" href="cssIndex.css"/>
	</head>
	<body style="background:url(Images/loglink.jpg);">
		<title>El Alquimista</title>
		<form method="POST"id="formu" action="paginaPrincipal.php">
			<table id="tpp" >
				<div id="encabezado" align="center">Alquimista</div>			    	
				<form id="formulario"> 
					<div id="logo"></div>
						<ul id="menu" align="center" class="menu">
							<li type="button" align="center" id="pagpri"   ><a href="paginaPrincipal.php"/>Pagina Pincipal</li>
							<li type="button" align="center" id="verelem"  ><a href="verElementos.php"/>Ver Elementos</li>
							<li type="button" align="center" id="adminelem"><a href="administrarElementos.php"/>Administrar Elementos</li>
						</ul>
				</form>
				<div id="cuerpo">		
<?php
	}

	function __destruct(){
?>
				</div>		
				<div id="pie" align="center">Hecho por: <a href="https://www.facebook.com/JIMJ200895">JIMJ</a></div>		
			</table>
		</form>
	</body>
</html>	
<?php
	
}
}