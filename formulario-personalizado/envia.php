<?php 

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $destinatario = 'contareceptoraphp2024@gmail.com';
    $assunto = 'Coleta de dados';
    $corpo = "Nome: ". $nome . "\n". "E-Mail: ". $email . "\n". "Telefone: ". $telefone;

    $cabecalho = "From: contatestephp2024@gmail.com". "\n". "Reply-to: ". $email. "\n" . "X-Mailer:PHP/". phpversion();

    if(mail($destinatario, $corpo, $cabecalho)){
        echo("E-mail enviado com sucesso");
    }else{
        echo("Houve um erro ao enviar o email");
    }

?>