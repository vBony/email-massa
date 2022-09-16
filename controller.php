<?php
require "./User.class.php";

function getUsuarios(){
    // $usuario = new User();
    // $usuarios = $usuario->getAll();

    // return $usuarios;
}

if(!empty($_POST['assunto'])){
    enviarEmail($_POST, $_FILES);
}


function enviarEmail($dados, $imagem){
    ini_set('default_charset','UTF-8');
    // emails para quem será enviado o formulário
    $emailenviar = "contato@vbony.xyz";
    $nome = "Vinicius de Assis Ferreira";
    $destino = "contato.vinicius-af@outlook.com";
    $assunto = utf8_decode($dados['assunto']);

    // É necessário indicar que o formato do e-mail é html
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: $nome <$emailenviar>";
    $arquivo = renderTemplate('', utf8_decode($dados['mensagem']));
    // $arquivo = $dados['mensagem'];

    $enviaremail = mail($destino, $assunto, $arquivo, $headers);

    if($enviaremail){
        echo 'email enviado com sucesso';
    } else {
        echo "ERRO AO ENVIAR E-MAIL!";
    }
}

function renderTemplate($imgUrl, $message){
    $template = file_get_contents("template.html");

    // $template = str_replace('{{ url }}', $imgUrl, $template);
    $template = str_replace('{{ msg }}', $message, $template);

    return $template;
}

function uploadImage($img){

}

function getArquivo(){
    $arquivo = "teste envio de email";

    return $arquivo;
}