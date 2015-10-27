<?php
require_once('vendor/autoload.php');
use Models\Blog, Models\Post, Models\Usuario;


if(!isset($_REQUEST['op'])) paginaInicial();

if(isset($_REQUEST['op'])){


    switch($_REQUEST['op']){

        case 'login':
            login();
            break;

        case 'logout':
            logout();
            break;

        default:
            paginaInicial();
            break;

    }

}



function login(){

    if(empty($_POST['usuario']) || empty($_POST['senha'])){
        header("Location: http://localhost/blog");
    }


    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $pessoa = new Usuario();

    $dadosUsuario = $pessoa->autenticacao($usuario,$senha);

    if(empty($dadosUsuario)){
        echo 'Login ou senha inválidos <a href="http://localhost/blog">Voltar</a>';
        exit;
    }


    session_start();
    $_SESSION['logado'] = 1;
    $_SESSION['id_blog'] = $dadosUsuario->id_blog;
    $_SESSION['nomeUsuario'] = $dadosUsuario->usuario;
    require('app/Views/menuAdmin.php');

}





function paginaInicial(){
    $blog = new Blog();
    $dadosBlog = $blog->getBlog();
    $post = new Post();
    $textos = $post->getPosts($dadosBlog->id_blog);

    require_once('app/Views/inicial.php');
}




function logout(){
    //session_start();
    session_destroy();
    //paginaInicial()
    header("Location: http://localhost/blog");
}





