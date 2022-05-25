<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = db::table('products')
        ->join('categories', 'products.id_categories', '=', 'categories.id')
        ->select('products.*', "categories.id")
        ->get();
        
        //$products = product::all();
        return json_encode(['products' => $products]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new product();
        $product->id = $request->id;
        $product->name = $request->name;
        $product->price = $request-> price;
        $product->stock = $request-> stock;
        $product->id_categories = $request-> id_categories;
        $product->save();

        return json_encode(['product' => $product]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = product::find($id);
        $categories = db::table('categories')
        ->orderBy('id')
        ->get();

        return json_encode(['product' => $product, 'categories' => $categories]);

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
        $product = product::find($id);
        $product->id = $request->id;
        $product->name = $request->name;
        $product->price = $request-> price;
        $product->stock = $request-> stock;
        $product->id_categories = $request-> id_categories;
        $product->save();

        return json_encode(['product' => $product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();
        $products = db::table('products')
        ->join('categories', 'products.id_categories', '=', 'categories.id')
        ->select('products.*', "categories.id")
        ->get();

        return json_encode(['products' => $products, 'success' => true]);
        
    }
}
