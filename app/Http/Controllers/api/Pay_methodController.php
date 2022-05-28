<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
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
        return json_encode(['pay_methods' => $pay_methods]);
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

        return json_encode(['pay_method' => $pay_method]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pay_method = Pay_method::find($id);
        $pay_methods = db::table('pay_methods')
        ->orderBy('id')
        ->get();

        return json_encode(['pay_method' => $pay_method, 'pay_methods' => $pay_methods]);
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
        $pay_method -> id = $request -> id;
        $pay_method -> name = $request -> name;
        $pay_method -> other_details = $request -> other_details;
        $pay_method -> save();

        return json_encode(['pay_method' => $pay_method]);
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
        return json_encode(["pay_methods" => $pay_methods, 'success' => true]);
    }
}
