<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo 'Adm Post'?></title>
    </head>
    <body>
	<a href="http://localhost/blog/admin_posts.php?op=inserir">Incluir postagem</a>
	<br />
	<br />
	<?php
		if(empty($conjuntoPosts)) echo '<h4>Nenhum Post :\<br>Poste agora!</h4>';
        if(!empty($conjuntoPosts)){
			echo '<table border="1"><tr>
					<td>Titulo</td>
					<td>Texto</td>
					<td>Data</td>
					<td>Acoes</td>
				</tr>';
			foreach($conjuntoPosts as $post){
				echo "<tr> 
						<td>$post->titulo</td>
						<td>$post->texto</td>
						<td>$post->data</td>
						<td><a href='http://localhost/blog/admin_posts.php?op=editar&&id_post=$post->id_post'>Editar</a> | <a href='http://localhost/arquivos/blog/admin_posts.php?op=excluir&&id_post=$post->id_post'''>Excluir</a></td>
					</tr>
					";
                }
        }
	?>
	<br /><br />
    <a href="http://localhost/blog">Voltar ao Blog</a>
    <br /><br />
	
    </body>
</html>
