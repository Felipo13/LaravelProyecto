@extends('layout')


@section('title')
Bienvenido usuario | Rapidisimo
@endsection


@section('conte')
    
    @section('opcabe')
    <a href="">Perfil</a>
    <a href="">Cerrar sesión</a>
    @endsection

<ul>    
    @forelse ($index as $indexItem)
    <li> {{ $indexItem->name }} </li>
    @empty
    <li>No hay nada alv</li>
    @endforelse
</ul>
        

    @endsection