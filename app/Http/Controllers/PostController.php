<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants=Post::paginate(4);
        return view('etudiant.index',compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('etudiant.ajout');
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
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe'=>'required',

        ]);
        $post=new Post();
        $post->nom =$request->nom;
        $post->prenom = $request->prenom;
        $post->classe =$request->classe;
        $post->save();

        return redirect('/ajout')->with('status',"l'etudiant a bien été enregistrer");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
    {
        // mettre  a jour
        $etudiants=Post::find($id);
        return view('etudiant.update',compact('etudiants'));
    }
    public function update_traitement(Request $request)
    {
        $request->validate([
        'nom'=>'required',
        'prenom'=>'required',
        'classe'=>'required',

        ]);
        $post=Post::find($request->id);
        $post->nom =$request->nom;
        $post->prenom = $request->prenom;
        $post->classe =$request->classe;
        $post->update();

        return redirect('/etudiant')->with('status',"l'etudiant a bien été modifieree");
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiant=Post::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status',"l'etudiant a bien été suprimer");
    }
}
