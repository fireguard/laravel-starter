@extends('site.layouts.app')

@section('page-title')
    Home <small>Version 1.0</small>
@endsection

@section('content')
    @if(Auth::check())
        <div style="float: right; text-align: right">
            Usuário: {{ Auth::user()->name }}
            <br><a href="{{ route('manager.home') }}">Administrar</a>
        </div>

    @else
        <div style="float: right; text-align: right">
            <br><a href="{{ route('login') }}">Logar</a>
        </div>
    @endif


    <div>
        Site
    </div>
@endsection
