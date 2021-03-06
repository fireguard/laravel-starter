@extends('manager.layouts.app')

@section('page-title')
    Página não encontrada
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Página não encontrada</li>
    </ol>
@endsection

@section('content')
    <div class="error-page">
        <h2 class="headline text-red"> 404</h2>

        <div class="error-content">
            <h3 style="padding-top: 25px;"><i class="fa fa-warning text-red"></i> Oops! Página não encontrada.</h3>

            <p style="text-align: justify;">
                Nós não encontramos a página ou recurso solicitado, é possível que o mesmo tenha sido removido
                ou mudou de endereço. Volte a <a href="/">página inicial</a> para continuar a navegação.
            </p>
        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
    @include('includes.debug-errors')
@endsection
