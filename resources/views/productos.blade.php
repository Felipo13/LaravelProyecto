@extends('layout')

@section('title')
Menú | Productos disponibles
@endsection

@section('conte')


<ul> 
    
    @forelse ($product as $productItem)
    
    <li>  <a href=" {{ route('produc.show', $productItem->Id_Product) }}">  {{ $productItem->NameP . " " . $productItem->DescriP }}</a>  </li>
    @empty
    <li>No hay nada alv</li>
    @endforelse
<br><br><br>
    <a href="{{ route('produc.create') }}">¿Deseas agregar un nuevo producto?</a>

    

</ul>





@endsection






