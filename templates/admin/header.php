<link rel="stylesheet" href="//localhost/pomu/css/admin.css">
<link rel="shorcut icon" href="//localhost/pomu/img/policia_municipal_logo.ico">
<link href='http://fonts.googleapis.com/css?family=Montserrat|Bitter:700|Bree+Serif|Muli' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//localhost/pomu/fonts/style.css">
</head>
<body>
</head>
<body>
	<header class="principal">
		<div class="logo">
			<img src="//localhost/pomu/img/policia_municipal_logo.png" height="150" width="150" alt="">
		</div>
		<div class="session">
			   <strong><?php echo $mensaje_admin; ?></strong>
			   <br>
			   <div class="buttons">
			     <a href="//localhost/pomu/admin/"><span class="icon-home"></span>Pagina principal</a>
			     <a href="//localhost/pomu/sql/access/logout.php"><span class="icon-switch"></span>Cerrar Sesión</a>
			   </div>
		</div>
	</header>
	<section class="main">
	<nav class="menu-principal">
		<ul class="menu">
			<li>
				<a><span class="icon-profile2"></span>Perfil de personal</a>
				<ul class="submenu">
					<li><a href="//localhost/pomu/admin/personal/lista.php"><span class="icon-clipboard2"></span>Ver lista</a></li>
					<li><a href="//localhost/pomu/admin/personal/agregar.php"><span class="icon-user-add-outline"></span>Agregar</a></li>
				</ul>
			</li>
			<li>
				<a><span class="icon-dollar2"></span>Nómina</a>
				<ul class="submenu">
					<li><a href="//localhost/pomu/admin/nomina/"><span class="icon-dollar"></span>Pago de Nómina</a></li>
				</ul>
			</li>
			<li>
				<a><span class="icon-suitcase2"></span>Vacaciones</a>
				<ul class="submenu">
					<li><a href="//localhost/pomu/admin/vacaciones/"><span class="icon-calendar3"></span>Ver</a></li>
					<li><a href="//localhost/pomu/admin/vacaciones/agregar.php"><span class="icon-plus2"></span>Agregar</a></li>
				</ul>
			</li>
			<li>
				<a><span class="icon-health"></span>Reposos</a>
				<ul class="submenu">
					<li><a href="//localhost/pomu/admin/reposo/"><span class="icon-calendar3"></span>Ver</a></li>
					<li><a href="//localhost/pomu/admin/reposo/agregar.php"><span class="icon-plus2"></span>Agregar</a></li>
				</ul>
			</li>
			<li>
				<a><span class="icon-graduate"></span>Pasantes</a>
				<ul class="submenu">
					<li><a href="//localhost/pomu/admin/pasantes/"><span class="icon-clipboard2"></span>Ver lista</a></li>
					<li><a href="//localhost/pomu/admin/pasantes/agregar.php"><span class="icon-user-add-outline"></span>Agregar</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<div class="container">