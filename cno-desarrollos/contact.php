<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if($_POST){
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $utm_source = isset($_POST['utm_source']) ? $_POST['utm_source'] : 'none';
    $utm_term = isset($_POST['utm_term']) ? $_POST['utm_term'] : 'none';
    $utm_campaign = isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : 'none';
}


// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
    //Server settings
    $mail->SMTPDebug = 2;                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'spadajuan94@gmail.com';                     // SMTP username
    $mail->Password   = 'Sauvage17ba.,ba!';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients

    $mail->setFrom('gonzalo@nest.com.ar', 'Gonzalo Paolella');
    $mail->addReplyTo('no-replay@nest.com.ar', 'Nest Argentina');
    $mail->addAddress('gonzalo@nest.com.ar', 'Gonzalo');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Nuevo Contacto';
    $mail->Body    = "¡Hola!<br><br>Has recibido un nuevo contacto de tu página web.<br><hr>Nombre: $name<hr>Email: $email<hr>Teléfono: $phone<hr>utm_source: $utm_source<hr>utm_term: $utm_term<hr>utm_campaign: $utm_campaign<hr><br>Saludos.";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


// //ZAPIER

// if($_POST['suscribe-email']){
//     $url = "https://hooks.zapier.com/hooks/catch/803715/oukbdg7/";
    
//     $data = array('email' => $_POST['suscribe-email']);
    
//     // use key 'http' even if you send the request to https://...
//     $options = array(
//         'http' => array(
//             'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//             'method'  => 'POST',
//             'content' => http_build_query($data)
//         )
//     );
//     $context  = stream_context_create($options);
//     $result = file_get_contents($url, false, $context);
//     if ($result === FALSE) { /* Handle error */ }
    
    
// }

?>