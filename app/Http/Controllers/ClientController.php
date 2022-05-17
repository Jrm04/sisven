<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view("client.index", ["clients" => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = DB::table('clients')
        ->orderBy('id')
        ->get();
        return view('Client.new', ['clients' => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new client();
        $client -> id = $request -> id;
        $client -> name = $request -> name;
        $client -> lastname = $request -> lastname;
        $client -> direction = $request -> direction;
        $client -> birth_date = $request -> birth_date;
        $client -> phone_number = $request -> phone_number;
        $client -> email = $request -> email; 
        $client -> save();

        $clients = Client::all();
        return view('Client.index', ['clients' => $clients]);

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
        $client = Client::find($id);
        $clients = db::table('clients')
        ->orderBy('id')
        ->get();
        return view('Client.edit', ['categorie' => $client, 'clients' => $clients]);
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
        $client = Client::find($id);
        $client = new client();
        $client -> id = $request -> id;
        $client -> name = $request -> name;
        $client -> lastname = $request -> lastname;
        $client -> direction = $request -> direction;
        $client -> birth_date = $request -> birth_date;
        $client -> phone_number = $request -> phone_number;
        $client -> email = $request -> email;

        $client -> save();

        $clients = Client::all();
        return view('Client.index', ['clients' => $clients]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client -> delete();

        $clients = Client::all();
        return view('Client.index', ['clients' => $clients]);
    }
}
