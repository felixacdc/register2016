<div id="register" class="page-register default_color scrollspy">
    <div class="container">
        <div class="row">
            <div class="col s12">
                {!! Form::open(['url' => 'register', 'method' => 'POST', 'class' => 'col s12', 'id' => 'formValidate']) !!}
                    <input type="hidden" name="token" id="token" value="{{ csrf_token() }}">
                    <div class="title-class col s6 offset-s3">
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
                            {!! Form::text('code', null, ['class' => 'validate while-text', 'id' => 'code', 'autocomplete' => 'off']) !!}
                            <div id="messageError"></div>
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
