@extends('layout')

@section('title')
Menú | Productos disponibles
@endsection

@section('conte')


<ul> 
    El Identificador del restaurante es {{$idR}}
    @forelse ($product as $productItem)
    
    <li>  <a href=" {{ route('produc.show', $productItem->idProducto) }}">  {{ $productItem->name . " " . $productItem->descrip }}</a>  </li>
    @empty
    <li>No hay nada alv</li>
    @endforelse
<br><br><br>
    <a href="{{ route('produc.create', $idR) }}">¿Deseas agregar un nuevo producto?</a>

    

</ul>





@endsection






