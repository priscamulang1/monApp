<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Materiel;
use Illuminate\Http\Request;

class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $departement=Departement::find($id);
        $materiels= Materiel::all()->where('DepartementId',$id);
        $nbr=count($materiels);
        return view('welcome',['departement'=>$departement,'nbr'=>$nbr,'materiels'=>$materiels,'layout'=>'createMat']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materiel=new Materiel();
        $materiel->DepartementId=$request->input('DepartementId');
        $materiel->designation=$request->input('designation');
        $materiel->description=$request->input('description');
        $materiel->etat=1;

        $materiel->save();
        return redirect('/matAdd/'.$request->input('DepartementId'));
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
    }
}
