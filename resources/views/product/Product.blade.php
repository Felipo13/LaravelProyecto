@extends('layout')

@section('title')
Detalles del producto
@endsection

@section('conte')

    @forelse ($product as $productItem)
    
    <li>  {{ $productItem->name . " | " . $productItem->descrip . " | " . $productItem->photo . " | $" . $productItem->price}} </li>
    @empty
    <li>Ah ocurrido un error al cargar los detalles</li>
    @endforelse

    <h2>Hola, Aqui estan tus detalles c':</h2>

@endsection