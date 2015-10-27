<?php
//session_start();
if($_SESSION['logado'] != 1) header("Location: http://localhost/blog");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $dadosUsuario->titulo; ?></title>
    </head>
    <body>
	<h2>Bem vindo <?=$_SESSION['nomeUsuario'];?>!</h2>
	<a href="http://localhost/blog/admin_posts.php">Administrar Postagens</a><br />
	<a href="http://localhost/blog/admin_comentarios.php">Administrar Comentários</a><br />
	<a href="http://localhost/blog/login.php?op=logout">Sair</a><br />
    </body>
</html>
