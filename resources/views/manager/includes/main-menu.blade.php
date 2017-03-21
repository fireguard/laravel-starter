<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        @include('manager.includes.user-status-bar')
        @include('manager.includes.search-form')

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            {{--<li class="header">MENU PRINCIPAL</li>--}}
            <li class="{{ check_active(['manager', 'manager/home']) }}">
                <a href="{{ route('manager.home') }}">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>
            </li>

            <li class="{{ check_active(['manager/example/form']) }}">
                <a href="{{ route('manager.example.form') }}">
                    <i class="fa fa-edit"></i> <span>Form</span>
                </a>
            </li>
            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-dashboard"></i> <span>Dashboard</span>--}}
                    {{--<span class="pull-right-container">--}}
                      {{--<i class="fa fa-angle-left pull-right"></i>--}}
                    {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>--}}
                    {{--<li class="active"><a href="#"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-files-o"></i>--}}
                    {{--<span>Layout Options</span>--}}
                    {{--<span class="pull-right-container">--}}
                        {{--<span class="label label-primary pull-right">4</span>--}}
                    {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="#"><i class="fa fa-circle-o"></i> Top Navigation</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-circle-o"></i> Boxed</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-circle-o"></i> Fixed</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <li class="treeview {{ check_active(['manager/users']) }}">
                <a href="#">
                    <i class="fa fa fa-shield fw"></i>
                    <span>Administração</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (request()->is('manager/users') ? 'active' : '') }}" ><a href="{{ route('manager.users') }}"><i class="fa fa-users"></i> Usuários</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
