<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\voitures;

class VoituresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voitures = voitures::all();
       //dd($students);
       return view('listevoiture', compact('voitures','voitures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        $request->validate([
            'matricule' => 'required',
            'type' => 'required',
            'modele' => 'required',
            'couleur' => 'required' 
        ]);

        $photo='noimg.png';
        if($request->photo)
        {
                $request->validate([
                    'photo' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000', 
                ]);
        
                $photo= date('mdYHis').uniqid().'.'.$request->photo->extension();
                $request->photo->move(public_path('uploaded_imgs'),$photo);	
               
        
                }

        voitures::create([
            'matricule' => $request->matricule,
            'type' => $request->type,
            'modele' => $request->modele,
            'couleur' => $request->couleur,
            'photo' => $request->photo,
            'created_at' => now(),
            

        ]);
       
        return redirect()->route('listevoiture')->with('succes', 'Client has been added!');

    }


   
    public function edit(voitures $voiture)
    {
        return view('editvoiture')->with('voiture', $voiture);
    }

   
    public function update(Request $request, voitures $voiture)
    {
        $voiture->update([
            'matricule' => $request->matricule,
            'type' => $request->type,
            'modele' => $request->modele,
            'couleur' => $request->couleur,
            'created_at' => now(),
        
        ]);
       
        return redirect()->route('listevoiture')->with('succes', 'Student has been Uptadded!');
    }


    public function search(Request $request)
    {
           
          
    }


   
    public function destroy(voitures $voiture)
    {
           
            $voiture->delete();
            return redirect('listevoiture')->with('success', 'Contact deleted!');
          
    }
}
