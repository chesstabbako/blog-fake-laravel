@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edición</h1>
@stop

@section('content')
    
{!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'put']) !!}

<div class="form-group">

    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null , ['readonly', 'class'=>'form-control', 'placeholder'=>'Category name']) !!}

</div>

<div class="form-group">

    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null , ['readonly', 'class'=>'form-control', 'placeholder'=>'Slug name']) !!}

</div>

{!! Form::close() !!}
     

@stop

