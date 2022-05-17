<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Product;
use App\Http\Resources\Product as ProductResource;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::all();
        return new ProductResource($product);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //crear un nuevo producto
        $product = new Product();
        $product-> asesor = $request->input('asesor');
        $product-> numclientes = $request->input('numclientes');
        $product-> pedidos = $request->input('pedidos');
        $product-> producto = $request->input('producto');
        $product-> cantidad = $request->input('cantidad');
        $product-> valor = $request->input('valor');
        $product-> estado = $request->input('estado');
        
        
        $product->save();

        return new ProductResource($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // para buscar un registro
        $product = Product::findOrFail($id);

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
        //para actualizar un dato
        $product = Product::findOrFail($id);
        $product-> asesor = $request->input('asesor');
        $product-> numclientes = $request->input('numclientes');
        $product-> pedidos = $request->input('pedidos');
        $product-> producto = $request->input('producto');
        $product-> cantidad = $request->input('cantidad');
        $product-> valor = $request->input('valor');
        $product-> estado = $request->input('estado');
        $product->save();
        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Para eliminar los datos
        $product = Product::findOrFail($id);
        if($product->delete()){
            return new ProductResource($product);
        }
             
    }
}
