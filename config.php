<?php
/* -------------------------------------- Trabalhando com Banco de Dados ------------------------------------------
Para conectar o projeto PHP com o banco de dados é necessário estabelecer uma conexão, fazer a referência no
projeto que tem uma conexão com um banco de dados. Essa conexão deve ser feita da seguinte forma:
*/
// 1 - Referênciar o banco de dados, salvando a conexão em uma variável, nesse caso usamos a variável $mysql
// A função mysqli() pede 4 parâmetros
// Ex. mysqli('nome do host', 'nome de usuário do banco de dados', 'senha de acesso', 'nome do banco de dados')
$mySql = new mysqli('localhost','root', '','blog');

// 2 - Determinar o charste do banco de dados, para isso iremos usar a função set_charset()
// A função set_charset pede 1 parametro
// Ex. set_charset('nome do charset que será utilizado no banco de dados')
$mySql -> set_charset('utf8');
if ($mySql==true){
    echo "banco conectado";
} else{
    echo "erro de conexão";
}
?>