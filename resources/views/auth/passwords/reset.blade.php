@extends('manager.layouts.app')

@section('page-title')
    Definir nova senha
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-user"></i> Login</a></li>
        <li class="active">Definir nova senha</li>
    </ol>
@endsection

@section('content')
    <div class="login-box">
        <div class="logo" style="padding: 5px 0; ">
            <div class="logo-lg">
                <div style="">
                    <img src="{{ asset('images/logo-image.png') }}">
                </div>
                <div class="logo-text" style="padding-top: 5px;">
                    <span class="logo-title">FIREGUARD</span><br />
                    <span class="logo-subtitle" >Soluções em Tecnologia</span>
                </div>
            </div>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form role="form" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">E-mail</label>

                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Nova senha</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="control-label">Confirmar nova senha</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-arrow-circle-o-right"></i> Definir nova senha
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
