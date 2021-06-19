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
    @forelse ($user as $userItem)
    <li> {{ $userItem->NameR }} </li>
    @empty
    <li>No hay nada alv</li>
    @endforelse
</ul>
        

    @endsection