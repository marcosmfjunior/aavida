<?php
namespace Models;
use Config\BancoDados;
class Post
{
    public function getPosts($idBlog)
    {
        $conexao = BancoDados::getInstancia();
        //nunca use * em projetos de medio-grande porte
        $consulta = $conexao->prepare('SELECT * FROM post WHERE id_blog = ? ORDER BY data DESC LIMIT 4');
        $consulta->bindValue(1,$idBlog,\PDO::PARAM_INT);
        $resposta = $consulta->execute();
        if(!$resposta){
            echo 'Problema ao buscar noticia '.$idBlog;
            exit;
        }
        $posts = $consulta->fetchAll(\PDO::FETCH_OBJ);
        return $posts;

    }

    public function getPost($idPost)
    {
        $conexao = BancoDados::getInstancia();
        $consulta = $conexao->prepare('SELECT * FROM post WHERE id_post = ?');
        $consulta->bindValue(1,$idPost,\PDO::PARAM_INT);
        $resposta = $consulta->execute();
        if(!$resposta){
            echo 'problema na consulta do post id = '.$idPost;
            exit;
        }
        $post = $consulta->fetch(\PDO::FETCH_OBJ);
        return $post;
    }
	
	function inserir($dados)
    {
        $conexao = BancoDados::getInstancia();
        $consulta = $conexao->prepare('INSERT INTO post (
                          id_post,
                          id_blog,
                          titulo,
                          texto,
                          data) VALUES(null,
                                            ?,
                                            ?,
                                            ?,
                                            NOW()
                                            )'
                                    );
        $consulta->bindValue(1,$dados['id_blog'],\PDO::PARAM_INT);
        $consulta->bindValue(2, $dados['titulo'],\PDO::PARAM_STR);
        $consulta->bindValue(3,$dados['texto'],\PDO::PARAM_STR);
		$resposta = $consulta->execute();
		if(!$resposta) return false;
		if($resposta) return true;			
    }
	
	function atualizar($dados)
    {
        $conexao = BancoDados::getInstancia();
        $consulta = $conexao->prepare('UPDATE post SET titulo=?, texto=?, data=NOW() WHERE id_post = ?');
		$consulta->bindValue(1,$dados['titulo'],\PDO::PARAM_STR);
        $consulta->bindValue(2, $dados['texto'],\PDO::PARAM_STR);
		$consulta->bindValue(3,$dados['id_post'],\PDO::PARAM_INT);
        $resposta = $consulta->execute();
		
        if(!$resposta)
            return false;
        else
          return true;
        
    }
	
	function excluir($id_post)
    {
        $conexao = BancoDados::getInstancia();
		$consulta = $conexao->prepare('DELETE FROM comentario WHERE id_post = ?');
		$consulta->bindValue(1,$id_post,\PDO::PARAM_INT);
        $resposta = $consulta->execute();
		
        $consulta = $conexao->prepare('DELETE FROM post WHERE id_post = ?');
		$consulta->bindValue(1,$id_post,\PDO::PARAM_INT);
        $resposta = $consulta->execute();
		
        if(!$resposta)
            return false;
        else
          return true;
        
    }
}