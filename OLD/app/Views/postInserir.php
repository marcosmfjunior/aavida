<!DOCTYPE html>
<html lang="pt-BR">
    <head>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edição/Inclusão de post</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
    </head>
    <body>   
    
	<form name="posts" method="post" action="admin_posts.php">
		Titulo: <input type="text" name="titulo" size="33"/><br />
		Texto: <br /><textarea name="texto" rows="15" cols="38"></textarea><br />
		<input type="hidden" name="op" value="salvar">
		<input type="hidden" name="id_blog" value="<?=$dadosBlog->id_blog;?>">
		<input type="submit" value="Enviar">
	</form>
    <a href="http://localhost/blog">Voltar ao Blog</a>
    <br /><br />
    </body>
</html>

