<?php
function sendMail($infoUser) {
    require 'PHPMailer/class.phpmailer.php';
    require 'PHPMailer/class.smtp.php';
//Este bloque es importante
    $mail = new PHPMailer();
    //$mail->SMTPDebug = 2;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;
    $codigo = date("YmdHis").$infoUser['User']['document'];
    $mensaje = "Para recuperar su clave de ingreso por favor siga el enlace "
            . "a continuacion y siga los pasos descritos<br>"
            . "<a href='".WEB_ROOT."/users/nuevaclave/".$codigo."'> Recuperar clave</a> ";
//Nuestra cuenta
    $mail->Username = 'jonathan.parra.ajc@gmail.com';
    $mail->Password = '1144189937parra'; //Su password
//Agregar destinatario
    $mail->Subject = "Recuperacion de contraseña";
    $mail->Body = $mensaje;
// $mail->From = "Juan David";
    $mail->FromName = "Administrador";
    $mail->addAddress($infoUser['User']['email'], $infoUser['User']['firstname']);

    $mail->MsgHTML($mensaje);
//Avisar si fue enviado o no y dirigir al index
    if ($mail->Send()) {
        return $codigo;
    } else {
        return false;
    }
}
?>