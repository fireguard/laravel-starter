@extends('manager.layouts.app')

@section('page-title')
    Listagem de Usuários
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Listagem de Usuários</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header" >
                    <h4 class="box-title"><i class="fa fa-users"></i> Usuários</h4>
                    {{--<div class="box-tools">--}}
                        {{--<div class="input-group input-group-sm" style="width: 200px;">--}}
                            {{--<input type="text" name="table_search" class="form-control pull-right" placeholder="Pesquisar">--}}

                            {{--<div class="input-group-btn">--}}
                                {{--<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
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
                                        <a href="{{ route('manager.users') }}" class="btn btn-warning btn-xs">
                                            <i class="fa fa-pencil"></i> Editar
                                        </a>
                                        <a href="{{ route('manager.users') }}" class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i> Excluir
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->

                <div class="box-footer clearfix">
                    <a href="{{ route('manager.users') }}" class="btn btn-primary btn-sm">Cadastrar novo usuário</a>

                    {{ $users->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
