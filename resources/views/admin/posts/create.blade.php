@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">

       <div class="card-body">
           
           {!! Form::open(['route'=>'admin.posts.store', 'method'=>'put']) !!}
             
             <div class="form-group">
                
                {!! Form::label('name', 'Nombre del post') !!}
                {!! Form::text('name', null, ['placeholder'=>'Ingrese el nombre del post','autocomplete'=>'off', 'class'=>'form-control']) !!}

             </div>

             <div class="form-group">
                
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['readonly', 'class'=>'form-control']) !!}

             </div>

             <div class="form-group">
                
                {!! Form::label('category_id', 'Categorias') !!}
                {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}

             </div>

             <div class="form-group">
              
                <p class="font-weight-bold"></p>

                @foreach ($tags as $tag)

                <label class="mr-4">
                    
                  {!! Form::checkbox('tags[]', $tag->id, null) !!}
                
                  {{$tag->name}}

                @endforeach

                </label>

             </div>

             <div class="form-group">
                
                {!! Form::label('extract', 'Extract') !!}
                {!! Form::textarea('extract', null, ['placeholder'=>'Ingrese el extracto', 'class'=>'form-control']) !!}
                
             </div>

             <div class="form-group">
                
                {!! Form::label('body', 'Cuerpo') !!}
                {!! Form::textarea('body', null, ['placeholder'=>'Ingrese el contenido', 'class'=>'form-control']) !!}
                
             </div>

             <div class="form-group">
              
                <p class="font-weight-bold"></p>

                <label class="mr-4">
                    
                    {!! Form::radio('status', 1, true) !!}
                    borrador
  
                </label>
                
                <label class="mr-4">
                    
                    {!! Form::radio('status', 2) !!}
                    Publicado
  
                </label>

             </div>

             {!! Form::submit('Crear post', ['class'=>'btn btn-primary btn-sm']) !!}

           {!! Form::close() !!}

       </div>

    </div>
@stop

@section('js')
<script src="{{asset('vendor\jQuery-Plugin-stringToSlug-1.3\jquery.stringToSlug.min.js')}}"></script>
<script src="{{asset('vendor\checkedi\ckeditor.js')}}"></script>

<script>
  
$(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});

ClassicEditor
.create( document.querySelector('#extract'))
.catch( error => {

  console.error(error)

});

ClassicEditor
.create( document.querySelector('#body'))
.catch( error => {

  console.error(error)

});

</script>
@stop