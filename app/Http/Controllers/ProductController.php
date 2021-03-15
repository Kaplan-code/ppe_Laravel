<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $products = Products::inRandomOrder()->take(6)->get();

        return view('products.index')->with('products',$products);
    }

    public function show($slug){

        $product = Products::where('slug', $slug)->firstOrFail();


        return view('products.show')->with('product', $product);
    }
}
