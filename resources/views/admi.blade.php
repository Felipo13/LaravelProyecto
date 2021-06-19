@extends('layout')

@section('title')
Rapidisimo
@endsection

@section('conte')


<ul>    
    @forelse ($admin as $adminItem)
    <li> <a href=""> {{ $adminItem->Id_Rest . " " . $adminItem->NameR }} </a> </li>
    @empty
    <li>No hay nada alv</li>
    @endforelse
</ul>


<form action="" method="post">



</form>


@endsection