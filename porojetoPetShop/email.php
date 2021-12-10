<?php
if(isset ($_POST ['email']) && !empty($_POST ['email'])){

$nome= addcslashes($_POST ['name']);
$email=addcslashes($_POST ['email']);
$mensagem=addcslashes($_POST ['message']);

$to = "lucass.alves0911@gmail.com";
$subject = "Contato - Pet Shop";
$body "Nome: ".$nome. "\r\n".
      "E-mail" .$email."\r\n".
      "Mensagem".$mensagem;

$header = "From: lucass-alves@hotmail.com"."\r\n"."Reply-To".$email."\r\n"."X=Mailer:PHP/".phpversion;

if (mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}
else{
    echo("O Email não pode ser enviado");
}
}
?>