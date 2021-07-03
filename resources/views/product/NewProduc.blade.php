@extends('layout')

@section('title')
Registrar nuevo Producto
@endsection

@section('conte')

{{ $id }}

<form action="{{ route('produc.store') }}" method="POST" id="form">
@csrf

    <label for="name">Nombre del Producto</label>
    <p><input type="text" name="name"  placeholder="Ingresa el nombre del producto" id="name" required></p>

    <label for="desc">Descripción</label>
    <p><input type="textarea" name="desc"  placeholder="Ingresa una pequeña descripción del producto" id="desc" required></p>
    
    <label for="addres">Precio</label>
    <p><input type="number" name="price"  placeholder="Ingresa el precio del producto" id="price" required></p>

    <label for="phone">Photo</label>
    <p><input type="file" name="photo" id="photo" id="photo"></p>

    <p><input type="hidden" value="{{ $id }}" name="restaurante"></p>

    <p><input type="submit" value="Registrar nuevo"></p>
    </form>
    <p class="warnings" id="warnings"></p>


</form>


<script type="text/javascript" src="{{ asset('JS/nproduct.js') }}">

@endsection