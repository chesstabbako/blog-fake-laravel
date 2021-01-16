@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Crear</h1>
@stop

@section('content')

{!! Form::open(['route'=>'admin.tags.store']) !!}

@include('admin.tags.partials.form') 

{!! Form::submit('Crear', ['class'=>'btn btn-primary']) !!}

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

