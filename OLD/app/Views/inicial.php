<html>
    <head>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aavida</title>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <script src="js/headroom.js"></script>
        
        <script src="js/jQuery.headroom.js"></script>

        <script src="js/scrollMagic.js"></script>
        <script src="js/jquery.ScrollMagic.js"></script>
        <script src="http://janpaepke.github.io/ScrollMagic/js/lib/greensock/TweenMax.min.js"></script>
        <script src="http://janpaepke.github.io/ScrollMagic/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>      

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <link href='http://fonts.googleapis.com/css?family=Amatic+SC:700' rel='stylesheet' type='text/css'>
    </head>
    <body>
    <!-- INICIO MENU -->
    <nav class="navbar navbar-default navbar-fixed-top" id="tf-menu">
        <a class="navbar-brand" href="./" >Logo AAvida</a>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" >
                 <li ><a align="center" aria-hidden="true" href="#"><br>Home <span class="sr-only">(current)</span></a></li>
                 <li ><a align="center" aria-hidden="true" href="#"><br>Home <span class="sr-only">(current)</span></a></li>
                 <li class="dropdown" >
                     <a href="#" class="dropdown-toggle" align="center" data-toggle="dropdown" aria-haspopup="true" aria-hidden="true"  aria-expanded="false">
                        <div class="glyphicon glyphicon-user"><br>Login</div>
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
    <div class="h">
        <h1>Logo AAVida</h1>
        <h3>Algum slogan</h3>
    </div>
    <div class="container espacamento" >
        <div id="pinContainer">
            <section class="panel" >
                <div class="titulo"><h3>Quem Somos</h3></div>
                <div class="row">
                    <div class="col-md-6"><div class="well well-lg">Texto quem somos</div></div>
                    <div class="col-md-6">Texto quem somos 2</div>
                </div>
            </section>
            <section class="panel historia" >
                <div><h3 class="blocoSlider" style="color:white">Nossa História</h3></div>
                <div class="row">
                    <div class="col-md-6">Texto historia</div>
                    <div class="col-md-6">Texto 2</div>
                </div>
            </section>
            <section class="panel missao">
                <div class="titulo"><h3>Nossa Missão e Valores</h3>
                <div class="row">
                    <div class="col-md-6">Texto</div>
                    <div class="col-md-6">.Texto-md-1</div>
                </div>
            </section>
            <section class="panel mantedora">
                <div class="titulo"><h3>Mantedora</h3>
                <div class="row">
                    <div class="col-md-6">.Texto-md-1</div>
                    <div class="col-md-6">.Texto-Texto-1</div>
                </div>
            </section>
        </div>
    </div>
    
    <div class="container espacamento">
    <div class="titulo"><h3>Notícias e Eventos</h3>
    </div>   
        <div class="espacamento">    
            <?php
                foreach($textos as $post){         
                    echo '<div class="col-sm-3"><li class="list-group-item" align="center"><b>'  . $post->titulo .'</b><br><small>'.$post->data.'</small><br><br>'.$post->texto;
                    echo "<a href=\"noticia.php?id_post=$post->id_post\"><li class=\"list-group-item\" align=\"center\">Ler Notícia Completa</li></a></li></div>";
                }
            ?>
        </div>
    </div>
    <div class="container espacamento">
        <div class="col-sm-12">
            <a href="noticias.php">
                <li class="list-group-item" align="center">
                    <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                    Ver todas as notícias
                </li>
            </a>
        </div>        
    </div>
    <!-- 
    <form name="loginUsuario" method="post" action="login.php">
        Usuário: <input type="text" name="usuario" id="usuario" size="10" /><br />
        Senha: <input type="password" name="senha" id="senha" size="11" />
        <input type="hidden" name="op" value="login" />
        <input type="submit" value="Acessar" />

    </form>
    -->
    </body>
    <script type="text/javascript">
        $("#tf-menu").headroom({
          "offset": 200,
          "tolerance": 5,
        });

        $(window).bind('scroll', function() {      
        var teste = $(window).scrollTop();
        if ($(window).scrollTop() > 650) {            
            $('.navbar-default').addClass('on');
        } else {
            console.log('nao');
            $('.navbar-default').removeClass('on');
        }
    });

    $('body').scrollspy({ 
        target: '.navbar-default',
        offset: 80
    })
$(function () { // wait for document ready
        // init
        var controller = new ScrollMagic.Controller();

        // define movement of panels
        var wipeAnimation = new TimelineMax()
            .fromTo("section.panel.historia", 1, {x: "-100%"}, {x: "0%", ease: Linear.easeNone})  // in from left
            .fromTo("section.panel.missao",    1, {x:  "100%"}, {x: "0%", ease: Linear.easeNone})  // in from right
            .fromTo("section.panel.mantedora", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone}); // in from top

        // create scene to pin and link animation
        new ScrollMagic.Scene({
                triggerElement: "#pinContainer",
                triggerHook: "onLeave",
                duration: "300%"
            })
            .setPin("#pinContainer")
            .setTween(wipeAnimation)
            .addIndicators() // add indicators (requires plugin)
            .addTo(controller);
    });
    </script>
</html>