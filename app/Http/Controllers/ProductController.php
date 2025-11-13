<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // tampilkan semua product 
     public function index()
        {
            $product = Product::all();
            return view("products.home", compact("product"));
        }

    // ke halaman create
    public function create()
    {
        return view('products.create');
    }

    // simpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        Product::create($request->all());
        return redirect('/products');
    }
    
}
