<?php 
class Usuario
{

 //atributos
 private $id;
 private $nome;
 private $cpf;
 private $email;
 private $dataNascimento;
 private $senha;

//getters e setters são os metodos responsaveis por acessar(get) e modificar (set)
//ID
public function setID($id){
    $this->id=$id;
}
public function getID(){
    return $this->id;
}

//nome
public function setNome($nome){
    $this->nome=$nome;
}
public function getNome(){
    return $this->nome;
}

//cpf
public function setCPF($cpf)
 {
 $this->cpf = $cpf;
 }
 public function getCPF()
 {
 return $this->cpf;
 }
//Email
public function setEmail($email)
{
$this->email = $email;
}
public function getEmail()
{
return $this->email;
}
//Data de nascimento
public function setDataNascimento($dataNascimento)
{
$this->dataNascimento = $dataNascimento;
}
public function getDataNascimento()
{
return $this->dataNascimento;
}
// Senha
public function setSenha($senha)
{
$this->senha = $senha;
}
public function getSenha()
{
return $this->senha;
}

//metodo insert

public function inserirBD()
{
    //carregando o arquivo de conexao
require_once 'ConexaoBD.php';
//instanciando a classe ConexaoBD
$con = new ConexaoBD();
//Recebe a conexão , esse é o objeto conectado
$conexao = $con->conectar();


if ($conexao->connect_error) {
    die("Connection failed: , algo de errado está certo" );
}
//Insert SQL

$sql = "INSERT INTO usuario (nome, cpf, email, senha)
VALUES ('{$this->nome}',
        '{$this->cpf}',
        '{$this->email}',
        '{$this->senha}'
        )";

        //REALIZA O TESTE DO INSERT
if ($conexao->query($sql) === TRUE) {
$this->id = mysqli_insert_id($conexao);
$conexao->close();
return TRUE;
} 
else {
$conexao->close();
return FALSE;
        }
    }

    //metodo para carregar Usuario (READ)
    
public function carregarUsuario($cpf)
{
require_once 'ConexaoBD.php';

$con = new ConexaoBD();
$conexao = $con->conectar();
if ($conexao->connect_error) {
die("Connection failed: " . $conexao->connect_error);
}

$sql = "SELECT * FROM usuario WHERE cpf = ".$cpf ;/*ou {$cpf} */
//resultado
$re = $conexao->query($sql);
//pega os resultados do re e faz um fetch_object(), o r é um array de objeto, ele varre cad ususario e transforma em objeto
$r = $re->fetch_object();

if($r != null)
{
$this->id = $r->idusuario;
$this->nome = $r->nome;
$this->email = $r->email;
$this->cpf = $r->cpf;
$this->dataNascimento = $r->dataNascimento;
$this->senha = $r->senha;
$conexao->close();
return true;
}
else
{
$conexao->close();
return false;
}
}

//ATUALIZAR bd
public function atualizarBD()
 {
 require_once 'ConexaoBD.php';
 $con = new ConexaoBD();
 $conexao = $con->conectar();
 if ($conexao->connect_error) {
 die("Connection failed: " . $conexao->connect_error);
 
 $sql = "UPDATE usuario SET nome = '".$this->nome."', cpf = '". $this->cpf."', 
 dataNascimento ='". $this->dataNascimento."',
 email='".$this->email."' WHERE idusuario ='". $this->id. "'" ;
 if ($conexao->query($sql) === TRUE) {
 $conexao->close();
 return TRUE;
 } else {
 $conexao->close();
 return FALSE;
 }
 }
 }
}


?>