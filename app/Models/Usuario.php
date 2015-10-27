<?php
namespace Models;
use Config\BancoDados;

class Usuario
{

    function __construct()
    {

    }

    /**
     * Realiza a autenticacao do proprietario do blog
     * @param $usuario string nome de usuario
     * @param $senha string senha do usuario
     * @return mixed retorna false em caso deproblemas ou os dados do proprietario
     */
    function autenticacao($usuario,$senha)
    {
        $senha = utf8_decode($senha);
        $cripta = base64_encode($senha);
        $conexao = BancoDados::getInstancia();
        $consulta = $conexao->prepare('SELECT * FROM blog WHERE usuario = ? AND senha = ?');
        $consulta->bindValue(1,$usuario,\PDO::PARAM_STR);
        $consulta->bindValue(2,$cripta,\PDO::PARAM_STR);
        $resposta = $consulta->execute();
        if(!$resposta){
            echo 'problemas no sql da autenticacao';
            exit;
        }

        $dados = $consulta->fetch(\PDO::FETCH_OBJ);
        return $dados;
    }

}