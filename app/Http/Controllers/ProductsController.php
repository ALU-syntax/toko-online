<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $allProducts = Product::all();
        return view('products.index', [
            'products' => $allProducts
        ]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        Product::create($request->all());

        return redirect('/products');
    }
}
