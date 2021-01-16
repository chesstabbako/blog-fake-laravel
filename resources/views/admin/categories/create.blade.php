@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Crear</h1>
@stop

@section('content')

    {!! Form::open(['route'=>'admin.categories.store']) !!}

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

{!! Form::submit('Crear', ['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

@stop

{{-- @section('js')


<script src="vendor\jQuery-Plugin-stringToSlug-1.3\jquery.stringToSlug.min.js"></script>
    
<script>

$(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});

</script>

@endsection --}}

