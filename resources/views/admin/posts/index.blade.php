@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.posts.create')}}">
    Crear nuevo post
</a>
    <h1>Mis posts</h1>
@stop

@section('content')
    @livewire('admin.post-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop