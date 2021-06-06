<?php

namespace App\Http\Controllers;

use App\Models\enregistrements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnregistrementController extends Controller
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
        $enregistrements = enregistrements::all();
        return view('enregistrement.index')->with('enregistrements', $enregistrements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storage(Request $request)
    {
        //dd($request->id, $request->title,);
        $user = Auth()->user()->id;

        if (enregistrements::where('medicament_id', $request->medicament_id)->exists()) {
            return redirect()->route('products.index')->with('success', 'Cette demande a deja été ajouté.');
        }

        DB::table('enregistrements')->insert(['user_id' => $user, 'medecin_id' => $request->medecin_id, 'medicament_id' => $request->medicament_id]);


        return redirect()->route('products.index')->with('success', 'La demande a bien été ajouté.');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        enregistrements::where('id', $id)->delete();

        return back()->with('success', 'Votre demande a été prise en compte');
    }
}
