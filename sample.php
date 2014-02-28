<?php

$to ="romacknatividad@gmail.com";
$subject ="John Michael Yabut";
$msg = "Nagawa ko na po Sir.";
$header ="From : johnmichaelyabut@gmail.com";



$retval =mail($to,$subject,$msg,$header);
ini_set( 'SMTP', 'smtp.gmail.com' ); // must be set to your own local ISP
ini_set( 'smtp_port', '587' ); // assumes no authentication (passwords) required 
ini_set( 'sendmail_from', 'johnmichaelyabut@gmail.com' ); // can be any e-mail address, but must be set

if($retval === true){
	echo "Message sent successfully";
}else{
	echo "Failed.";
}
 ?>