<!DOCTYPE html>
<html lang="pt-BR">
    <head>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edição/Inclusão de post</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="js/jquery.filedrop.js"></script>
        <script src="js/script.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>

        <script type="text/javascript">
        tinymce.init({
            selector: "#mytextarea",
            theme: "modern",
            width: 1000,
            plugins: [
                 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                 "save table contextmenu directionality emoticons template paste textcolor"
           ]
        });
        </script>
    </head>
    <body>   
    <form  name="posts" method="post" action="admin_posts.php" style="padding:20px;">
        Titulo:<br> <input  type="text" name="titulo" size="100"/><br/><br>
        Notícia:<textarea name="texto" id="mytextarea"></textarea>
        <input type="hidden" name="op" value="salvar">
        <input type="hidden" name="id_blog" value="<?=$dadosBlog->id_blog;?>"><br><br>
        <input type="submit" value="Enviar" allign="center">
    </form>
    <section>
       <div id="dropbox">
            <span class="message">Arraste as imagens que deseja, com o nome das mesmas sendo a descriçao que consta no site <br/><br><i>É permitido o envio de arquivos com as extensoes: 'jpg', 'jpeg' , 'png' , 'gif'</i></span>
        </div>
            <p align="center"><br>Qualquer duvida entre em contato pelo email: marcosmf_junior@hotmail.com<br><a href="http://marcosmartinsjr.com/">www.marcosmartinsjr.com</a></p>
    </section>  

    <a href="./">Voltar ao Blog</a>
    <br /><br />
    </body>
</html>

