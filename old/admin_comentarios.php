<?php
require_once('vendor/autoload.php');
use Models\Comentario;

session_start();

if(!$_SESSION['logado']){
	echo 'Area restrita! <br /><a href="http://localhost/blog">Voltar</a>';
}

if($_SESSION['logado']){

	if(empty($_REQUEST['op'])) listar();

	if(!empty($_REQUEST['op'])){
		
		switch($_REQUEST['op']){

			case 'aprovar':
				aprovarComentario();
	
			case 'excluir':
				excluirComentario();

			default:
				listar();
				break;
		}

	}
	
}

function listar(){

    $comentario = new Comentario();
    $conjuntoComentarios = $comentario->getComentariosParaAprovar();
    require_once('app/Views/adminComentario.php');
}

function aprovarComentario(){
		$id = $_GET['id'];
		$comentario = new Comentario();
    	$retorno = $comentario->aprovar($id);
    	if(!$retorno)
        	echo 'Problemas na aprovação do comentários, volte mais tarde <br />';
        else
        	{
        	echo 'aprovaçao realizada <br />
            <a href="http://localhost/blog/admin_comentarios.php">Voltar </a>';
        	exit;
        	}
}

function excluirComentario(){
	$id = $_GET['id'];
	$comentario = new Comentario();
    	$retorno = $comentario->excluir($id);
    	if(!$retorno)
        	echo 'Problemas na exclusão do comentários, volte mais tarde <br />';
        else
        	{
        	echo 'exclusão realizada <br />
            <a href="http://localhost/blog/admin_comentarios.php">Voltar </a>';
        	exit;
        	}
}
