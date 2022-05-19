<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pay_method;
use Illuminate\Support\Facades\DB;

class Pay_methodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pay_methods = Pay_method::all();
        return view("paymethod.index", ["pay_methods" => $pay_methods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pay_methods = DB::table('pay_methods')
        ->orderBy('id')
        ->get();
        return view('paymethod.new', ['pay_methods' => $pay_methods]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pay_method = new Pay_method();
        $pay_method -> id = $request -> id;
        $pay_method -> name = $request -> name;
        $pay_method -> other_details = $request -> other_details;
        $pay_method -> save();

        $pay_methods = Pay_method::all();
        return view('paymethod.index', ['pay_methods' => $pay_methods]);

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
        $pay_method = Pay_method::find($id);
        $pay_methods = db::table('pay_methods')
        ->orderBy('id')
        ->get();
        return view('paymethod.edit', ['pay_method' => $pay_method, 'pay_methods' => $pay_methods]);
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
        $pay_method = Pay_method::find($id);
        $pay_method = new Pay_method();
        $pay_method -> id = $request -> id;
        $pay_method -> name = $request -> name;
        $pay_method -> other_details = $request -> other_details;
        $pay_method -> save();

        $pay_methods = Pay_method::all();
        return view('paymethod.index', ['pay_methods' => $pay_methods]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pay_method = Pay_method::find($id);
        $pay_method -> delete();

        $pay_methods = Pay_method::all();
        return view("paymethod.index", ["pay_methods" => $pay_methods]);
    }
}
