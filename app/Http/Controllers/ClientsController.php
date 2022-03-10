<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clients;

class ClientsController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $clients = clients::all();
       //dd($students);
       return view('listeclient', compact('clients','clients'));
    }


    public function create()
    {
        
        return view('create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        clients::create([
            'cin' => $request->cin,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'datenaissance' => $request->datenaissance,
            'adresse' => $request->adresse,
            'ville' => $request->ville,
            'codepostale' => $request->codepostale,
            'tel' => $request->tel,
            'created_at' => now(),
            

        ]);
       
        return redirect()->route('client.listeclient')->with('succes', 'Client has been added!');

    }




    public function edit(Clients $client)
    {
       
        return view('edit')->with('client', $client);

    }


    public function update(Request $request, Clients $client)
    {
        $client->update([
            'cin' => $request->cin,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'datenaissance' => $request->datenaissance,
            'adresse' => $request->adresse,
            'ville' => $request->ville,
            'codepostale' => $request->codepostale,
            'tel' => $request->tel,
            'created_at' => now(),
        
        ]);
       
        return redirect()->route('client.listeclient')->with('succes', 'Student has been Uptadded!');

    }


    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
      return redirect()->route('listeclient')->with('success', 'Client delete!');
    }


}
