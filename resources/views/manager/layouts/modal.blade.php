<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">@yield('title')</h3>
        <div class="box-tools pull-right">
            <!-- class="close" data-dismiss="modal" aria-hidden="true" -->
            <button type="button" class="btn btn-box-tool" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
            {{--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>--}}
        </div>
    </div>


    <div class="box-body">
        @yield('content')
    </div>

    @yield('footer')
</div>
