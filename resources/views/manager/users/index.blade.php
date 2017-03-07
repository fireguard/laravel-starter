@extends('manager.layouts.app')

@section('page-title')
    Listagem de Usuários
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('manager.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Listagem de Usuários</li>
    </ol>
@endsection

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-users"></i> Usuários</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar / Maximizar">
                    <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remover">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-hover table-condensed" >
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Função</th>
                            <th class="text-center">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->function }}</td>
                                <td style="width: 140px;">
                                    <a href="{{ route('manager.users.edit', ['id' => $user->id]) }}" class="btn btn-warning btn-xs">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
                                    </a>
                                    <a href="{{ route('manager.users.edit', ['id' => $user->id]) }}" class="btn btn-danger btn-xs">
                                        <i class="fa fa-times-circle" aria-hidden="true"></i> Excluir
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            <a href="{{ route('manager.users.create') }}" class="btn btn-primary btn-sm">Cadastrar novo usuário</a>
            {{ $users->links() }}
        </div>
        <!-- /.box-footer-->
    </div>
@endsection
