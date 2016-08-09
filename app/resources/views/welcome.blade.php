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
    {!! Html::style('css/styles.css') !!}
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
                    {!! Form::open(['url' => 'register', 'method' => 'POST', 'class' => 'col s12', 'id' => 'formValidate']) !!}
                        <div class="title-class">
                            <h3 class="center white-text">Registro</h3>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix white-text">account_circle</i>
                                {!! Form::text('name', null, ['class' => 'validate while-text', 'id' => 'name', 'autocomplete' => 'off']) !!}
                                {!! Form::label('name', 'Nombre', ['class' => 'validate white-text']) !!}
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix white-text">email</i>
                                {!! Form::text('email', null, ['class' => 'validate while-text', 'autocomplete' => 'off']) !!}
                                {!! Form::label('email', 'Correo electronico', ['class' => 'white-text']) !!}
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix white-text">phone</i>
                                {!! Form::text('phone', null, ['class' => 'validate while-text', 'autocomplete' => 'off']) !!}
                                {!! Form::label('phone', 'Telefono', ['class' => 'white-text']) !!}
                            </div>
                            <div class="input-select col s12">
                                <i class="material-icons white-text">polymer</i>
                                {!! Form::select('semester', config('semester'), null, ['class' => 'browser-default', 'required' => 'required']) !!}
                            </div>
                            <div class="input-select col s12">
                                <i class="material-icons white-text">dns</i>
                                {!! Form::select('plan', config('plan'), null, ['class' => 'white-text browser-default', 'required' => 'required']) !!}
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix white-text">sort_by_alpha</i>
                                {!! Form::text('course', null, ['class' => 'validate while-text', 'autocomplete' => 'off']) !!}
                                {!! Form::label('course', 'Curso', ['class' => 'white-text']) !!}
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix white-text">person_pin</i>
                                {!! Form::text('code', null, ['class' => 'validate while-text', 'autocomplete' => 'off']) !!}
                                {!! Form::label('code', 'Codigo', ['class' => 'white-text']) !!}
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
    {!! Html::script('js/jquery.validate.js') !!}
    {!! Html::script('js/scripts.js') !!}
</body>
</html>
