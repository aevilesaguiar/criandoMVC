<!--}
Este método sem parâmetros, quando invocado, cria uma conexão com o banco de dados de acordo com
os valores de seus atributos e retorna essa conexão para quem o invocou-->
<?php

class ConexaoBD{

    //desenvolvimento
private $serverName = "localhost";
private $userName = "root";
private $password = "usbw";
private $dbName = "projeto_final";

public function conectar()

 {
    //msqli classe própria do msqli , onde eu passo os argumentos
    // A this palavra-chave é usada para referenciar a instância atual do método no qual é usada. Aqui, isso se refere à variável de instância.
 $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
 return $conn;
 }
}


?>

