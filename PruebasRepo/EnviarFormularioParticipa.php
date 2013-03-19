<?php

//error_reporting(E_ALL);
//ini_set("display_errors","1");


$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Telefono=$_POST['Telefono'];
$Email=$_POST['Email'];
$Asunto=$_POST['Asunto'];
$Observaciones=$_POST['Observaciones'];

$ContenidoEmail="<b>My First Gig: Contacto Web </b><br><br>";
$ContenidoEmail.="<b>Nombre: </b>".$Nombre."<br>";
$ContenidoEmail.="<b>Apellidos: </b>".$Apellidos."<br>";
$ContenidoEmail.="<b>Telefono: </b>".$Telefono."<br>";
$ContenidoEmail.="<b>Email: </b>".$Email."<br>";
$ContenidoEmail.="<b>Asunto: </b>".$Asunto."<br>";
$ContenidoEmail.="<b>Observaciones: </b>".$Observaciones."<br>";

require "./Archivos/PHPMailer/class.phpmailer.php";

$mail = new PHPMailer();

$mail->IsMail();
$mail->From = $Email;
$mail->FromName = $Nombre;
$mail->Subject = "My First Gig: Contacto web.";

$mail->AddAddress('formulario@myfirstgig.es');
$mail->MsgHTML($ContenidoEmail);
$exito =  $mail->Send();

$intentos=1;
while ((!$exito) && ($intentos < 2)) {
     sleep(1);
    //echo $mail->ErrorInfo;
    $exito = $mail->Send();
    $intentos=$intentos+1;
}
if(!$exito){
    ?>
    <script language='JavaScript'>
                alert('Error al enviar el email. Intentelo de nuevo mas tarde.');
                window.location.href='participa.html';
    </script>
    <?
}else{
    ?>
    <script language='JavaScript'>
                alert('Email enviado correctamente.');
                window.location.href='index.php';
    </script>
    <?
}


?>
