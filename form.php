<?php

require_once __DIR__.'/src/PHPMailer.php';
require_once __DIR__.'/src/SMTP.php';
require_once __DIR__.'/src/Exception.php';  



use PHPMailer\PHPMailer\PHPMailer;


    include('config.php');

    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $nascimento = $_POST['nascimento'];
    $sexo = $_POST['sexo'];
    $endereco = $_POST['endereco'] ;
    $numero = $_POST['numero']; 
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'] ;
    $secretaria = $_POST['secretaria'] ;
    $motivo = $_POST['motivo']; 
    $titulo = $_POST['titulo'];
    $mensagem = $_POST['mensagem'] ;
    $cep = $_POST['cep']; 
    

    $uploadFolder = 'uploads/';

    $randomName = rand(00,9999);
      $imageTmpName = $_FILES['anexo']['tmp_name'];
      $imageName =$randomName . "-" . $_FILES['anexo']['name'];

      $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);
      

 
    $anexo = $uploadFolder.$imageName;
      

    $query = "INSERT INTO formulario( 
        nome, 
        email, 
        tel, 
        nascimento, 
        sexo, 
        endereco, 
        numero, 
        bairro, 
        cidade, 
        secretaria, 
        motivo, 
        titulo, 
        anexo,
        mensagem, 
        cep
        ) 
    VALUES
    (
        '$nome',
        '$email',
        '$tel',
        '$nascimento',
        '$sexo',
        '$endereco',
        '$numero',
        '$bairro',
        '$cidade',
        '$secretaria',
        '$motivo',
        '$titulo',
        '$imageName',
        '$mensagem',
        '$cep'
    )";
      $insert = mysqli_query($con,$query);

      if($insert ){
        $agora = new DateTime();
            //Nova instância do PHPMailer
            $mail = new PHPMailer;
            //Informa que será utilizado o SMTP para envio do e-mail
            $mail->IsSMTP();
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = "tls";
            $mail->Port       = 587;
            $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
            $mail->Username =  "**********";
            $mail->Password =   "*********";
            $mail->CharSet = 'UTF-8'; 

            //Titulo do e-mail que será enviado
            $mail->Subject  =   'Boletim-Coronavirus - Numero: '.$agora->format("dmYHis");

            //Preenchimento do campo FROM do e-mail
            $mail->From = "**********";
            $mail->FromName = "Boletim-Coronavirus";

            //Dados do formulario
           
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $nascimento = $_POST['nascimento'];
                $sexo = $_POST['sexo'];
                $endereco = $_POST['endereco'] ;
                $numero = $_POST['numero']; 
                $bairro = $_POST['bairro'];
                $cidade = $_POST['cidade'] ;
                $secretaria = $_POST['secretaria'] ;
                $motivo = $_POST['motivo']; 
                $titulo = $_POST['titulo'];
                $mensagem = $_POST['mensagem'] ;
                $cep = $_POST['cep']; 



            //E-mail para a qual o e-mail será enviado


            $recipients = array(
                'comunicacao@mesquita.rj.gov.br'=>'comunicacao',
                'daniel.souza@mesquita.rj.gov.br'=>' Diretor',
                // 'everton.rocha@mesquita.rj.gov.br'=>' Administrativo',
                'yury.cunha@mesquita.rj.gov.br' => 'Dev web',
                // 'maira.silva@mesquita.rj.gov.br' => 'Social Midia'
                
             );
             foreach($recipients as $SendEmail => $name)
             {
                $mail->AddCC($SendEmail, $name);
             }


            //$mail->AddAddress('yury.cunha@mesquita.rj.gov.br');
            $mail->AddAttachment($anexo);

            //Conteúdo do e-mail
            $mail->Body =  "
            <div style='max-width: 900px; margin: 0 auto;''>



                <h1 style='text-align: center; color: red;''>".$titulo." - Site Boletim-Coronavírus - Nº:{$agora->format('dmYHis')}</h1>
                <fieldset>
                    <legend style='font-size: 22px; font-weight: bold;''>Nome Completo:</legend>
                    <p style='font-size: 18px;''>".$nome."</p>
                </fieldset>
                
                <fieldset style='margin-top: 20px;'>
                    <legend style='font-size: 22px; font-weight: bold;'>Email:</legend>
                    <p style='font-size: 18px;'>".$email."</p>
                </fieldset>
                
                <fieldset style='margin-top: 20px;'>
                    <legend style='font-size: 22px; font-weight: bold;'>Telefone:</legend>
                    <p style='font-size: 18px;'>".$tel."</p>
                </fieldset>
                
                <fieldset style='margin-top: 20px;'>
                    <legend style='font-size: 22px; font-weight: bold;'>Data de nascimento:</legend>
                    <p style='font-size: 18px;'>".$nascimento."</p>
                </fieldset>
                
                <fieldset style='margin-top: 20px;'>
                    <legend style='font-size: 22px; font-weight: bold;'>Sexo:</legend>
                    <p style='font-size: 18px;'>".$sexo."</p>
                </fieldset>
                

                <fieldset style='margin-top: 20px;'>
                <legend style='font-size: 22px; font-weight: bold;'>Secretaria:</legend>
                <p style='font-size: 18px;'>".$secretaria."</p>
            </fieldset>

                <fieldset style='margin-top: 20px;'>
                <legend style='font-size: 22px; font-weight: bold;'>Endereço:</legend>
                <p style='font-size: 18px;'>".$endereco."</p>
            </fieldset>

                <fieldset style='margin-top: 20px;'>
                <legend style='font-size: 22px; font-weight: bold;'>Numero e complemento:</legend>
                <p style='font-size: 18px;'>".$numero."</p>
            </fieldset>

            <fieldset style='margin-top: 20px;'>
            <legend style='font-size: 22px; font-weight: bold;'>Bairro:</legend>
            <p style='font-size: 18px;'>".$bairro."</p>
            </fieldset>

                <fieldset style='margin-top: 20px;'>
                <legend style='font-size: 22px; font-weight: bold;'>Cidade:</legend>
                <p style='font-size: 18px;'>".$cidade."</p>
            </fieldset>

            <fieldset style='margin-top: 20px;'>
            <legend style='font-size: 22px; font-weight: bold;'>CEP:</legend>
            <p style='font-size: 18px;'>".$cep."</p>
            </fieldset>

            <fieldset style='margin-top: 20px;'>
            <legend style='font-size: 22px; font-weight: bold;'>Titulo da Contato:</legend>
            <p style='font-size: 18px;'>".$titulo."</p>
            </fieldset>

                <fieldset style='margin-top: 20px;'>
                    <legend style='font-size: 22px; font-weight: bold;'>Motivo do Contato:</legend>
                    <p style='font-size: 18px;'>".$motivo."</p>
                </fieldset>

                <fieldset style='margin-top: 20px;'>
                <legend style='font-size: 22px; font-weight: bold;'>Mensagem:</legend>
                <p style='font-size: 18px;'>".$mensagem."</p>
            </fieldset>


                <br/>
                <br/>
                <p style='font-size: 16px; font-weight: bold;'>
                Att,<br/>

                Boletim-Coronavírus (PMM - Prefeitura Municipal de Mesquita)<br/>
                
                http://www.mesquita.rj.gov.br/pmm/boletim-coronavirus/
                </p>
            </div>";
            $mail->AltBody = $mail->Body;

            //Dispara o e-mail
            $enviadoSite = $mail->Send();


            /***************************************************************************/

            // clear addresses of all types
            $mail->ClearAllRecipients(); //Limpar todos os que destinatiarios: TO, CC, BCC

            //Titulo do e-mail que será enviado
            $mail->Subject  =   "".$titulo." - Site Boletim-Coronavírus - Nº {$agora->format('dmYHis')}";

            //E-mail para a qual o e-mail será enviado
            $mail->AddAddress($email);

            //Conteúdo do e-mail
            $mail->Body = "<div style='max-width: 900px; margin: 0 auto;''>

            <p style='font-size: 16px;'>

            Prezado(a) ".$nome.", Olá!<br/>

            Recebemos a sua mensagem pelo site do boletim-coronavírus.<br/>

            Seu número de protocolo de atendimento é: <span style= 'color: red; font-weight: bold;'>{$agora->format('dmYHis')}</span><br/>

            Em breve retornamos com uma resposta.<br/>

            Obrigado.<br/>
            <br/><br/>
            -
            Att,<br/>

            Boletim-Coronavírus (PMM - Prefeitura Municipal de Mesquita)<br/>

            http://www.mesquita.rj.gov.br/pmm/boletim-coronavirus/
            </p>
            </div>";
            $mail->AltBody = $mail->Body;

            $enviadoCliente = $mail->Send();

            /***************************************************************************/

            // Exibe uma mensagem de resultado
            if ($enviadoSite && $enviadoCliente) {
            echo '<script type="text/javascript">alert("Formulário enviado. Entraremos em contatos o mais brevemente.");</script>';
            } else {
            echo '<script type="text/javascript">alert("Erro ao ligar-se ao servidor.");</script>';
            }

      }else{
        echo"Não foi possível enviar sua mensagem";
      }


?>