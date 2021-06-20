@extends('layout')

@section('title')
Rapidisimo
@endsection

@section('conte')


<ul>    
    @forelse ($admin as $adminItem)
    <li> <a href="{{ route('produc.index', $adminItem->idResta) }}"> {{ $adminItem->Id_Resta . " " . $adminItem->name }} </a> </li>
    @empty
    <li>No hay nada alv</li>
    @endforelse

    

</ul>


<form action="" method="post">



</form>


@endsection