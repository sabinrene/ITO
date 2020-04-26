<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];

// sender
$for = 'Julian.orozco87@gmail.com';
$type = "Contacto desde nuestra web";

$body = "De: $nombre \n ";
$body.= "Correo: $email \n";
$body.= "Mensaje: $subject \n";

//Sending the imap_msgno
mail($for, $type, $carta);

header("location:MsgSent.php");

?>
