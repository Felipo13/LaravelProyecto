@extends('layout')


@section('title')
Registro | Rapidisimo
@endsection



@section('conte')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link rel="stylesheet" href="{{ asset('CSS/estilos.css') }}">
<link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('CSS/sweetalert2.min.css') }}">
<div class="container-login">
    <div class="wrap-login">
<form class="login-form validate-form" action="{{ route('registro') }}" method="POST" id="form">
<span class="login-form-title">Registro</span>
@csrf
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
<input class="input100"  type="text" name="lname"  placeholder="Ingresa tus apellidos" id="lname" required>
<span class="focus-efecto"></span>  </div>

<div class="wrap-input100" data-validate = "Usuario incorrecto">
<label for="addres"></label>
<input class="input100"  type="text" name="addres"  placeholder="Ingresa tu dirección" id="addres" required>
<span class="focus-efecto"></span>  </div>

<div class="wrap-input100" data-validate = "Usuario incorrecto">
<label for="phone"></label>
<input class="input100" type="tel" name="phone" id="phone" placeholder="Ingresa tu telefono" id="phone">
<span class="focus-efecto"></span>  </div>

<div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"> </div>
@if(Session::has('g-recaptcha-response'))
<p id="rcc" class="alert {{Session::get('alert-class' , 'alert-info')}}">
{{Session::get('g-recaptcha-response')}}
</p>
@endif
    

<div class="container-login-form-btn">
                <div class="wrap-login-form-btn">
                    <div class="login-form-bgbtn"></div>

<p><button type="submit"  class="login-form-btn" value="Registrate">Registrarse</p>
</form>
</div>
<p class="warnings" id="warnings"></p>

            </div>
        </form>
    </div>
</div>    
</div> 
 


    <script type="text/javascript" src="{{ asset('JS/registro.js') }}">
    
    </script>
   
    @endsection