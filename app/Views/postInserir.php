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
        <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>

        <script type="text/javascript">
        tinymce.init({
            selector: "#mytextarea",
            theme: "modern",
            height:500,
            plugins: [
                 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                 "save table contextmenu directionality emoticons template paste textcolor jbimages"
           ],
           toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link  jbimages",
            relative_urls: false
        });
        </script>
    </head>
    <body>   
    <form  name="posts" method="post" action="admin_posts.php" enctype="multipart/form-data" style="padding:20px;width:100%;">
        Titulo:<br> <input  type="text" name="titulo" size="150"/><br/><br>
        Notícia:<textarea name="texto" id="mytextarea"></textarea>        
        <input type="hidden" name="op" value="salvar">
        <input type="hidden" name="id_blog" value="<?=$dadosBlog->id_blog;?>"><br><br>
        <input type="submit" value="Enviar" allign="center">
    </form>

  

    <a href="./">Voltar ao Blog</a>
    <br /><br />
    </body>
</html>

