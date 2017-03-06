@extends('manager.layouts.app')

@section('page-title')
    Página de erro
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Página de erro</li>
    </ol>
@endsection

@section('content')
    <div class="error-page">
        <h2 class="headline text-red"> 500</h2>
        <div class="error-content">
            <h3 style="padding-top: 25px;"><i class="fa fa-warning text-red"></i> Erro ao processar seu pedido.</h3>

            <p style="text-align: justify;">
                Estamos registrando o erro gerado no processamento, caso o problema persista entre em contato com
                nosso departamento de suporte para buscarmos uma solução para o problema encontrado.
            </p>
        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
    @include('includes.debug-errors')
@endsection
