<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {!! Html::style('css/materialize.css') !!}
    <style>
        .default_color{background-color: #2196F3 !important}
        .default_color_text{color: #2196F3 !important}

        .parallax-container {
            position: static;
            min-height: 380px;
            height: auto;
            color: rgba(255,255,255,.9);
        }
        .parallax-container .section {
            width: 100%;
        }

        #index-banner {
            background-image: url(/imgs/background1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }

        @media only screen and (max-width : 992px) {
            .parallax-container .section {
                position: absolute;
                top: 40%;
            }
            #index-banner .section {
                top: 5%;
            }
        }

        @media only screen and (max-width : 600px) {
            #index-banner .section {
                top: 0;
            }
        }
    </style>
</head>
<body id="top" class="scrollspy">
    <div class="navbar-fixed">
        <nav class="default_color" role="navigation">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#top" class="brand-logo">Logo</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#register">Registrar</a></li>
                        <li><a href="#registered">Registrados</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#register">Registrar</a></li>
                        <li><a href="#registered">Registrados</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center default_color_text">Parallax Template</h1>
                <div class="row center">
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
                <div class="row center">
                    <a href="#register" class="btn-large waves-effect waves-light default_color">Registrate</a>
                </div>
                <br><br>
            </div>
        </div>
    </div>
    
    {!! Html::script('js/jquery-3.1.0.min.js') !!}
    {!! Html::script('js/jquery-migrate-1.4.1.min.js') !!}
    {!! Html::script('js/materialize.min.js') !!}
    <script>
        $(".button-collapse").sideNav();
        $('.scrollspy').scrollSpy();
        $('.parallax').parallax();
    </script>
</body>
</html>
