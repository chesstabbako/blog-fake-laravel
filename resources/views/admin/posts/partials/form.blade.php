<div class="form-group">
   
   {!! Form::label('name', 'Nombre del post') !!}
   {!! Form::text('name', null, ['placeholder'=>'Ingrese el nombre del post','autocomplete'=>'off', 'class'=>'form-control']) !!}

   @error('name')

   <small class="text-danger">

     *{{$message}}

   </small>

@enderror

</div>

<div class="form-group">
   
   {!! Form::label('slug', 'Slug') !!}
   {!! Form::text('slug', null, ['readonly', 'class'=>'form-control']) !!}

   @error('slug')

     <small class="text-danger">

       *{{$message}}

     </small>

   @enderror

</div>

<div class="form-group">
   
   {!! Form::label('category_id', 'Categorias') !!}
   {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
   
       @error('category_id')

           <small class="text-danger">

             *{{$message}}

           </small>

       @enderror      

</div>

<div class="form-group">
 
   <p class="font-weight-bold"></p>

   @foreach ($tags as $tag)

   <label class="mr-4">
       
     {!! Form::checkbox('tags', $tag->id, null) !!}
   
     {{$tag->name}}

   </label>

   @endforeach

   @error('tags')

   <small class="text-danger">

     *{{$message}}

   </small>

@enderror

</div>

<div class="form-group">
   
   {!! Form::label('extract', 'Extract') !!}
   {!! Form::textarea('extract', null, ['placeholder'=>'Ingrese el extracto', 'class'=>'form-control']) !!}
   
   @error('extract')

       <small class="text-danger">

           *{{$message}}

       </small>

   @enderror 

</div>

<div class="form-group">
   
   {!! Form::label('body', 'Cuerpo') !!}
   {!! Form::textarea('body', null, ['placeholder'=>'Ingrese el contenido', 'class'=>'form-control']) !!}
   
   @error('body')

       <small class="text-danger">

           *{{$message}}

       </small>

   @enderror 

<div class="row my-4 p-2" >

 <div class="col">

  @isset($post->images)
  <img id="img" style="width: 100%" src="{{Storage::url($post->images->url)}}">
    @else
  <img id="img" style="width: 100%" src="https://i.pinimg.com/originals/aa/cd/46/aacd46c3647727dffb01bae41bb9f69c.jpg" alt="">
  @endisset

 </div>  

<div class="col">
  
 <div class="form-group">
   
     {!! Form::label('file', 'Select the pic') !!}
     {!! Form::file('file', ['class' => 'form-control', 'accept' => 'image/*']) !!}

     @error('file')

       <small class="text-danger">

         *{{$message}}

       </small>

     @enderror 

 </div>

</div>   

 </div>

<div class="form-group">
 
   <p class="font-weight-bold"></p>

   <label class="mr-4">
       
       {!! Form::radio('status', 1, true) !!}
       Borrador

   </label>
   
   <label class="mr-4">
       
       {!! Form::radio('status', 2) !!}
       Publicado

   </label>

</div>