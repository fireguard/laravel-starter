@extends('manager.layouts.app')

@section('content')
    <div class="login-box" style="max-width: 100%">
        <div class="logo" style="padding: 5px 0; ">
            <div class="logo-lg">
                <div style="">
                    <img src="{{ asset('assets/images/logo-image.png') }}">
                </div>
                <div class="logo-text" style="padding-top: 5px;">
                    <span class="logo-title">FIREGUARD</span><br />
                    <span class="logo-subtitle" >Soluções em Tecnologia</span>
                </div>
            </div>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            {{--<p class="login-box-msg">Sign in to start your session</p>--}}

            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12">

                        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" placeholder="Senha" name="password" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-8">
                        <div class="checkbox form-group ">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Mantenha-me conectado
                            </label>

                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="visible-xs">&nbsp;</div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            {{--<div class="social-auth-links text-center">--}}
                {{--<p>- OU -</p>--}}
                {{--<a href="#" class="btn btn-block btn-social btn-facebook btn-flat">--}}
                    {{--<i class="fa fa-facebook"></i> Logar usando o Facebook--}}
                {{--</a>--}}
                {{--<a href="#" class="btn btn-block btn-social btn-google btn-flat">--}}
                    {{--<i class="fa fa-google-plus"></i> Logar usando o Google+--}}
                {{--</a>--}}
            {{--</div>--}}
            <!-- /.social-auth-links -->

            <div class="text-center small">
                <br><a href="{{ route('password.request') }}" >Esqueceu sua senha?</a>
            </div>
            {{--<a href="register.html" class="text-center">Register a new membership</a>--}}

        </div>
        <!-- /.login-box-body -->
    </div>
@endsection
