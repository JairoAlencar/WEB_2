<?php

$nome = $_POST["nome_user"];
$sobre = $_POST["sobrenome_user"];
$email = $_POST["email"];
$confemail = $_POST["confemail"];
$senha = $_POST["senha"];
$aniversario = $_POST["dia"&&"mes"&&"ano"];
$sexo = $_POST["sexo"];  

if($email==$confemail){
    print"Seja Bem-Vindo ".$nome." ".$sobre."<br>";
    print"Enviaremos uma confirmação da sua conta para o email ".$email."<br>";
}else{
    print"Os e-mails não se batem";
}
