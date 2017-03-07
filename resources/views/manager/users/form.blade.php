<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-users"></i>
            {{ isset($user) ? $user->id.' - '.$user->name : 'Cadastro de Usuários' }}
        </h3>

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
            <div class="hidden-xs hidden-sm col-md-3 text-center">
                <img src="/images/no-image-3x4.jpg" width="80%" style="max-width: 180px;" />
            </div>
            <div class="col-xs-12 col-md-9">
                <div class="row">
                    {{ csrf_field() }}
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Nome</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name', isset($user) ? $user->name : '') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            @if ($errors->has('email'))
                                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>

                    @if(!isset($user))
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Senha</label>
                                <input id="password" type="password" class="form-control" placeholder="Senha" name="password" required>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group has-feedback{{ $errors->has('password_confirmation ') ? ' has-error' : '' }}">
                                <label for="password_confirmation ">Repita a senha</label>
                                <input id="password_confirmation " type="password" class="form-control" placeholder="Senha" name="password_confirmation " required>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if ($errors->has('password_confirmation '))
                                    <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation ') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                    @endif

                    <div class="col-xs-12">
                        <div class="form-group has-feedback{{ $errors->has('function') ? ' has-error' : '' }}">
                            <label for="name">Função</label>
                            <input id="function" type="text" class="form-control" name="function" value="{{ old('function', isset($user) ? $user->function : '') }}" required>
                            @if ($errors->has('function'))
                                <span class="help-block">
                        <strong>{{ $errors->first('function') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
        <div class="row">
            <div class="col-xs-12 action-footer text-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Salvar</button>
                <a class="btn btn-danger" href="{{ route('manager.users') }}">
                    <i class="fa fa-times"></i> Cancelar
                </a>
            </div>
        </div>
    </div>
    <!-- /.box-footer-->
</div>
