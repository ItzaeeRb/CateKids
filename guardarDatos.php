<?php
require "Conexion/Conexion.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailer/src/Exception.php';
require 'mailer/src/PHPMailer.php';
require 'mailer/src/SMTP.php';
//require_once __DIR__ . '../../vendor/autoload.php';



$paterno = $_POST['apellido_paterno'];
$materno = $_POST['apellido_materno'];
$nombre = $_POST['nombre']; 

$fechaNacimiento = $_POST['fechaNacimiento'];
$sexo = $_POST['sexo'];
$CURP = $_POST['CURP'];

$paterno_tutor = $_POST['paterno_tutor'];
$materno_tutor = $_POST['materno_tutor'];
$nombre_tutor = $_POST['nombre_tutor'];
$email = $_POST['email'];
$idUsuario=1;

$telefono = $_POST['phone'];


$calle = $_POST['calle_numero'];
$colonia = $_POST['colonia'];
$codigo_postal = $_POST['codigo_postal'];

$pais = $_POST['pais_domicilio'];
$estado = $_POST['estado'];
$ciudad = $_POST['ciudad'];

$tipoUser = "Padre/Tutor";
$idParroquia="1";

$insertSQL_User = "INSERT INTO Usuario(Nombre, Username, Contrasena, tipoUsuario, idParroquia) VALUES('$nombre','$CURP', '$CURP', '$tipoUser', '$idParroquia')";


$insertSQL_Tutor = "INSERT INTO PadreTutor(Nombre, apellidoPaterno, apellidoMaterno, Email, idUsuario) VALUES('$nombre_tutor','$paterno_tutor', '$materno_tutor', '$email', $idUsuario)";


$idPadre="1";


$insertSQL_Alumno = "INSERT INTO Alumno(Nombre, apellidoPaterno, apellidoMaterno, CURP, fechaNacimiento, sexo, idPadreTutor) VALUES('$nombre','$paterno', '$materno', '$CURP', '$fechaNacimiento', '$sexo', $idPadre)";


$insertSQL_Domicilio = "INSERT INTO DomicilioTutor(pais, estado, ciudad, CP, colonia, calle, telefono, idPadreTutor) VALUES('$pais','$estado', '$ciudad', '$codigo_postal', '$colonia', '$calle', '$telefono', $idPadre)";

mysqli_query($con, $insertSQL_User);
mysqli_query($con, $insertSQL_Tutor);
mysqli_query($con, $insertSQL_Alumno);
mysqli_query($con, $insertSQL_Domicilio);



if($insertSQL_Domicilio){
    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho, los datos han sido agregados correctamente.</div>';
}else{
    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudieron registrar los datos.</div>';
}

//---------------------------------------------------------------------------
$mail = new PHPMailer(true);
            
 try {
     //Server settings
     $mail->SMTPDebug = 0;  //SMTP::DEBUG_SERVER					//Enable verbose debug output
     $mail->isSMTP();                                            //Send using SMTP
     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
     $mail->Username   = 'cmx.avisos@gmail.com';                     //SMTP username
     $mail->Password   = 'zbcracezfbjkfmwi';                               //SMTP password
     $mail->SMTPSecure = 'tls';//PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
     //$mail->SMTPDebug = 2; // Habilitar la depuración SMTP

     //Recipients
     //Quien envia el correo 
     $mail->setFrom('cmx.avisos@gmail.com', 'Inscripciones'); 
 
     //-A quien se le envia el correo 
     $email_alumno=$email;
     $nombrecompleto = $paterno_tutor.' '.$materno_tutor.' '.$nombre_tutor;
     $nombre_completo=$nombrecompleto;
     $mail->addAddress($email_alumno, $nombre_completo); 
     
     
     //Content
     $mail->isHTML(true); // Set email format to HTML
     $mail->Subject = 'Inscripciones CMX';
     

     // Genera la URL de datos para la imagen
     //$imagePath = 'http://demo.ives.edu.mx:8081/becas/templates/images/logoIVES.png';

     $mail->Body = '<div style="text-align:center;"><img style="width:120px; height:auto;"></div>
     <h2>Inscripcion Completada</h2><br>
     <div style="text-align:justify; font-size:14px;">
     <p>Estimado padre de familia / Tutor:<br>
     La inscripción de su hijo/a ha sido realizada. Pronto recibirá un email con mas información sobre el proceso. Gracias.</p><br><br>';
                 
     $mail->CharSet = 'UTF-8';

     $mail->send();

     } catch (Exception $e) {
         echo "El mensaje no se ha podido enviar. Mailer Error: {$mail->ErrorInfo}";
         //echo $email_alumno.'-'.$nombre_completo;
     }
     return;

?>