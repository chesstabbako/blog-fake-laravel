@extends('adminlte::page')

@section('title', 'Show')

@section('content_header')
    <h1>Ver</h1>
@stop

@section('content')

{!! Form::model($tag, ['route' => ['admin.tags.show', $tag]]) !!}

<div class="form-group">

    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null , ['readonly', 'class'=>'form-control', 'placeholder'=>'Category name']) !!}

</div>

<div class="form-group">

    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null , ['readonly', 'class'=>'form-control', 'placeholder'=>'Slug name']) !!}

</div>

<div class="form-group">

    {!! Form::label('color', 'Color') !!}
    {!! Form::text('color', null , ['readonly', 'class'=>'form-control', 'placeholder'=>'Tag name']) !!}

</div>

{!! Form::close() !!}

@stop









