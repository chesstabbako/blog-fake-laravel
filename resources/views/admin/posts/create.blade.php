@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">

       <div class="card-body">
           
          {!! Form::open(['route'=>'admin.posts.store', 'files' => true]) !!}
           
          {{-- {!! Form::hidden('user_id', Auth::user()->id) !!} esto
          se hace con el observer PostObserver--}}

            @include('admin.posts.partials.form')

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

<script>

$(document).ready(function(){

 $('#file').change(function(e){

   let file= e.target.files[0];

   let reader= new FileReader();

   reader.onload= (event) => {

    $('#img').attr('src', event.target.result)

   };

   reader.readAsDataURL(file);

 })

});

</script>

@stop