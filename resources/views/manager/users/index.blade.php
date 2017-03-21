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
                <form>
                    <div class="input-group input-group-sm" style="width: 240px;">
                        <input type="text" value="{{request('search')}}" name="search" id="data-table-search" class="form-control pull-right" placeholder="Pesquisar">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>

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
                            <tr id="row-{{ $user->id }}" class="row-dynamic-table" ondblclick="openRemotePage('{{ route('manager.users.edit', ['id' => $user->id]) }}')">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->function }}</td>
                                <td style="width: 140px;">
                                    <a onclick="openRemotePage('{{ route('manager.users.edit', ['id' => $user->id]) }}')" class="btn btn-warning btn-xs">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
                                    </a>
                                    <a onclick="removeDataTableItem('{{ route('manager.users.remove', ['id' => $user->id]) }}', {{$user->id}})"
                                       class="btn btn-danger btn-xs"
                                    ><i class="fa fa-times-circle" aria-hidden="true"></i> Excluir</a>
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
            <a onclick="openRemotePage('{{ route('manager.users.create') }}')" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Cadastrar</a>
            <a onclick="reloadCurrentPage(true)" class="btn btn-success btn-sm"><i class="fa fa-refresh"></i> Atualizar</a>
            {{ $users->appends(Request::only('search'))->links() }}
        </div>
        <!-- /.box-footer-->
    </div>
@endsection
