@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')

@if (session('info'))

<div class="alert alert-success">

    <span>{{session('info')}}</span>

</div>

@endif

{!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'put']) !!}

<div class="form-group">

    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null , ['class'=>'form-control', 'placeholder'=>'Category name']) !!}

  @error('name')
   
    <span class="text-danger">{{$message}}</span>
    
  @enderror

</div>

<div class="form-group">

    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null , ['readonly', 'class'=>'form-control', 'placeholder'=>'Slug name']) !!}

  @error('slug')

    <span class="text-danger">{{$message}}</span>
    
  @enderror

</div>


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

