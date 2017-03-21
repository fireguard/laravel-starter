@extends('manager.layouts.modal')

@section('title')
    Edição de Perfil
@endsection

@section('content')
    {!! $form->render() !!}
@endsection


@section('footer')
    <script>
        {!! $form->renderScripts() !!}
        submitForm('{{$form->getId()}}', {'reload': true});
    </script>
@endsection
