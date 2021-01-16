@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')

@if (session('info'))

<div class="alert alert-success">

    <span>{{session('info')}}</span>

</div>

@endif

{!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}

@include('admin.tags.partials.form')

{!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

@stop

@section('js')
    <script src="{{asset('vendor\jQuery-Plugin-stringToSlug-1.3\jquery.stringToSlug.min.js')}}"></script>


    <script>

    $(document).ready( function() {
      $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
      });
    });

    </script>

@stop

