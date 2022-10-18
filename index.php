<?php
/*
É boa prática de programação manter os códigos em arquivos separados, para facilitar a edição de códigos e também
evitar possíveis erros possam danificar a aplicação.

Nesse exercício isolamos os códigos PHP dos artigos em uma classe e encapsulamos esse código em uma função,
para acessar essa classe e a função criada é necessário serguir os procedimentos a seguir: 
*/

// Instanciando a conexão, feita no arquivo conexão.php
require 'config.php';
// Fazer o link com o código feito na classe Artigos, utilixando o include.
include 'artigo.php';
// Instanciar a classe Artigos, criando a classe e salvando ele em uma variável, nesse caso usamos $artigo
$artigo = new Artigo($mySql);
/* Referenciar a função exibirArtigos(), salvando a função dentro da variável $artigos,
que recebeu o valor da classe Artigos salvo na variável $artigo */
$artigos = $artigo ->exibir();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="container">
        <h1>Meu Blog</h1>
     <?php foreach ($artigos as $artigo) { ?>
        <h2>
            <a href="<?php echo $artigo ['link']; ?>">
            <?php echo $artigo ['titulo']; ?>
            </a>
        </h2>
        <p>
        <?php echo $artigo ['conteudo']; ?>
        </p>
    
     <?php } ?>
    </div>
</body>

</html>