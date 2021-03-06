<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{ Auth::user()->avatar }}" class="user-image" alt="User Image">
        {{--<span class="hidden-xs">&nbsp;</span>--}}
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="{{ Auth::user()->avatar }}" class="img-circle bg-active" alt="Usuário">

            <p>{{ Auth::user()->name }} <small>{{ Auth::user()->function ?: '' }}</small></p>
        </li>
        <!-- Menu Body -->
        {{--<li class="user-body">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-4 text-center">--}}
                    {{--<a href="#">Followers</a>--}}
                {{--</div>--}}
                {{--<div class="col-xs-4 text-center">--}}
                    {{--<a href="#">Sales</a>--}}
                {{--</div>--}}
                {{--<div class="col-xs-4 text-center">--}}
                    {{--<a href="#">Friends</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- /.row -->--}}
        {{--</li>--}}
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="#" onclick="openRemotePage('{{ route('manager.users.profile') }}')" class="btn btn-default btn-flat">Perfil</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        Sair
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
    </ul>
</li>
