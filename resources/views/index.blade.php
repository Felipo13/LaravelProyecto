@extends('layout')


@section('title')
Bienvenido a Rapidisimo
@endsection


@section('conte')

<link rel="stylesheet" href="{{ asset('CSS/table.css') }}">
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
  <div class="card">
   <div class="card-body">
  <table class="table text-center">
  <thead>
    <tr>
    <td colspan="3" style="background-color: #3569DF; color:#ffffff"><strong> VALOR DEL DOLAR EN MÉXICO</strong></td>
       </tr>
         <tr>
         <th>FECHA</th>
         <th>DOLAR</th>
         <th>EURO</th>
         </tr>
  </thead>
  <tbody>
  <tr>
  <td></td>
 
  </tbody>
</table>
  </div>
  </div>
  </div>
  </div>
  </div>


   <a href="login"><button>Log In</button></a>
    <a href="registro"><button>Log Up</button></a>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>



@endsection
    

