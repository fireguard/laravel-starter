@extends('layouts.app')

@section('page-title')
    Acesso negado
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Acesso negado</li>
    </ol>
@endsection

@section('content')
    <div class="error-page">
        <h2 class="headline text-red"> 403</h2>

        <div class="error-content">
            <h3 style="padding-top: 25px;"><i class="fa fa-warning text-red"></i> Acesso negado.</h3>
            <p style="text-align: justify;">
                Você tentou acessar uma area a qual não possui permissão.
                Volte a <a href="/">página inicial</a> para continuar a navegação.
            </p>
        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
    @include('includes.debug-errors')
@endsection
