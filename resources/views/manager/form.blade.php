@extends('manager.layouts.app')

@section('page-title')
    Form Examples<small>Version 0.0.2</small>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Form Examples</li>
    </ol>
@endsection

@section('content')
    <div class="box">
        {{--<div class="box-header with-border">--}}
            {{--<h3 class="box-title">Form Example</h3>--}}
        {{--</div>--}}
        <div class="box-body">

            {!! $form->render() !!}
        </div>
    </div>
@endsection

@section('footer')
    <script>{!!  $form->renderScripts() !!}</script>

    <script>
        jQuery(".datepicker").datepicker({
            "language": "pt-BR",
            "format": "dd/mm/yyyy",
            "autoclose": true,
            "todayHighlight": true
        });
    </script>
@endsection
