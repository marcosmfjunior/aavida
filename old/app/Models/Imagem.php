<?php
namespace Models;
use Config\BancoDados;

class Imagem
{

    function __construct()
    {

    }


    function getImagemPost($idPost)
    {
        $conexao = BancoDados::getInstancia();
        $consulta = $conexao->prepare('SELECT * FROM imagem WHERE id_post = ?');
        $consulta->bindValue(1,$idPost,\PDO::PARAM_INT);
        $resposta = $consulta->execute();
        if(!$resposta){
            echo 'deu ruim paraos comentarios do post id = '.$idPost;
            exit;
        }
        $comentarios = $consulta->fetchAll(\PDO::FETCH_OBJ);
        
        return $comentarios;
    }

    function excluir($id)
    {
        $conexao = BancoDados::getInstancia();
        $consulta = $conexao->prepare('DELETE FROM comentario WHERE id_comentario = ?');
        $consulta->bindValue(1,$id,\PDO::PARAM_INT);
        $resposta = $consulta->execute();
        //return getComentariosParaAprovar();
        if(!$resposta)
            return false;        
        else
            return true;   
        
    }

    /**
     * Insercao de comentarios
     * @param $dados array contendo todos os dadospara criacao de um comentario no banco. Cada indice refere-se a uma coluna
     * @return bool true se inserido com sucesso, false do contrario
     */
    function inserir($dados)
    {
        $conexao = BancoDados::getInstancia();
        $consulta = $conexao->prepare('INSERT INTO comentario (
                          id_comentario,
                          id_post,
                          nome,
                          texto,
                          data,
                          aprovado) VALUES(null,
                                            ?,
                                            ?,
                                            ?,
                                            NOW(),
                                            0
                                            )'
                                    );
        $consulta->bindValue(1,$dados['id_post'],\PDO::PARAM_INT);
        $consulta->bindValue(2, $dados['nome'],\PDO::PARAM_STR);
        $consulta->bindValue(3,$dados['texto'],\PDO::PARAM_STR);
		$resposta = $consulta->execute();
		if(!$resposta) return false;
		if($resposta) return true;			
    }

}
