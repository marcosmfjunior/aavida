<!DOCTYPE html>
<html>
    <head>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vamos Criar um novo Blog!!!</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
    </head>
    <body>

    
    <div class="container">
        <div class="espacamento">  
        	<br /><br /><br>	
        	<form name="new" method="post" action="new.php">
        		Titulo: <input type="text" name="titulo" size="33" /><br />
                Descrição: <input type="text" name="descricao" size="33" /><br />
                Usuário: <input type="text" name="usuario" id="usuario" size="10" /><br />
                Senha: <input type="password" name="senha" id="senha" size="11" /><br />
        		<input type="hidden" name="op" value="new">
        		<input type="submit" value="Enviar">
        	</form>
            <br /><br />
        </div>
    </div>
    </body>
</html>

