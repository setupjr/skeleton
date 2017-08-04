@extends('layouts.login')

@section('content')
<div class="login-box">
    <div>
        <div class="login-form row">
            <div class="col-sm-12">
                <div class="login-body">
                    <div class="progress hidden" id="login-progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            Log In...
                        </div>
                    </div>
                    <form method="post" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Login:</label>
                            <input name="email" id="email" type="text" class="form-control" required autofocus/>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Senha</label>
                            <input name="password" id="password" type="password" class="form-control" value="" />

                            @if ($errors->has('password'))
                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="checkbox3 checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">
                                    Manter conectado
                                </label>
                            </div>
                        </div>
                        <div class="login-button text-center">
                            <input type="submit" class="btn btn-primary" value="Login">
                        </div>
                    </form>
                </div>
                <div class="login-footer">
                    <span class="text-right"><a href="{{ url('/password/reset') }}" class="color-white">Esqueceu sua senha?</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection