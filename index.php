<?php
require __DIR__ . '/vendor/autoload.php';

use src\Mensageiro;
use src\Email;
use src\Sms;
use src\Whatsapp;

//----- canal E-mail -----
$msg = new Mensageiro(new Email());
$msg->enviarToken();

//---- canal SMS ---------
echo '<br>';
$msg = new Mensageiro(new Sms());
$msg->enviarToken();
//---- canal Whatsapp ---------
echo '<br>';
$msg = new Mensageiro(new Whatsapp());
$msg->enviarToken();
