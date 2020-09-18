<?php

/*Requisições*/
require_once('vendor/phpmailer/phpmailer/src/PHPMailer.php');
require_once('vendor/phpmailer/phpmailer/src/SMTP.php');
require_once('vendor/phpmailer/phpmailer/src/Exception.php');
require_once("vendor/autoload.php");

/*Use*/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

/*Classe*/
class EnviarEmail 
{
    //Atributos
    public $Nome = "localhost";
    public $Email = "localhost@gmail.com";
    public $Menssagem = "Uma menssagem enviada de localhost";
    
    /*Função responsavel por enviar email*/
    public function EnviarEmail () 
    {
        //Instancia o objeto e executa o método da classe php mailer.
        $Enviar = new PHPMailer(true);
        
        //Acessa os valores aos atributos da classe php mailer.
        $Enviar->SMTPDebug = 2;               
        $Enviar->isSMTP();
        $Enviar->Host = 'smtp.gmail.com';  
        $Enviar->SMTPAuth = true;             
        $Enviar->Username = 'Seu email gmail';
        $Enviar->Password = 'sua senha gmail ou de app';     
        $Enviar->SMTPSecure = 'tls';               
        $Enviar->Port = 587; 
        $Enviar->setFrom('localhost@gmail.com');
        $Enviar->addAddress('Email do destinario','Nome do destinario');
        $Enviar->Subject = "Assunto";
        $Enviar->Body = "de: {$this->Nome}\nemail:{$this->Email}\nmenssagem: {$this->Menssagem}";
        
        //Instrução condicional que executa o envio do email se os dados informados estiverem corretos ou exibe a menssagem error.
        if($Enviar->send())
        {
            echo "Email enviado com sucesso";
        }else
        {
            echo "Erro ao enviar email";
        }
    }
}
// Instancia o objeto e executa o método EnviarEmail da classe EnviarEmail.
$execute = new EnviarEmail();
?>
