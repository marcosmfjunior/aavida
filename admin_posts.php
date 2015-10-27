<?php
require_once('vendor/autoload.php');
use Models\Blog, Models\Post, Models\Imagem;

session_start();

if(!$_SESSION['logado']){
	echo 'Area restrita! <br /><a href="http://localhost/blog">Voltar</a>';
}

if($_SESSION['logado']){

	if(empty($_REQUEST['op'])) listar();

	if(!empty($_REQUEST['op'])){
		
		switch($_REQUEST['op']){
			case 'editar':
				editarPost($_GET['id_post']);
				break;
				
			case 'inserir':
				inserirPost();
				break;
				
			case 'salvar':
				salvarPost();
				break;
	
			case 'excluir':
				excluirPost($_GET['id_post']);
				break;

			default:
				listar();
				break;
		}

	}
	
}

function listar(){
	$blog = new Blog();
	$dadosBlog = $blog->getBlog();
	
    $post = new Post();
    $conjuntoPosts = $post->getPosts($dadosBlog->id_blog);
    require_once('app/Views/adminPost.php');
}

function inserirPost(){
	
    $blog = new Blog();
    $dadosBlog = $blog->getBlog();
    require_once('app/Views/postInserir.php');
}

function editarPost($idPost){
	
    $blog = new Blog();
    $dadosBlog = $blog->getBlog();
    $postagem = new Post();
    $post = $postagem->getPost($idPost);
    require_once('app/Views/postEditar.php');
}

function excluirPost($idPost){
	$blog = new Blog();
    $dadosBlog = $blog->getBlog();
    $postagem = new Post();
    $retorno = $postagem->excluir($idPost);
	if($retorno)
		echo  'Seu post foi excluido com sucesso<br />
				<a href="http://localhost/blog/">Voltar</a>';
	else
			echo  'Seu post nao pode ser excluido<br />
				<a href="http://localhost/blog/">Voltar</a>';
}

function salvarPost(){

    if(empty($_POST['titulo']) || empty($_POST['texto'])){
        echo utf8_decode('Preencha todos os campos do formulário! ');
        echo "<br /><a href=\"http://localhost/blog/\">Voltar</a>";
        exit;
    }

	if(!empty($_POST['id_post'])){
		$dadosPost = array(
			'id_post'   => $_POST['id_post'],
			'titulo'    => $_POST['titulo'],
			'texto'     => $_POST['texto']
		);
		
		$post = new Post();
		$retorno = $post->atualizar($dadosPost);
		if(!$retorno){
        echo 'Problemas ao salvar,tente mais tarde <br />
            <a href="http://localhost/blog/">Voltar</a>';
		}

		if($retorno){
			echo 'Seu post foi salvo com sucesso<br />
				<a href="http://localhost/blog/">Voltar</a>';
		}
	}else{
		$dadosPost = array(
			'id_blog'   => $_POST['id_blog'],
			'titulo'    => $_POST['titulo'],
			'texto'     => $_POST['texto']
		);
		
		$post = new Post();
		$retorno = $post->inserir($dadosPost);
		if(!$retorno){
        echo 'Problemas na inserção de posts, volte mais tarde <br />
            <a href="http://localhost/blog/">Voltar</a>';
		}

		if($retorno){			   

			echo 'Seu post foi inserido com sucesso<br />
				<a href="http://localhost/blog/">Voltar</a>';
		}
	}
}