<!DOCTYPE html>
<html>
    <head>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $post->titulo.' - Comentario'; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
    </head>
    <body>
    <!-- INICIO MENU -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <a class="navbar-brand" href="./" ><?php echo utf8_encode($dadosBlog->titulo); ?></a>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" >
                 <li><a class="glyphicon glyphicon-home" align="center" aria-hidden="true" href="#"><br>Home </a></li>
                 <li class="dropdown" >
                     <a href="#" class="dropdown-toggle" align="center" data-toggle="dropdown" aria-haspopup="true" aria-hidden="true"  aria-expanded="false">
                        <div class="glyphicon glyphicon-user"><span class="sr-only">(current)</span><br>Login</div>
                    </a>
                    <ul class="dropdown-menu">
                    <li>
                        <form name="loginUsuario" method="post" action="login.php">
                            Usuário: <input type="text" name="usuario" id="usuario" size="10" /><br />
                            Senha: <input type="password" name="senha" id="senha" size="11" />
                            <input type="hidden" name="op" value="login" />
                            <input type="submit" value="Acessar" />
                        </form>                        
                    </li>
                  </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- FIM MENU-->
   
    
    <div class="container">
        <div class="espacamento">
        <?php
            $post->data = date('d/m/Y', strtotime($post->data));
            echo '<div align="center"><h2>' . $post->titulo . '</h2></div>';
            echo '<div class="panel-body">';
            echo '<p>' . nl2br($post->texto) . '<p>';
            echo "<br /><small>".$post->data."</small>";
            echo '</div></div></div></div>';
               
        ?>            
        </div><hr>
        <?php
		if(empty($conjuntoComentarios)) echo '<h6>Nenhum comentário, seja o primeiro a comentar!</h6>';
        if(!empty($conjuntoComentarios)){
            foreach($conjuntoComentarios as $comentario){
                echo "<strong>$comentario->nome</strong> <small>em $comentario->data</small><br />";
                echo "Comentario:<br />$comentario->texto<br /><br />";
            }
        }
        foreach($conjuntoImagens as $imagem){
                echo "<img src=".$imagem->caminho." ></small><br />";
            }
        ?>
	
	<br /><br />	
	<!--<form name="comentarios" method="post" action="noticia.php">
		Nome: <input type="text" name="nome" size="33" /><br />
		Comentário<br /><textarea name="comentario" rows="15" cols="38"></textarea><br />
		<input type="hidden" name="op" value="inserir">
		<input type="hidden" name="id_post" value="<?=$post->id_post;?>">
		<input type="submit" value="Enviar">
	</form> -->
    <a href="./">Voltar ao Blog</a>
    <br /><br />
    </div>
    </body>
</html>

