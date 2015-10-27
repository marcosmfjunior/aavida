
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo 'Adm Comentario'?></title>
    </head>
    <body>
	
	<br />
	<?php
		if(empty($conjuntoComentarios)) echo '<h4>Nenhum comentário, seja o primeiro a comentar!</h4>';
        if(!empty($conjuntoComentarios)){
        	echo "<table border='1'>
        		<tr>
					<td>Nome</td>
					<td>Comentario</td>
					<td>Data</td>
					<td>Aprovado</td>
					<td>Acoes</td>
			    </tr>";
            foreach($conjuntoComentarios as $comentario){
				   echo "<tr> 
						<td>$comentario->nome</td>
						<td>$comentario->texto</td>
						<td>$comentario->data</td>
						<td>$comentario->aprovado</td>						
						<td><a href='http://localhost/blog/admin_comentarios.php?op=aprovar&&id=$comentario->id_comentario'>Aprovar</a> </td><td> <a href='http://localhost/arquivos/blog/admin_comentarios.php?op=excluir&&id=$comentario->id_comentario'>Excluir</a></td>
					</tr>";
                }
        }
	?>
	<br /><br />
    <a href="http://localhost/blog">Voltar ao Blog</a>
    <br /><br />
	
    </body>
</html>
