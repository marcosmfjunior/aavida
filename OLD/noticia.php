<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
</html>
<?php
require_once('vendor/autoload.php');
use Models\Post;
use Models\Comentario;
use Models\Blog;
if(!isset($_REQUEST['id_post'])) header('Location: http://localhost/blog');

if(isset($_REQUEST['id_post'])){
    //var_dump($_REQUEST);
    if(!isset($_REQUEST['op'])){
        //exibirComentarios($_REQUEST['id_post']);
        //exit;
        $_REQUEST['op'] = 'exibir';
    }

    switch($_REQUEST['op']){

        case 'inserir':
            inserirComentario($_REQUEST['id_post']);
            break;

        case 'exibir':
            exibirComentarios($_REQUEST['id_post']);
            break;

        default:
            exibirComentarios($_REQUEST['id_post']);
            break;

    }

}


function exibirComentarios($idPost){

    $blog = new Blog();
    $dadosBlog = $blog->getBlog();
    $postagem = new Post();
    $post = $postagem->getPost($idPost);
    $comentario = new Comentario();
    $conjuntoComentarios = $comentario->getComentariosPost($idPost);
    require_once('app/Views/comentarios.php');

}


function inserirComentario($idPost){

    if(empty($_POST['nome']) || empty($_POST['comentario'])){
        echo utf8_decode('Preencha todos os campos do formulário! Usuário doido!');
        echo "<br /><a href=\"http://localhost/blog/comentarios.php?id_post=$idPost\">Voltar</a>";
        exit;
    }

    $dadosComentario = array(
        'id_post'   => $idPost,
        'nome'      => $_POST['nome'],
        'texto'     => $_POST['comentario']
    );

    $comentario = new Comentario();
    $retorno = $comentario->inserir($dadosComentario);
    if(!$retorno){
        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Houve um erro, tente mais tarde')
    window.location.href='http://localhost/blog/comentarios.php?id_post=".$idPost."';
    </SCRIPT>");
    }

    if($retorno){
        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Seu comentário foi inserido com sucesso, aguarde aprovação')
    window.location.href='http://localhost/blog/comentarios.php?id_post=".$idPost."';
    </SCRIPT>");
    }
}
