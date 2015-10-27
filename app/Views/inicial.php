<html>
    <head>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aavida</title>


        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        
        <link href='http://fonts.googleapis.com/css?family=Amatic+SC:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Sansita+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">        

        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script src="js/headroom.js"></script>
        <script src="js/scrollMagic.js"></script>    
        <script src="js/wow.js"></script>        
    </head>
    <body>
    <!-- INICIO MENU -->
    <nav class="navbar navbar-default navbar-fixed-top " id="tf-menu">
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
 
        <div id="pinContainer">
            <section class="panel somos espacamento wow bounceInUp" >
                <h3 >Quem Somos</h3>
                    <div class="col-md-12" >
                        <?php include 'app/Views/inicial_quemsomos.php'; ?>
                    </div>
            </section>
            <section class="panel historia espacamento ">
                <h3>Nossa História</h3>               
                    <div class="col-md-12"> 
                        <?php include 'app/Views/inicial_historia.php'; ?><br>
                    </div> 
            </section>
            <section class="panel mantedora espacamento">
                <h3>Mantedora</h3>
                    <div class="col-md-12">
                        <?php include 'app/Views/inicial_mantedora.php'; ?><br>
                    </div>
            </section>
        </div>
  
    
    <div class="container espacamento wow fadeInUp">
    <div class="titulo"><h3>Notícias e Eventos</h3>
    </div>   
        <div class="espacamento noticia">    
            
            <?php
                foreach($textos as $post){      
                    $post->texto = (substr($post->texto, 0,200)).'...';

                    echo '<div class="col-sm-3"><li class="list-group-item" align="center"><b>'  . $post->titulo .'</b><br><small>'.$post->data.'</small><br><br>'.$post->texto;
                    echo "<a href=\"noticia.php?id_post=$post->id_post\"><li class=\"list-group-item\" align=\"center\">Ler Notícia Completa</li></a></li></div>";
                }
            ?>
        </div>
        <div class="col-sm-12"><br>
            <a href="noticias.php">
                <li class="list-group-item" align="center">                    
                    todas as notícias
                </li>
            </a>
        </div>        
    </div>

    <div class="container contribua wow zoomIn	">
        <h1>Colabore Conosco</h1>
        <h2>Mantenha o sorriso de uma criança sempre aberto!</h2>
    </div>
    <footer class="footer-distributed">

            <div class="footer-left">

                <h3><span>AAVida</span></h3>

                <p class="footer-links">
                    <a href="#">Home</a>
                    ·
                    <a href="noticias.php">Noticias</a>
                    ·
                    <a href="#">menu2</a>
                    ·
                    <a href="#">menu3</a>
                    ·
                    <a href="#">menu4</a>
                    ·
                    <a href="#">Contato</a>
                </p>

                <p class="footer-company-name"></p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Rua Artede Alvin, 60 </span> Divinópolis/MG</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>(37) 3214-5505</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p>email@email.com</p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>Conecte-se conosco</span>
                    Fique por dentro do que acontece na AAvida através das redes sociais.
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>

                </div>

            </div>

        </footer>
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

    //$(".h").attr('style',  'background: url(css/images/header10.jpg) no-repeat center top');
    
        $("#tf-menu").headroom({
          "offset": 200,
           "tolerance" : {
            up : 50,
            down : 0
            },
        });

    
        //biblioteca wow para aparecer os elementos com o scroll
       wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       100,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();

        $(window).bind('scroll', function() {      
        var teste = $(window).scrollTop();
        if ($(window).scrollTop() > 650) {            
            $('.navbar-default').addClass('on');
        } else {
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
            .fromTo("section.panel.historia", 1, {x: "-120%"}, {x: "0%", ease: Linear.easeNone})  // in from left
            .fromTo("section.panel.mantedora", 1, {y: "120%"}, {y: "0%", ease: Linear.easeNone}); // in from top

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

    //var tempo = setInterval(myTimer, 3000);
    //var body = $('body');
    var fotos = [
        'url(css/images/IMG_7706.jpg)', 
        'url(css/images/IMG_7702.jpg)',
        'url(css/images/header.jpg)'
    ];
    var current = 0;

    function proximaFoto() {

        $('.h').fadeOut(500,function() {
        $(".h").css(
        'backgroundImage',
            fotos[current = ++current % fotos.length]
        );
        $(".h").fadeIn(500);
        });

        setTimeout(proximaFoto, 5000);
    }

    setTimeout(proximaFoto, 5000);
    $(".h").css('backgroundImage', fotos[0]);        
    
    //function myTimer() {
        //$(".h").css('backgroundImage', 'url(css/images/header10.jpg)')
    //}
    </script>
</html>