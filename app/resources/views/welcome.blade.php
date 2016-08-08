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

        .page-register {
            margin-top: 0px !important;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .title-class {
            margin-bottom: 55px;
            margin-top: 35px;
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
                    <a href="#register" class="btn-large waves-effect waves-light red">Registrate</a>
                </div>
                <br><br>
            </div>
        </div>
    </div>

    <div id="register" class="page-register default_color scrollspy">
        <div class="container">  
            <div class="row">
                <div class="col s12">
                    {!! Form::open(['url' => 'register', 'method' => 'POST', 'class' => 'col s12']) !!}
                        <div class="title-class">
                            <h3 class="center white-text">Registro</h3>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix white-text">account_circle</i>
                                {!! Form::text('name', null, ['class' => 'validate while-text', 'id' => 'name', 'required' => 'required']) !!}
                                {!! Form::label('name', 'Nombre', ['class' => 'white-text']) !!}
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix white-text">email</i>
                                {!! Form::email('email', null, ['class' => 'validate while-text', 'id' => 'email', 'required' => 'required']) !!}
                                {!! Form::label('email', 'Correo electronico', ['class' => 'white-text']) !!}
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix white-text">phone</i>
                                {!! Form::text('phone', null, ['class' => 'validate while-text', 'id' => 'phone', 'required' => 'required']) !!}
                                {!! Form::label('phone', 'Telefono', ['class' => 'white-text']) !!}
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix white-text">grade</i>
                                {!! Form::select('semester', config('semester'), null, ['class' => 'validate white-text', 'id' => 'semester', 'required' => 'required']) !!}
                                {!! Form::label('semester', 'Semestre', ['class' => 'white-text']) !!}
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix white-text">dns</i>
                                <select class="validate white-text" id="icon_plan">
                                  <option value="" disabled selected>Choose your option</option>
                                  <option value="1">Option 1</option>
                                  <option value="2">Option 2</option>
                                  <option value="3">Option 3</option>
                                </select>
                                <label for="icon_plan" class="white-text">Plan</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix white-text">sort_by_alpha</i>
                                <input id="icon_course" name="message" type="text" class="validate white-text"></input>
                                <label for="icon_course" class="white-text">Curso</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix white-text">person_pin</i>
                                <input id="icon_code" name="message" type="text" class="validate white-text"></input>
                                <label for="icon_code" class="white-text">Codigo</label>
                            </div>
                            <div class="col s12 right-align">
                                <button class="btn waves-effect waves-light red darken-1" type="submit">Enviar
                                    <i class="material-icons right white-text">playlist_add</i>
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    
    {!! Html::script('js/jquery-3.1.0.min.js') !!}
    {!! Html::script('js/jquery-migrate-1.4.1.min.js') !!}
    {!! Html::script('js/materialize.min.js') !!}
    <script>
        $(".button-collapse").sideNav();
        $('.scrollspy').scrollSpy();
        $('select').material_select();
    </script>
</body>
</html>
