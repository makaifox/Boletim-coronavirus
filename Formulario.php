<?php
require 'Email.php';

class Formulario {

    private $nome;
    private $email;
    private $tel;
    private $nascimento;
    private $sexo;
    private $endereco;
    private $numero;
    private $bairro;
    private $cidade;
    private $secretaria;
    private $motivo;
    private $titulo;
    private $mensagem;
    private $cep;
    

    private $pdo;

    public function __construct($nome, $email, $tel, $nasc, $sexo, $end, $num, $bai, $cid, $sec, $mot, $tit, $men, $cep) {

        try {
            $this->pdo = new PDO("mysql:dbname=coronaviruspmm;host=coronaviruspmm.mysql.dbaas.com.br", 'coronaviruspmm', 'pmmcorona2020');
        } catch(Exception $e) {
            echo "ERRO: ".$e->getMessage();
        }

        $this->setNome($nome);
        $this->setEmail($email);
        $this->setTel($tel);
        $this->setNascimento($nasc);
        $this->setSexo($sexo);
        $this->setEndereco($end);
        $this->setNumero($num);
        $this->setBairro($bai);
        $this->setCidade($cid);
        $this->setSecretaria($sec);
        $this->setMotivo($mot);
        $this->setTitulo($tit);
        $this->setMensagem($men);
        $this->setCep($cep);
    }

    public function addFormulario($postArray, $address, $setFrom, $mensagem, $titulo) {
        $add = $this->pdo->prepare("INSERT INTO formulario 
        (
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
            mensagem,
            cep

        ) VALUES 
        ( 
            :nome,
            :email,
            :tel,
            :nascimento,
            :sexo,
            :endereco,
            :numero,
            :bairro,
            :cidade,
            :secretaria,
            :motivo,
            :titulo,
            :mensagem,
            :cep
        )");

        foreach($postArray as $key => $value) {
            $add->bindValue(":{$key}",$value);  
        }

        $add->execute();
        $this->enviaEmail($address, $setFrom, $mensagem, $titulo);

    }

    public function selectFormulario () {
        $dados = [];
        $select = $this->pdo->prepare("SELECT * FROM formulario");
        if($select->rowCount() > 0) {
            $dados = $select->fetchAll(PDO::FETCH_ASSOC);
        } 
        return $dados;
    }

    public function enviaEmail($address, $setFrom, $mensagem, $titulo) {
        foreach($address as $value) {
            new Email($value, $setFrom, $mensagem, $titulo);
        }
    }

    public function getNome() {
        return $this->nome;
    }
    private function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getEmail() {
        return $this->email;
    }
    private function setEmail($email) {
        $this->email = $email;
    }

    public function getNascimento() {
        return $this->nascimento;
    }
    private function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    public function getSexo() {
        return $this->sexo;
    }
    private function setSexo($sexo) {
         $this->sexo = $sexo;
    }

    public function getTel() {
        return $this->tel;
    }
    public function setTel($tel) {
        $this->tel = $tel;
    }

    public function getEndereco(){
        return $this->endereco;
    }
    private function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getNumero(){
        return $this->numero;
    }
    private function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getBairro(){
        return $this->bairro;
    }
    private function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCidade(){
        return $this->cidade;
    }
    private function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getSecretaria() {
        return $this->secretaria;
    }
    private function setSecretaria($secretaria) {
        $this->secretaria;
    }

    public function getMotivo() {
        return $this->motivo;
    }
    private function setMotivo($motivo) {
        $this->motivo;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    private function setTitulo($titulo) {
        $this->titulo;
    }

    public function getMensagem() {
        return $this->mensagem;
    }
    private function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    public function getCep() {
        return $this->cep;
    }
    private function setCep($cep) {
        $this->cep = $cep;
    }

/*    public function getDuvidas() {
        return $this->duvidas;
    }
    private function setDuvidas($duvidas) {
        $this->duvidas = $duvidas;
    }
*/
}