
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 include_once 'Usuario.php';

 require_once("Model/ConexaoBD.php");

 //PARA USAR A CLASSE EU TENHO QUE INSTANCIAR
/*
 $conexao = new ConexaoBD();
 
 echo "pre";

 var_dump($conexao->conectar());
 echo "<pre>";

*/
 echo "pre";
 var_dump($usuario->carregarUsuario('123456'));
 echo "<pre>";



 ?>

</body>
</html>