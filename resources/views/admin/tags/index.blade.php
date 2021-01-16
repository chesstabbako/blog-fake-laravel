@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Tags</h1>
@stop

@section('content')

  <div class="card">

    @if (session('info'))

    <small class="alert alert-success">
        
        {{session('info')}}
        
    </small>
        
    @endif
     
    <div class="card-head">
       
        <small>
            <a class="btn btn-primary btn-sm mb-2" href="{{route('admin.tags.create')}}">
            
                Crear nueva

            </a>
        </small>

    </div>

    <div class="card-body">

        <table class="table table-striped">

            <thead>

                <tr>
                  
                    <th>ID</th>
                    <th>Name</th>
                    <th>Color</th>
                    <th colspan="3"></th>

                </tr>

            </thead>

            <tbody>

                @foreach ($tags as $tag)

                  <tr>
                      
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->name}}</td>
                    <td>{{$tag->color}}</td>
                    <td width="10px">
                        <a class="btn btn-secondary btn-sm" href="{{route('admin.tags.show', $tag)}}">Ver</a>
                    </td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}">Editar</a>
                    </td>
                    <td width="10px">

                       <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                         
                           @csrf
                           @method('delete')

                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    
                       </form>

                    </td>

                  </tr>
                      
                @endforeach

            </tbody>

        </table>

    </div>

  </div>








@stop



