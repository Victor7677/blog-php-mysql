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
    // Cria função com strings da variavel e retorna nada por ser uma 'INSERT' (:void)
    public function adicionar(string $titulo, string $conteudo): void
    {
    // Retornar pedido do banco de dados
        $insereArtigo = $this->mysql->prepare('INSERT INTO artigos (titulo, conteudo) VALUES (?,?);');
    // Define os paramentros informado por 'VALUES'
        $insereArtigo->bind_param('ss', $titulo, $conteudo);
    // Metodo de execução
        $insereArtigo->execute();
    }

    public function exibir(): array 
    {

        // Realiza consulta no banco de dados
        $result = $this->mysql->query('SELECT id,titulo,conteudo FROM artigos');
        // O método fetch_all retorna um array associativo com valor inteiro   
        $artigos = $result->fetch_all(MYSQLI_ASSOC);
 
         return $artigos;
    }

    public function encontrarId(string $id):array
    {   
       $selectArtigo = $this->mysql->prepare("SELECT id, titulo, conteudo FROM artigos WHERE id=?");
       $selectArtigo->bind_param('s',$id);
       $selectArtigo->execute();
       $artigo = $selectArtigo->get_result()->fetch_assoc();
       return $artigo;
    }
}


?>