<?php

require_once __DIR__.'/src/PHPMailer.php';
require_once __DIR__.'/src/SMTP.php';
require_once __DIR__.'/src/Exception.php';  




use PHPMailer\PHPMailer\PHPMailer;

class Email {

    private $mail;
    private $titulo;
    private $mensagem;
    private $assunto;
    private $userName;
    private $password;
    private $novo_nome;


    public function __construct($address, $setFrom, $mensagem, $novo_nome) {
        try {
            
            $this->mail = new PHPMailer(true);

            $this->mail->isSMTP();
            $this->mail->Host = 'smtp.gmail.com';
            $this->mail->SMTPAuth = true;
            $this->mail->Port = 587;
            $this->mail->SMTPDebug = false;
            $this->SMTPSecure = 'ssl';
            $this->SMTPAutoTLS = false;
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
            $this->mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => false ) );
            $this->mail->isHTML(true);
            $this->mail->Username = 'governodemesquita@gmail.com';
            $this->mail->Password = 'acesso2020@#ccs';
            $this->mail->setFrom($setFrom);
            $this->mail->addAddress($address);//lista de emails para enviar
            $this->mail->Subject = $titulo;
            $this->mail->Body = $mensagem;
            $this->mail->AltBody = $this->titulo;
            $this->mail->AddAttachment('/uploads/_1274_1419926_10156330387100722_45975746_n.jpg');
            if($this->mail->send()) {
                echo "
		<script>
			alert('email recebido com sucesso');
			window.location.href='index.php';
		</script>";
            } else {
                echo "email não enviado";
            }

        } catch(Exception $e) {
            echo "Erro ao enviar mensagem:  {$this->mail->ErrorInfo}";
        }
    }
    


}