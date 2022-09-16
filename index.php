<?php   
include "controller.php";
$usuarios = getUsuarios();
$usuarios = array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de e-mail em massa</title>
</head>
<body>
    <h1>Enviar emails</h1>
    <p>O email será enviado para:</p>
    <ul>
        <?php foreach($usuarios as $u): ?>
            <li><?=$u['usu_email']?></li>
        <?php endforeach; ?>
    </ul>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="assunto" id="assunto" placeholder="Digite o assunto" autocomplete="false"><br><br>
        <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Digite sua mensagem"></textarea><br><br>
        <input type="file" name="imagem" id="imagem" accept=".jpeg, .png, .jpg"><br><br>
        <input type="submit" value="Enviar e-mail" action="teste">

        <!-- <input type="hidden" name="action" value="upload"> -->
    </form>
</body>
</html>