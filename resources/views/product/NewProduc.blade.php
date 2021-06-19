@extends('layout')

@section('title')
Registrar nuevo Producto
@endsection

@section('conte')

<form action="" method="post">


    <label for="name">Nombre del Producto</label>
    <p><input type="text" name="name"  placeholder="Ingresa el nombre del producto" id="name" required></p>

    <label for="desc">Descripción</label>
    <p><input type="text" name="desc"  placeholder="Ingresa una pequeña descripción del producto" id="desc" required></p>
    
    <label for="addres">Address</label>
    <p><input type="text" name="addres"  placeholder="Ingresa tu dirección" id="addres" required></p>

    <label for="phone">Phone</label>
    <p><input type="tel" name="phone" id="phone" placeholder="Ingresa tu telefono" id="phone"></p>

    <p><input type="submit" value="Registrate"></p>
    </form>
    <p class="warnings" id="warnings"></p>


</form>


@endsection