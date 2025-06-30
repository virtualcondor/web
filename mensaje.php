<?

//obtener datos

 $nombre= addslashes($_POST['nombre']);
 $email= addslashes($_POST['mail']);
 $msj= addslashes($_POST['mensaje']);


require_once("function/class.phpmailer.php");
require_once("function/class.smtp.php");

// envio del email

if($_REQUEST['enviar'])
{
 $contenido = "
Nombre: "." ".$nombre."\n
E-mail: "." ".$email."\n
Mensaje: "." ".$msj;

$para="comercial@virtualcondor.com";
$asunto  = 'Contacto Web Virtual Condor';
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: Contacto Web Virtual Condor <comercial@virtualcondor.com>' . "\r\n" .
   'Reply-To: comercial@virtualcondor.com' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
   mail($para, $asunto, $contenido, $cabeceras);
   if(mail($email, "Confirmación Contacto Web Virtual Condor", "Se ha enviado satisfactoriamente su mensaje. Nos pondremos en contacto con usted pronto. Atte Virtual Condor.",$cabeceras))
   {
	 ?>
		<script language="javascript" type="text/javascript">
        alert('Se ha enviado satisfactoriamente su mensaje. Nos pondremos en contacto con usted pronto. Atentamente Virtual Cóndor.');
        window.location = 'index.html';
        </script>
	 <?
	 }
}
?>