@extends('layouts.app')

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
            {{--<p class="login-box-msg">Sign in to start your session</p>--}}

            <form action="/" method="get">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="E-mail">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Senha">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Mantenha-me conectado
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
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
                <br><a href="#" >Esqueceu sua senha?</a>
            </div>
            {{--<a href="register.html" class="text-center">Register a new membership</a>--}}

        </div>
        <!-- /.login-box-body -->
    </div>
@endsection
