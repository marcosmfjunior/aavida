<?php
require_once('vendor/autoload.php');
require_once('app/Views/newBlog.php');

use Models\Blog;


switch($_REQUEST['op']){

    case 'new':
        newBlog();
        break;
}


function newBlog(){

    if(empty($_POST['titulo']) || empty($_POST['descricao'])){
        echo utf8_decode('Preencha todos os campos do formulário! Usuário doido!');
        echo "<br /><a href=\"http://localhost/blog/new.php\">Voltar</a>";
        exit;
    }

    $dadosBlog = array(
        'titulo'      => utf8_decode($_POST['titulo']),
        'descricao'     => utf8_decode($_POST['descricao']),
        'usuario'     => $_POST['usuario'],
        'senha'     => utf8_decode($_POST['senha'])
    );

    $blog = new Blog();
    $retorno = $blog->criarBlog($dadosBlog);
    if(!$retorno){
        echo "erro";
    }

    if($retorno){
         echo '<a href="http://localhost/blog">Ir para o Blog</a>';
    }
}
