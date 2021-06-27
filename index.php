<?php

$to = "kshitizkathuria@gmail.com";

$subject = "Contact Lead";

$message = "hi my name is kk";

$header = 'From: <kshitizkathuria07@gmail.com>' . "\r\n";
$header .= 'Content-type:text/plain;charset=UTF-8' . "\r\n";


if(mail($to,$subject,$message,$header)){

echo "Email send successfully";

}else{

echo "Email Failed";

}


?>
