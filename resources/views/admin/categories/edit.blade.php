@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')

{!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'put']) !!}

<div class="form-group">

    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null , ['class'=>'form-control', 'placeholder'=>'Category name']) !!}

</div>

@error('name')

  <span class="text-danger">{{$message}}</span>
    
@enderror

<div class="form-group">

    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null , ['readonly', 'class'=>'form-control', 'placeholder'=>'Slug name']) !!}

</div>

@error('slug')

  <span class="text-danger">{{$message}}</span>
    
@enderror

{!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

@stop

