<?php

class Notificacao{
    public function enviar($mensagem){

    echo "Procurando mensagens";
}
}

class NotificacaoEmail extends Notificacao{
    public function enviar($mensagem){
        echo "Canal utilizado: Email <br>";
        echo "Conteúdo: $mensagem";
    }
}

class NotificacaoSMS extends Notificacao{
    public function enviar($mensagem){
        echo "Canal utilizado: SMS <br>";
        echo "Conteúdo: $mensagem";
    }
}

class NotificacaoPush extends Notificacao{
    public function enviar($mensagem){
        echo "Canal utilizado: Push <br>";
        echo "Conteúdo: $mensagem";
    }
}


$email = new NotificacaoEmail();
$sms = new NotificacaoSMS();
$push = new NotificacaoPush();

function processarNotificacao($notificacao, $mensagem){
    echo "Notificacão: <br>";
    $notificacao->enviar($mensagem);
    echo "<br><br>";
}

$mensagem = "Sua inscrição foi realizada com sucesso!";

processarNotificacao($sms, $mensagem);
processarNotificacao($email, $mensagem);
processarNotificacao($push, $mensagem);