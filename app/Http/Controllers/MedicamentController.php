<?php

namespace App\Http\Controllers;

use App\Models\categorie_medicament;
use App\Models\categories;
use App\Models\medecins;
use App\Models\medicaments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicamentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        if (request()->categorie) {
            $medicaments = medicaments::with('categories')->whereHas('categories', function ($query){
                $query->where('slug', request()->categorie);
            })->paginate(4);
        } else{
            $medicaments = medicaments::with('categories')->paginate(4);
        }


        return view('products.index')->with('medicaments',$medicaments);
    }

    public function show($slug){

        $medicament = medicaments::where('slug', $slug)->firstOrFail();
        $medecins = medecins::all();

        return view('products.show')->with('medicament', $medicament)->with('medecins', $medecins);
    }

    public function search()
    {


        $q = request()->input('q');

        $medicaments = medicaments::where('denomination', 'like', "%$q%")
            ->paginate(6);

        return view('products.index')->with('medicaments', $medicaments);
    }
}
