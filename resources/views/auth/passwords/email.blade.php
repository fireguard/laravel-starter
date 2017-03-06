@extends('manager.layouts.app')

@section('page-title')
    Recuperar senha
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-user"></i> Login</a></li>
        <li class="active">Recuperar senha</li>
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
            <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}


                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" placeholder="E-mail" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group text-center" >
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-arrow-circle-o-right"></i> Recuperar senha
                    </button>
                </div>
            </form>


        </div>
    </div>
@endsection
