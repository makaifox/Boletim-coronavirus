<?php

define("MAIL", [
    "host" => "smtp.gmail.com",
    "port" => "587",
    "user" => "governodemesquita@gmail.com",
    "passwd" => "acesso2020@#ccs",
    "from_name" => "Boletim Coronavírus",
    "from_email" => "governodemesquita@gmail.com"

]);

require_once __DIR__.'/src/PHPMailer.php';
require_once __DIR__.'/src/SMTP.php';
require_once __DIR__.'/src/Exception.php';  

use Exception;
use stdClass;
use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    /**@var PHPMailer */
    private $mail;

    /**@var stdClass */
    private $data;

    /**@var Exception */
    private $error;

    public function __construct()
    {
      $this->mail = new PHPMailer(exceptions: true);
      $this->mail = new stdClass();
      
      $this->mail->isSMTP();
      $this->mail->isHTML();
      $this->mail->setLanguage( langcode: "br");

      $this->mail->SMTPAuth = true;
      $this->mail->SMTPSecure = "ssl";
      $this->mail->Charset = "uft-8";

      $this->mail->Host = MAIL["host"];
      $this->mail->Port = MAIL["port"]; 
      $this->mail->Username = MAIL["user"];
      $this->mail->Password = MAIL["passwd"];
    }

    public function add(string $subject, string $body, string $recipient_name, string $recipient_email): Email {

        $this->data->subject = $subject;
        $this->data->body = $body;
        $this->data->recipient_name = $recipient_name;
        $this->data->recipient_email = $recipient_email;
        return $this;
    }

    public function attach(string $FilePath, string $FileName): Email{

        $this->data->attach[$FilePath] = $FileName;
        return $this;
    }

    public function send(string $from_name = MAIL["from_name"], string $from_email = MAIL["from_email"]): bool {

        try{
            $this->mail->Subject = $this->data->subject;
            $this->mail->msgHTML = ($this->data->body);
            $this->mail->addAdress ( $this->data->recipient_email , $this->data->recipient_name );
            $this->mail->setFrom($from_email, $from_name);

            if(!empty($this->data->attach)) {
                foreach ($this->data->attach as $path => $name){
                    $this->mail->addAttachment( $path, $name);
                }
            }

            $this->mail->send();
            return true;
        } catch (Exception $exception) {
            $this->error = $exception;
            return false;
        }
    }

    public function error(): ?Exception{

        return $this->error;
    }

}
           

