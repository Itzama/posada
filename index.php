<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Navbar Itz</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
		<ul id="navbar">
			<li class="menufirst"><a href="#" title="index"><img id="logo" src="logo.jpg"></a></li>
			<li class="menufirst"><a href="Primero" title="primero">Inicio</a></li>
			<li class="menufirst"><a href="Segundo" title="Segundo">Conócenos</a></li>
			<li class="menufirst"><a href="Tercero" title="Tercero">Contáctanos</a></li>
			<li class="menufirst submenu"><a href="Cuarto" title="Cuarto">Equipo de trabajo</a>
				<ul class="submenu">
					<li class="submenuItem submenu"><a href="cuarto1">Area recepcion</a>
						<ul class="subsecundario"><li class="subsecundario"><a href="cuarto1.1">Gerencia</a></li></ul>
					</li>
					<li class="submenuItem"><a href="cuarto2">Area cocina</a></li>
					<li class="submenuItem"><a href="cuarto3">Area limpieza</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</body>
<style type="text/css">
/*rgb(153, 163, 164)
rgb(178, 186, 187)
rgb(204, 209, 209)
rgb(229, 232, 232)
rgb(242, 244, 244)
rgb(237, 237, 237)*/
	body{
		width: 100%;
		margin: 0px;
		padding: 0px;
	}
	nav{
		background-color: rgba(237,237,237,.9);
		margin: 0px;
		padding: 0px;
		position: fixed;
		width: 100%;
	}
	li{
		list-style: none;
		margin: 0px;
		padding: 0px;
	}
	a{
		display: inline-block;
		padding: 2px;
		text-decoration: none;
		color:black;

	}
	a:hover{
		/*color:white;*/
		/*background-color: black;*/
		opacity: .5;
	}
	ul{
		margin: 0px;
		padding: 0px;
	}
	img#logo{
		width: 50px;
	}
	ul#navbar{
		display: inline-block;
		margin: 0px;
	}
	li.menufirst{
		/*border:1px solid green;*/
		display: inline-block;
	}
	li.menufirst.submenu:hover ul.submenu{
		display: inline-block;
		position: absolute;
		padding: 0px;
		background-color: rgba(237,237,237,.8);
	}
	li.submenuItem.submenu:hover ul.subsecundario{
		display: inline-block;
		background-color: rgba(237,237,237,.7);
	}
	ul.submenu{
		display: none;
	}
	ul.subsecundario{
		display: none;
	}
</style>
</html>