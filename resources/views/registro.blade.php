@extends('layout')


@section('title')
Registro | Rapidisimo
@endsection


@section('conte')
<link rel="stylesheet" href="{{ asset('CSS/estilos.css') }}">
<link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('CSS/sweetalert2.min.css') }}">

    <div class="container-login">
        <div class="wrap-login">
    <form class="login-form validate-form" action="{{ route('registro') }}" method="GET" id="form">
    <span class="login-form-title">Registro</span>
    
    <div class="wrap-input100" data-validate = "Usuario incorrecto">
    <label for="mail"></label>
    <input class="input100"  type="email" name="email" autofocus  placeholder="Ingresa un correo" id="mail" required>
    <span class="focus-efecto"></span>  </div>

    <div class="wrap-input100" data-validate = "Usuario incorrecto">
    <label for="pass"></label>
    <input class="input100"  type="password" name="pass"  placeholder="Ingresa una contraseña" id="pass" required>
    <span class="focus-efecto"></span>  </div>

    <div class="wrap-input100" data-validate = "Usuario incorrecto">
    <label for="name"></label>
    <input class="input100"  type="text" name="name"  placeholder="Ingresa tu(s) nombre(s)" id="name" required>
    <span class="focus-efecto"></span>  </div>

    <div class="wrap-input100" data-validate = "Usuario incorrecto">
    <label for="lname"></label>
    <input class="input100"  type="text" name="apellido"  placeholder="Ingresa tus apellidos" id="lname" required>
    <span class="focus-efecto"></span>  </div>

    <div class="wrap-input100" data-validate = "Usuario incorrecto">
    <label for="addres"></label>
    <input class="input100"  type="text" name="addres"  placeholder="Ingresa tu dirección" id="addres" required>
    <span class="focus-efecto"></span>  </div>

    <div class="wrap-input100" data-validate = "Usuario incorrecto">
    <label for="phone"></label>
    <input class="input100" type="tel" name="phone" id="phone" placeholder="Ingresa tu telefono" id="phone">
    <span class="focus-efecto"></span>  </div>

    <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>

    <p><button type="submit"  class="login-form-btn" value="Registrate">Registrarse</p>
    </form>
    <p class="warnings" id="warnings"></p>
    </div>
                </div>
            </form>
        </div>
    </div>     



    <script type="text/javascript" src="{{ asset('JS/registro.js') }}">
    
    </script>
    
    @endsection