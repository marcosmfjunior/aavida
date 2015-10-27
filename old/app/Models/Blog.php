<?php
namespace Models;
use Config\BancoDados;
class Blog
{
    private $id;
    private $titulo;
    private $descricao;

    public function getBlog($idBlog = 1)
    {
        $conexao = BancoDados::getInstancia();
        $consulta = $conexao->prepare('SELECT id_blog,titulo,descricao FROM blog WHERE id_blog = ?');
        $consulta->bindValue(1,$idBlog,\PDO::PARAM_INT);
        $resposta = $consulta->execute();
        if(!$resposta){
            echo 'erro na consulta para o blog';
            exit;
        }
        $linha = $consulta->fetch(\PDO::FETCH_OBJ);
        return $linha;
    }

    public function criarBlog($dados)
    {        
        $cripta = base64_encode($dados['senha']);
        $conexao = BancoDados::getInstancia();
        $consulta = $conexao->prepare('INSERT INTO blog (titulo, descricao, usuario, senha) VALUES(?,?,?,?) ');
        $consulta->bindValue(1,$dados['titulo'],\PDO::PARAM_INT);
        $consulta->bindValue(2, $dados['descricao'],\PDO::PARAM_STR);
        $consulta->bindValue(3, $dados['usuario'],\PDO::PARAM_STR);
        $consulta->bindValue(4, $cripta,\PDO::PARAM_STR);
        $resposta = $consulta->execute();
        if(!$resposta) return false;
        if($resposta) return true;  
    }
}