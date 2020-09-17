<?php

require_once('vendor/phpmailer/phpmailer/src/PHPMailer.php');
require_once('vendor/phpmailer/phpmailer/src/SMTP.php');
require_once('vendor/phpmailer/phpmailer/src/Exception.php');
require_once("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class EnviarEmail 
{
    
    public $Nome = "";
    public $Email = "";
    public $Menssagem = "";

    public function EnviarEmail () 
    {
        $Enviar = new PHPMailer(true);
        
        $Enviar->SMTPDebug = 2;               
        $Enviar->isSMTP();
        $Enviar->Host = '';  
        $Enviar->SMTPAuth = true;             
        $Enviar->Username = '';
        $Enviar->Password = '';     
        $Enviar->SMTPSecure = '';               
        $Enviar->Port = ''; 
        $Enviar->setFrom('');
        $Enviar->addAddress('','');
        $Enviar->Subject = "";
        $Enviar->Body = "de: {$this->Nome}\nemail:{$this->Email}\nmenssagem: {$this->menssagem}";
        
        if($email->send())
        {
            echo "Email enviado com sucesso";
        }else
        {
            echo "Erro ao enviar email";
        }
    }
}
?>
