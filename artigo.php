<?php
/* A finalidade desse arquivo que abriga a classe Artigos é de escrever o código PHP pe irá automatizar
a donstrução e edição de posts na pagina do blog e fazer a conexão com banco de dados
*/

class Artigo 
{
     // Inicia a variável $mysql
    private $mySql;

     // Cria a função construtora
    public function __construct(mysqli $mySql)
    {
        $this->mysql = $mySql;
    
    }

    public function exibir(): array 
    {

        // Realiza consulta no banco de dados
        $result = $this->mysql->query('SELECT id,titulo,conteudo FROM artigos');
        // O método fetch_all retorna um array associativo com valor inteiro   
        $artigos = $result->fetch_all(MYSQLI_ASSOC);
 
         return $artigos;
    }
}


?>