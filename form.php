<?php

session_start(); // Inicia la sesión

require "./phpMailer/PhpMailer.php";
require "./phpMailer/SMTP.php";

//**Datos del formulario */
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


//* Verificar la respuesta del reCAPTCHA
$recaptcha_secret = "6LeqmFspAAAAAE0kzWc9DlaGDr3pGtIK_FuxNQJ5";
$recaptcha_response = $_POST['g-recaptcha-response'];
$recaptcha = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
$recaptcha_data = json_decode($recaptcha);

if ($recaptcha_data->success) {
    //* El reCAPTCHA se ha verificado correctamente, procede con el procesamiento del formulario
    $phpmailer = new PHPMailer\PHPMailer\PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'b4c3354af3e964';
    $phpmailer->Password = '8bec4bcc612cfd';

    //* Configuración del remitente y destinatario
    $phpmailer->setFrom('tu_correo@example.com', 'Tu Nombre');
    $phpmailer->addAddress('gahumada@nice.com.mx', 'Nombre Destinatario');

    //* Configuración del mensaje
    $phpmailer->Subject = "Contenido del mensaje";
    $phpmailer->Body = "Nombre: $name Correo: $email Celular: $phone Mensaje: $message";

    //* Envía el correo
    $phpmailer->send();


    //*Asignar el errror de manera global en la aplicaci
    // El reCAPTCHA no se ha verificado correctamente, establece la variable de sesión de error
    $_SESSION['success_recaptcha'] = true;
    // El reCAPTCHA no se ha verificado correctamente, maneja el caso en consecuencia
    // Redirige al usuario a la página de inicio
    header('Location: ./index.php#contact'); // Reemplaza '/ruta-de-inicio' con la ruta real de inicio de tu aplicación
    exit(); // Asegura que el script se detenga después de la redirección
} else {
    //*Asignar el errror de manera global en la aplicaci
    // El reCAPTCHA no se ha verificado correctamente, establece la variable de sesión de error
    $_SESSION['error_recaptcha'] = true;
    // El reCAPTCHA no se ha verificado correctamente, maneja el caso en consecuencia
    // Redirige al usuario a la página de inicio
    header('Location: ./index.php#contact'); // Reemplaza '/ruta-de-inicio' con la ruta real de inicio de tu aplicación
    exit(); // Asegura que el script se detenga después de la redirección
}
