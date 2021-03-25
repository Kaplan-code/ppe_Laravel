<?php

namespace App\Http\Controllers;

use App\Models\medicaments;
use Illuminate\Http\Request;

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
        $medicaments = medicaments::inRandomOrder()->take(6)->get();

        return view('products.index')->with('medicaments',$medicaments);
    }

    public function show($slug){

        $medicament = medicaments::where('slug', $slug)->firstOrFail();


        return view('products.show')->with('medicament', $medicament);
    }
}
