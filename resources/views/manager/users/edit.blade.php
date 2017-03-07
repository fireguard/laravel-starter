@extends('manager.layouts.app')

@section('page-title')
    Edição de Usuários
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('manager.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('manager.users') }}"><i class="fa fa-users"></i> Usuários</a></li>
        <li class="active">Edição de Usuários</li>
    </ol>
@endsection

@section('content')
    <form role="form" method="POST" action="{{ route('login') }}">
        @include('manager.users.form')
    </form>
@endsection
