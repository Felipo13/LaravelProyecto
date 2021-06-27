<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Http;
class indexC extends Controller{
public function __construct()
{
$this->middleware('auth');
}
public function index()
{

    $respuesta = Http::get('https://mindicador.cl/api');
    $dolar = $respuesta->json();
    return view('/', compact('dolar'));
 
}

}