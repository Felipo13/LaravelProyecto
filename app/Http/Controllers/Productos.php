<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class Productos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $idR = $id;
        return view('productos', [
            'product' => producto::where('FK_IdResta', $id)->get()
        ])->with('idR',$idR);
    }

    

    public function create($id)
    {
        
        return view('product.NewProduc')->with('id', $id);
    }



    public function store(Request $request)
    {
        $fkRest = request('restaurante');

         producto::create([
            'name' => request('name'),
            'descrip' => request('desc'),
            'photo' => request('photo'),
            'price' => request('price'),
            'FK_IdResta' => $fkRest,
        ]);
        return redirect()->route('produc.create', $fkRest);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('product\Product', [
            'product' => producto::where('idProducto', '=', $id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
