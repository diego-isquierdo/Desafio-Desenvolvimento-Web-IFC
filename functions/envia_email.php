<?php
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
use phpmailer\PHPMailer\PHPMailer;
use phpmailer\Exception;
require_once 'phpmailer/src/Exception.php';
require_once 'phpmailer/src/PHPMailer.php';
require_once 'phpmailer/src/SMTP.php';

echo "<script>window.alert('Obrigado por seu contato!')</script>"; //Testa a chamada do arquivo 'envia_email.php

$email = $_POST['email'];
$nome = $_POST['nome'];
$assunto = $_POST['telefone'];
$mensagem = $_POST['assunto'];

// Inicia a classe PHPMailer
$mail = new PHPMailer();
    //Server settings
    $mail = new PHPMailer();
    //$mail->SMTPDebug = true;
    $mail->isSMTP(true); 
    $mail->isHTML(true);                                
    $mail->Host       = 'smtp.gmail.com';               
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'vellhojoaquimteixeira@gmail.com';
    $mail->Password   = '#sextou#pas';                  
    $mail->SMTPSecure = 'tsl'; 						 
    $mail->Port       = 587;                         
    $mail->setFrom('vellhojoaquimteixeira@gmail.com', 'Site');
    $mail->addAddress($email, $nome);     // Add a recipient
    $mail->addAddress('vellhojoaquimteixeira@gmail.com');
    $mail->addReplyTo('vellhojoaquimteixeira@gmail.com');
    $mail->Subject = $assunto;
    $mens2 = 'nome: '.$nome.'<br>Email: '.$email.'<br>Mensagem: '.$mensagem;
    $mail->Body = $mens2;
    $mail->AltBody = $mens2;
    $send = $mail->Send();
if($send){
    echo '<script>alert("Mensagem enviada com Sucesso")</script>';
}
else{
    echo '<script>alert("Erro ao enviar email! Tente mais tarde!")</script>';
    //echo 'Erro ao enviar email: '.$mail->ErrorInfo;
}
?>