@extends('manager.layouts.modal')

@section('title')
    <i class="fa fa-users"></i> Cadastro de Usuários
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('manager.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('manager.users') }}"><i class="fa fa-users"></i> Usuários</a></li>
        <li class="active">Cadastro de Usuários</li>
    </ol>
@endsection

@section('content')
    {!! $form->renderWithScripts() !!}

@endsection

@section('footer')
    <script>
        submitForm('{{$form->getId()}}', {'reload': true});
    </script>
@endsection
