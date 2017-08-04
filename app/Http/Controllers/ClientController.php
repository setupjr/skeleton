<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = Clients::whereNull('deleted_at')->paginate(10, ['clients.*']);
        //$clients = Clients::all()->paginate(10, ['products.*']);

        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $clients = new Clients();
        $clients->name = Input::get('name');
        $clients->save();

        $id = $clients->id;

        $request->session()->flash('status', ['success' => "Cliente salvo com sucesso"]);

        return redirect()->route('clients.edit', ['id' => $id]);
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
        //
        $client = Clients::find($id);

        return view('clients.edit', ['client' => $client]);
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
        $client = Clients::find($id);

        $client->name = Input::get('name');
        $client->save();

        $request->session()->flash('status', ['success' => "Cliente salvo com sucesso"]);

        return redirect()->route('clients.edit', ['id' => $id]);
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
        $client = Clients::find($id);
        $client->delete();

        Session::flash('status', ['success' => "Cliente deletado com sucesso!"]);

        return redirect()->back();
    }

    public function listClient()
    {
        $clients = Clients::all();

        return view("listacliente", ["clients" => $clients]);
    }
}
