<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        /*$categories = DB::table('categories')
      
        ->select('categories.*')
        ->get();*/
        
        return view("categories.index", ["categories" => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return json_encode(['id' => 'create' ]);
        $categories = DB::table('categories')
        ->orderBy('id')
        ->get();
        return view('Categories.new', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorie = new categorie();
        $categorie -> id = $request-> id;
        $categorie -> name = $request-> name;
        $categorie -> description = $request -> description;
        $categorie -> save();

        $categories = Categorie::all();
        return view('Categories.index', ['categories' => $categories]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        $categories = DB::table('categories')
        ->orderBy('id')
        ->get();
        return view('Categories.edit', ['categorie'=> $categorie,  'categories' => $categories]);

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
        $categorie = Categorie::find($id);
        $categorie = new categorie();
        $categorie -> id = $request-> id;
        $categorie -> name = $request-> name;
        $categorie -> description = $request -> description;
        $categorie -> save();



        $categories = Categorie::all();
        return view('Categories.index', ['categories' => $categories]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();

        $categories = Categorie::all();
        return view('Categories.index', ['categories' => $categories]);
    }
}
