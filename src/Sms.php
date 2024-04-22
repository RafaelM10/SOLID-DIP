<?php
namespace src;

class Sms implements IMensagemToken
{
  public function enviar(): void
  {
    echo 'SMS: Seu token é 555-323';
  }
}