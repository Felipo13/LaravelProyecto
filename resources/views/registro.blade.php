@extends('layout')


@section('title')
Registro | Rapidisimo
@endsection



@section('conte')
    <h1><center>registro</center></h1>

    <form action="{{ route('registro.store') }}" method="POST" id="form">
    @csrf
    <label for="mail">Email</label>
    <p><input type="email" name="email" autofocus  placeholder="Ingresa un correo" id="mail" required></p>
    

    <label for="pass">Password</label>
    <p><input type="password" name="pass"  placeholder="Ingresa una contraseña" id="pass" required></p>

    <label for="name">Name</label>
    <p><input type="text" name="name"  placeholder="Ingresa tu(s) nombre(s)" id="name" required></p>

    <label for="lname">LastName</label>
    <p><input type="text" name="apellido"  placeholder="Ingresa tus apellidos" id="lname" required></p>
    
    <label for="addres">Address</label>
    <p><input type="text" name="addres"  placeholder="Ingresa tu dirección" id="addres" required></p>

    <label for="phone">Phone</label>
    <p><input type="tel" name="phone" id="phone" placeholder="Ingresa tu telefono" id="phone"></p>

    <p><input type="submit" value="Registrate"></p>
    </form>
    <p class="warnings" id="warnings"></p>



    <script type="text/javascript" src="{{ asset('JS/registro.js') }}">
    
    </script>
    
    @endsection