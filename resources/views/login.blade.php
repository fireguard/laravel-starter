@extends('layouts.app')

@section('content')
    <div class="login-box">
        <div class="login-logo" style="background-color: #003056">
            <a href="#"><img src="{{ asset('images/logo-full.png') }}"></a>
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
